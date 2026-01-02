#!/usr/bin/env node
import { build } from 'esbuild';
import fs from 'fs/promises';
import path from 'path';

async function ensureDir(dir) {
  await fs.mkdir(dir, { recursive: true });
}

async function findTsFiles(dir) {
  const entries = await fs.readdir(dir, { withFileTypes: true });
  const files = [];
  for (const e of entries) {
    const res = path.join(dir, e.name);
    if (e.isDirectory()) {
      files.push(...await findTsFiles(res));
    } else if (e.isFile() && res.endsWith('.ts')) {
      files.push(res);
    }
  }
  return files;
}

(async () => {
  const from = path.join(process.cwd(), 'src');
  const to = path.join(process.cwd(), 'dist');

  const files = await findTsFiles(from);
  if (!files.length) {
    console.log('No TypeScript template files found in current directory');
    process.exit(0);
  }

  for (const f of files) {
    const rel = path.relative(from, f);
    const out = path.join(to, rel).replace(/\.ts$/, '.js');
    await ensureDir(path.dirname(out));
    console.log(`Bundling ${f} -> ${out}`);
    await build({
      entryPoints: [f],
      outfile: out,
      bundle: true,
      format: 'esm',
      platform: 'browser',
      target: ['es2018'],
      sourcemap: 'external',
    });
  }

  console.log('All templates bundled to dist/');
})().catch((err) => {
  console.error(err);
  process.exit(1);
});
