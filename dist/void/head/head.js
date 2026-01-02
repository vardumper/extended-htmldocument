// templates/typescript/void/head/head.ts
var Head = class {
  constructor(props = {}) {
    this.element = document.createElement("head");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.children !== void 0) {
      this.setChildren(props.children);
    }
  }
  setChildren(children) {
    while (this.element.firstChild) {
      this.element.removeChild(this.element.firstChild);
    }
    if (typeof children === "string") {
      this.element.textContent = children;
    } else if (Array.isArray(children)) {
      children.forEach((child) => {
        if (typeof child === "string") {
          this.element.appendChild(document.createTextNode(child));
        } else {
          this.element.appendChild(child);
        }
      });
    } else {
      this.element.appendChild(children);
    }
    return this;
  }
  getElement() {
    return this.element;
  }
};
export {
  Head
};
