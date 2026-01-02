// src/void/style/style.ts
var Style = class {
  constructor(props = {}) {
    this.element = document.createElement("style");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.children !== void 0) {
      this.setChildren(props.children);
    }
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props["data-attributes"] !== void 0) {
      const __map = props["data-attributes"];
      if (__map !== null && __map !== void 0) {
        for (const __k in __map) {
          this.element.setAttribute(`data-${__k}`, String(__map[__k]));
        }
      }
    }
    if (props.dir !== void 0) {
      this.setDir(props.dir);
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.media !== void 0) {
      this.element.setAttribute("media", String(props.media));
    }
    if (props.nonce !== void 0) {
      this.element.setAttribute("nonce", String(props.nonce));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.type !== void 0) {
      this.setType(props.type);
    }
  }
  setClassName(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("className");
    } else {
      this.element.setAttribute("className", String(value));
    }
    return this;
  }
  setDataAttributes(value) {
    if (value === null || value === void 0) {
      for (const __a of Array.from(this.element.attributes)) {
        if (__a.name.startsWith("data-")) {
          this.element.removeAttribute(__a.name);
        }
      }
    } else {
      for (const __k in value) {
        this.element.setAttribute(`data-${__k}`, String(value[__k]));
      }
    }
    return this;
  }
  setDir(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("dir");
    } else {
      this.element.setAttribute("dir", String(value));
    }
    return this;
  }
  setId(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("id");
    } else {
      this.element.setAttribute("id", String(value));
    }
    return this;
  }
  setLang(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("lang");
    } else {
      this.element.setAttribute("lang", String(value));
    }
    return this;
  }
  setMedia(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("media");
    } else {
      this.element.setAttribute("media", String(value));
    }
    return this;
  }
  setNonce(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("nonce");
    } else {
      this.element.setAttribute("nonce", String(value));
    }
    return this;
  }
  setTitle(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("title");
    } else {
      this.element.setAttribute("title", String(value));
    }
    return this;
  }
  setType(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("type");
    } else {
      this.element.setAttribute("type", String(value));
    }
    return this;
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
  Style
};
