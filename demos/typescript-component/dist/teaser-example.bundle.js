// examples/template-generator/dest/teaser-example.ts
import { A, Div, H3, H4, Hgroup, Img, P } from "@typesafe-html5/typescript";
function teaserExample(params = {}) {
  const defaults = {
    node1Class: "teaser",
    content1: "{{ title }}",
    content2: "{{ subtitle }}",
    content3: "{{ description }}",
    node6Src: "{{ image_url }}",
    node6Alt: "{{ image_alt }}",
    node7Role: "button",
    node7Href: "{{ url }}",
    content4: "{{ 'Read more'|t }}"
  };
  const values = { ...defaults, ...params };
  const root = document.createDocumentFragment();
  const node1 = new Div().getElement();
  node1.setAttribute("class", values.node1Class);
  const node2 = new Hgroup().getElement();
  const node3 = new H3().getElement();
  node3.append(values.content1);
  node2.append(node3);
  const node4 = new H4().getElement();
  node4.append(values.content2);
  node2.append(node4);
  node1.append(node2);
  const node5 = new P().getElement();
  node5.append(values.content3);
  node1.append(node5);
  const node6 = new Img().getElement();
  node6.setAttribute("src", values.node6Src);
  node6.setAttribute("alt", values.node6Alt);
  node1.append(node6);
  const node7 = new A().getElement();
  node7.setAttribute("role", values.node7Role);
  node7.setAttribute("href", values.node7Href);
  node7.append(values.content4);
  node1.append(node7);
  root.append(node1);
  return root;
}
export {
  teaserExample
};
