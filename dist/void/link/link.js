// templates/typescript/void/link/link.ts
var Link = class {
  constructor(props = {}) {
    this.element = document.createElement("link");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props.crossorigin !== void 0) {
      this.setCrossorigin(props.crossorigin);
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
    if (props.href !== void 0) {
      this.element.setAttribute("href", String(props.href));
    }
    if (props.hreflang !== void 0) {
      this.element.setAttribute("hreflang", String(props.hreflang));
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.integrity !== void 0) {
      this.element.setAttribute("integrity", String(props.integrity));
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.media !== void 0) {
      this.element.setAttribute("media", String(props.media));
    }
    if (props.referrerpolicy !== void 0) {
      this.setReferrerpolicy(props.referrerpolicy);
    }
    if (props.rel !== void 0) {
      this.setRel(props.rel);
    }
    if (props.sizes !== void 0) {
      this.element.setAttribute("sizes", String(props.sizes));
    }
    if (props.style !== void 0) {
      this.element.setAttribute("style", String(props.style));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.type !== void 0) {
      this.element.setAttribute("type", String(props.type));
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
  setCrossorigin(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("crossorigin");
    } else {
      this.element.setAttribute("crossorigin", String(value));
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
  setHref(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("href");
    } else {
      this.element.setAttribute("href", String(value));
    }
    return this;
  }
  setHreflang(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("hreflang");
    } else {
      this.element.setAttribute("hreflang", String(value));
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
  setIntegrity(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("integrity");
    } else {
      this.element.setAttribute("integrity", String(value));
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
  setReferrerpolicy(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("referrerpolicy");
    } else {
      this.element.setAttribute("referrerpolicy", String(value));
    }
    return this;
  }
  setRel(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("rel");
    } else {
      this.element.setAttribute("rel", String(value));
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
  Link
};
