// templates/typescript/void/source/source.ts
var Source = class {
  constructor(props = {}) {
    this.element = document.createElement("source");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props["alpine-attributes"] !== void 0) {
      const __map = props["alpine-attributes"];
      if (__map !== null && __map !== void 0) {
        for (const __k in __map) {
          const __v = __map[__k];
          let __attr = __k;
          if (__k.startsWith("@")) {
            __attr = "x-on:" + __k.slice(1);
          } else if (__k.startsWith(":")) {
            __attr = "x-bind:" + __k.slice(1);
          } else if (__k.startsWith(".")) {
            __attr = "x-model" + __k;
          } else if (!__k.startsWith("x-") && ["show", "text", "html", "if", "for", "cloak", "init", "data", "effect", "ignore", "ref", "transition", "teleport"].includes(__k)) {
            __attr = "x-" + __k;
          }
          this.element.setAttribute(__attr, String(__v));
        }
      }
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
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.media !== void 0) {
      this.element.setAttribute("media", String(props.media));
    }
    if (props.sizes !== void 0) {
      this.element.setAttribute("sizes", String(props.sizes));
    }
    if (props.src !== void 0) {
      this.element.setAttribute("src", String(props.src));
    }
    if (props.srcset !== void 0) {
      this.element.setAttribute("srcset", String(props.srcset));
    }
    if (props.type !== void 0) {
      this.element.setAttribute("type", String(props.type));
    }
  }
  setAlpineAttributes(value) {
    if (value === null || value === void 0) {
      for (const __a of Array.from(this.element.attributes)) {
        if (__a.name.startsWith("x-")) {
          this.element.removeAttribute(__a.name);
        }
      }
    } else {
      for (const __k in value) {
        let __attr = __k;
        if (__k.startsWith("@")) {
          __attr = "x-on:" + __k.slice(1);
        } else if (__k.startsWith(":")) {
          __attr = "x-bind:" + __k.slice(1);
        } else if (__k.startsWith(".")) {
          __attr = "x-model" + __k;
        } else if (!__k.startsWith("x-") && ["show", "text", "html", "if", "for", "cloak", "init", "data", "effect", "ignore", "ref", "transition", "teleport"].includes(__k)) {
          __attr = "x-" + __k;
        }
        this.element.setAttribute(__attr, String(value[__k]));
      }
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
  setId(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("id");
    } else {
      this.element.setAttribute("id", String(value));
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
  setSizes(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("sizes");
    } else {
      this.element.setAttribute("sizes", String(value));
    }
    return this;
  }
  setSrc(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("src");
    } else {
      this.element.setAttribute("src", String(value));
    }
    return this;
  }
  setSrcset(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("srcset");
    } else {
      this.element.setAttribute("srcset", String(value));
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
  getElement() {
    return this.element;
  }
};
export {
  Source
};
