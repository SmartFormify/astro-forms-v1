import { ActionError, defineAction } from 'astro:actions';
import { z } from 'astro/zod';

const endpoint = import.meta.env.SMARTFORMIFY_ENDPOINT;

export const server = {
  contact: defineAction({
    accept: 'form',
    input: z.object({
      name: z.string().trim().min(1, 'Enter your name.'),
      email: z.email('Enter a valid email address.'),
      message: z.string().trim().min(10, 'Add a little more detail.'),
      consent: z.coerce.boolean().optional(),
    }),
    handler: async ({ name, email, message }) => {
      if (!endpoint) throw new ActionError({ code: 'INTERNAL_SERVER_ERROR', message: 'Set SMARTFORMIFY_ENDPOINT on the server.' });
      const response = await fetch(endpoint, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ data: { name, email, message } }) });
      const result = await response.json().catch(() => null) as { success?: boolean; message?: string } | null;
      if (!response.ok || !result?.success) throw new ActionError({ code: 'BAD_REQUEST', message: result?.message ?? 'The endpoint did not accept this submission.' });
      return { message: result.message ?? 'Submission saved.' };
    },
  }),
};
