import type { APIRoute } from 'astro';

export const POST: APIRoute = async ({ request }) => {
  const endpoint = import.meta.env.SMARTFORMIFY_ENDPOINT;
  if (!endpoint) return new Response(JSON.stringify({ message: 'Server endpoint is not configured.' }), { status: 500 });
  const data = Object.fromEntries(await request.formData());
  const response = await fetch(endpoint, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ data }) });
  return new Response(await response.text(), { status: response.status, headers: { 'Content-Type': 'application/json' } });
};
