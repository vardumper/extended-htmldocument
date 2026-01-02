// src/void/meta/meta.ts
var Meta = class {
  constructor(props = {}) {
    this.element = document.createElement("meta");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.charset !== void 0) {
      this.element.setAttribute("charset", String(props.charset));
    }
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props.content !== void 0) {
      this.element.setAttribute("content", String(props.content));
    }
    if (props["data-attributes"] !== void 0) {
      const __map = props["data-attributes"];
      if (__map !== null && __map !== void 0) {
        for (const __k in __map) {
          this.element.setAttribute(`data-${__k}`, String(__map[__k]));
        }
      }
    }
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
    }
    if (props["http-equiv"] !== void 0) {
      this.setHttpEquiv(props["http-equiv"]);
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.name !== void 0) {
      this.element.setAttribute("name", String(props.name));
    }
    if (props.scheme !== void 0) {
      this.element.setAttribute("scheme", String(props.scheme));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
  }
  setCharset(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("charset");
    } else {
      this.element.setAttribute("charset", String(value));
    }
    return this;
  }
  setClassName(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("className");
    } else {
      this.element.setAttribute("className", String(value));
    }
    return this;
  }
  setContent(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("content");
    } else {
      this.element.setAttribute("content", String(value));
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
  setHidden(value) {
    if (value === true) {
      this.element.setAttribute("hidden", "");
    } else {
      this.element.removeAttribute("hidden");
    }
    return this;
  }
  setHttpEquiv(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("http-equiv");
    } else {
      this.element.setAttribute("http-equiv", String(value));
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
  setName(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("name");
    } else {
      this.element.setAttribute("name", String(value));
    }
    return this;
  }
  setScheme(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("scheme");
    } else {
      this.element.setAttribute("scheme", String(value));
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
  getElement() {
    return this.element;
  }
};
export {
  Meta
};
