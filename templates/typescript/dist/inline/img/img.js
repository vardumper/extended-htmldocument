// src/inline/img/img.ts
var Img = class {
  constructor(props = {}) {
    this.element = document.createElement("img");
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
    if (props.alt !== void 0) {
      this.element.setAttribute("alt", String(props.alt));
    }
    if (props["aria-atomic"] !== void 0) {
      this.setAriaAtomic(props["aria-atomic"]);
    }
    if (props["aria-details"] !== void 0) {
      this.element.setAttribute("aria-details", String(props["aria-details"]));
    }
    if (props["aria-hidden"] !== void 0) {
      this.setAriaHidden(props["aria-hidden"]);
    }
    if (props["aria-keyshortcuts"] !== void 0) {
      this.element.setAttribute("aria-keyshortcuts", String(props["aria-keyshortcuts"]));
    }
    if (props["aria-label"] !== void 0) {
      this.element.setAttribute("aria-label", String(props["aria-label"]));
    }
    if (props["aria-live"] !== void 0) {
      this.setAriaLive(props["aria-live"]);
    }
    if (props["aria-relevant"] !== void 0) {
      this.setAriaRelevant(props["aria-relevant"]);
    }
    if (props["aria-roledescription"] !== void 0) {
      this.element.setAttribute("aria-roledescription", String(props["aria-roledescription"]));
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
    if (props.decoding !== void 0) {
      this.setDecoding(props.decoding);
    }
    if (props.dir !== void 0) {
      this.setDir(props.dir);
    }
    if (props.draggable !== void 0) {
      this.element.setAttribute("draggable", String(props.draggable));
    }
    if (props.height !== void 0) {
      this.element.setAttribute("height", String(props.height));
    }
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
    }
    if (props.id !== void 0) {
      this.element.setAttribute("id", String(props.id));
    }
    if (props.ismap !== void 0) {
      this.element.setAttribute("ismap", String(props.ismap));
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.referrerpolicy !== void 0) {
      this.setReferrerpolicy(props.referrerpolicy);
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
    if (props.style !== void 0) {
      this.element.setAttribute("style", String(props.style));
    }
    if (props.tabIndex !== void 0) {
      this.element.setAttribute("tabIndex", String(props.tabIndex));
    }
    if (props.tabindex !== void 0) {
      this.element.setAttribute("tabindex", String(props.tabindex));
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.usemap !== void 0) {
      this.element.setAttribute("usemap", String(props.usemap));
    }
    if (props.width !== void 0) {
      this.element.setAttribute("width", String(props.width));
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
  setAlt(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("alt");
    } else {
      this.element.setAttribute("alt", String(value));
    }
    return this;
  }
  setAriaAtomic(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-atomic");
    } else {
      this.element.setAttribute("aria-atomic", String(value));
    }
    return this;
  }
  setAriaDetails(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-details");
    } else {
      this.element.setAttribute("aria-details", String(value));
    }
    return this;
  }
  setAriaHidden(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-hidden");
    } else {
      this.element.setAttribute("aria-hidden", String(value));
    }
    return this;
  }
  setAriaKeyshortcuts(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-keyshortcuts");
    } else {
      this.element.setAttribute("aria-keyshortcuts", String(value));
    }
    return this;
  }
  setAriaLabel(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-label");
    } else {
      this.element.setAttribute("aria-label", String(value));
    }
    return this;
  }
  setAriaLive(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-live");
    } else {
      this.element.setAttribute("aria-live", String(value));
    }
    return this;
  }
  setAriaRelevant(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-relevant");
    } else {
      this.element.setAttribute("aria-relevant", String(value));
    }
    return this;
  }
  setAriaRoledescription(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-roledescription");
    } else {
      this.element.setAttribute("aria-roledescription", String(value));
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
  setDecoding(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("decoding");
    } else {
      this.element.setAttribute("decoding", String(value));
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
  setDraggable(value) {
    if (value === true) {
      this.element.setAttribute("draggable", "");
    } else {
      this.element.removeAttribute("draggable");
    }
    return this;
  }
  setHeight(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("height");
    } else {
      this.element.setAttribute("height", String(value));
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
  setIsmap(value) {
    if (value === true) {
      this.element.setAttribute("ismap", "");
    } else {
      this.element.removeAttribute("ismap");
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
  setReferrerpolicy(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("referrerpolicy");
    } else {
      this.element.setAttribute("referrerpolicy", String(value));
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
  setStyle(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("style");
    } else {
      this.element.setAttribute("style", String(value));
    }
    return this;
  }
  setTabIndex(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("tabIndex");
    } else {
      this.element.setAttribute("tabIndex", String(value));
    }
    return this;
  }
  setTabindex(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("tabindex");
    } else {
      this.element.setAttribute("tabindex", String(value));
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
  setUsemap(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("usemap");
    } else {
      this.element.setAttribute("usemap", String(value));
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
  Img
};
