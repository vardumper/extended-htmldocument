// src/block/hr/hr.ts
var Hr = class {
  constructor(props = {}) {
    this.element = document.createElement("hr");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.align !== void 0) {
      this.setAlign(props.align);
    }
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props.color !== void 0) {
      this.element.setAttribute("color", String(props.color));
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
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.noshade !== void 0) {
      this.element.setAttribute("noshade", String(props.noshade));
    }
    if (props.size !== void 0) {
      this.element.setAttribute("size", String(props.size));
    }
    if (props.style !== void 0) {
      this.element.setAttribute("style", String(props.style));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.width !== void 0) {
      this.element.setAttribute("width", String(props.width));
    }
  }
  setAlign(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("align");
    } else {
      this.element.setAttribute("align", String(value));
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
  setColor(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("color");
    } else {
      this.element.setAttribute("color", String(value));
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
  setHidden(value) {
    if (value === true) {
      this.element.setAttribute("hidden", "");
    } else {
      this.element.removeAttribute("hidden");
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
  setNoshade(value) {
    if (value === true) {
      this.element.setAttribute("noshade", "");
    } else {
      this.element.removeAttribute("noshade");
    }
    return this;
  }
  setSize(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("size");
    } else {
      this.element.setAttribute("size", String(value));
    }
    return this;
  }
  setStyle(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("style");
    } else {
      this.element.setAttribute("style", String(value));
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
  setWidth(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("width");
    } else {
      this.element.setAttribute("width", String(value));
    }
    return this;
  }
  getElement() {
    return this.element;
  }
};
export {
  Hr
};
