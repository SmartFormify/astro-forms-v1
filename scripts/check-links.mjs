import { readFile, readdir, stat } from 'node:fs/promises';
import { join, dirname, resolve } from 'node:path';
async function markdownFiles(directory) { const entries = await readdir(directory); const files = []; for (const entry of entries) { const path = join(directory, entry); const info = await stat(path); if (info.isDirectory() && !['node_modules','.git','dist'].includes(entry)) files.push(...await markdownFiles(path)); else if (entry.endsWith('.md')) files.push(path); } return files; }
const files = await markdownFiles(process.cwd()); const failures = [];
for (const file of files) { const content = await readFile(file, 'utf8'); for (const match of content.matchAll(/\[[^\]]+\]\(([^)#]+)(?:#[^)]+)?\)/g)) { const link = match[1]; if (!/^(https?:|mailto:)/.test(link)) { try { await stat(resolve(dirname(file), link)); } catch { failures.push(`${file}: ${link}`); } } } }
if (failures.length) throw new Error(`Broken local Markdown links:\n${failures.join('\n')}`);
console.log(`Checked local links in ${files.length} Markdown files.`);
