import { readFile } from 'node:fs/promises';
const source = await readFile(new URL('../src/data/forms.ts', import.meta.url), 'utf8');
const forms = [...source.matchAll(/basic\('/g)];
if (forms.length < 20) throw new Error('The template index must contain at least 20 forms.');
console.log(`Verified ${forms.length} template records.`);
