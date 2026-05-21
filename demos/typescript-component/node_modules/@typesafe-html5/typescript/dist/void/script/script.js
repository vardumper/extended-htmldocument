// src/void/script/script.ts
var Script = class {
  constructor(props = {}) {
    this.element = document.createElement("script");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.children !== void 0) {
      this.setChildren(props.children);
    }
    if (props.async !== void 0) {
      this.element.setAttribute("async", String(props.async));
    }
    if (props.charset !== void 0) {
      this.element.setAttribute("charset", String(props.charset));
    }
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
    if (props.defer !== void 0) {
      this.element.setAttribute("defer", String(props.defer));
    }
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
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
    if (props.nonce !== void 0) {
      this.element.setAttribute("nonce", String(props.nonce));
    }
    if (props.referrerpolicy !== void 0) {
      this.setReferrerpolicy(props.referrerpolicy);
    }
    if (props.src !== void 0) {
      this.element.setAttribute("src", String(props.src));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.type !== void 0) {
      this.setType(props.type);
    }
  }
  setAsync(value) {
    if (value === true) {
      this.element.setAttribute("async", "");
    } else {
      this.element.removeAttribute("async");
    }
    return this;
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
  setDefer(value) {
    if (value === true) {
      this.element.setAttribute("defer", "");
    } else {
      this.element.removeAttribute("defer");
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
  setNonce(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("nonce");
    } else {
      this.element.setAttribute("nonce", String(value));
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
  setSrc(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("src");
    } else {
      this.element.setAttribute("src", String(value));
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
  Script
};
