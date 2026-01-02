import { JSDOM } from 'jsdom';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

const dom = new JSDOM('<!doctype html><html><body></body></html>', { runScripts: 'outside-only' });
global.window = dom.window;
global.document = dom.window.document;


(async () => {
  const modulePath = path.join(__dirname, '..', '..', 'dist', 'article.js');
  const { Article } = await import('file://' + modulePath);

  const a = new Article({
    'data-attributes': { test: 'value', role: 'article' },
    'alpine-attributes': { '@click': 'do()', 'x-show': 'open', ':class': 'myClass', '.lazy': 'modelVal', 'show': 'visible' }
  });

  document.body.appendChild(a.getElement());

  console.log('\n--- outerHTML ---');
  console.log(a.getElement().outerHTML);

  const attrs = {};
  for (const attr of Array.from(a.getElement().attributes)) {
    attrs[attr.name] = attr.value;
  }
  console.log('\n--- attributes JSON ---');
  console.log(JSON.stringify(attrs, null, 2));
})();
