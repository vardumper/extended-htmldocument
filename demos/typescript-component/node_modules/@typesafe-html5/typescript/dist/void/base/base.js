// src/void/base/base.ts
var Base = class {
  constructor(props = {}) {
    this.element = document.createElement("base");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.href !== void 0) {
      this.element.setAttribute("href", String(props.href));
    }
    if (props.target !== void 0) {
      this.setTarget(props.target);
    }
  }
  setHref(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("href");
    } else {
      this.element.setAttribute("href", String(value));
    }
    return this;
  }
  setTarget(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("target");
    } else {
      this.element.setAttribute("target", String(value));
    }
    return this;
  }
  getElement() {
    return this.element;
  }
};
export {
  Base
};
