// src/void/area/area.ts
var Area = class {
  constructor(props = {}) {
    this.element = document.createElement("area");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.accessKey !== void 0) {
      this.element.setAttribute("accessKey", String(props.accessKey));
    }
    if (props.accesskey !== void 0) {
      this.element.setAttribute("accesskey", String(props.accesskey));
    }
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
    if (props.autocapitalize !== void 0) {
      this.setAutocapitalize(props.autocapitalize);
    }
    if (props.autofocus !== void 0) {
      this.element.setAttribute("autofocus", String(props.autofocus));
    }
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props.contentEditable !== void 0) {
      this.element.setAttribute("contentEditable", String(props.contentEditable));
    }
    if (props.contenteditable !== void 0) {
      this.setContenteditable(props.contenteditable);
    }
    if (props.coords !== void 0) {
      this.element.setAttribute("coords", String(props.coords));
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
    if (props.download !== void 0) {
      this.element.setAttribute("download", String(props.download));
    }
    if (props.draggable !== void 0) {
      this.element.setAttribute("draggable", String(props.draggable));
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
    if (props.inputmode !== void 0) {
      this.setInputmode(props.inputmode);
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.rel !== void 0) {
      this.setRel(props.rel);
    }
    if (props.shape !== void 0) {
      this.setShape(props.shape);
    }
    if (props.spellcheck !== void 0) {
      this.setSpellcheck(props.spellcheck);
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
    if (props.target !== void 0) {
      this.setTarget(props.target);
    }
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.translate !== void 0) {
      this.setTranslate(props.translate);
    }
    if (props.type !== void 0) {
      this.element.setAttribute("type", String(props.type));
    }
  }
  setAccessKey(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("accessKey");
    } else {
      this.element.setAttribute("accessKey", String(value));
    }
    return this;
  }
  setAccesskey(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("accesskey");
    } else {
      this.element.setAttribute("accesskey", String(value));
    }
    return this;
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
  setAutocapitalize(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("autocapitalize");
    } else {
      this.element.setAttribute("autocapitalize", String(value));
    }
    return this;
  }
  setAutofocus(value) {
    if (value === true) {
      this.element.setAttribute("autofocus", "");
    } else {
      this.element.removeAttribute("autofocus");
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
  setContentEditable(value) {
    if (value === true) {
      this.element.setAttribute("contentEditable", "");
    } else {
      this.element.removeAttribute("contentEditable");
    }
    return this;
  }
  setContenteditable(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("contenteditable");
    } else {
      this.element.setAttribute("contenteditable", String(value));
    }
    return this;
  }
  setCoords(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("coords");
    } else {
      this.element.setAttribute("coords", String(value));
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
  setDownload(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("download");
    } else {
      this.element.setAttribute("download", String(value));
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
  setInputmode(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("inputmode");
    } else {
      this.element.setAttribute("inputmode", String(value));
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
  setRel(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("rel");
    } else {
      this.element.setAttribute("rel", String(value));
    }
    return this;
  }
  setShape(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("shape");
    } else {
      this.element.setAttribute("shape", String(value));
    }
    return this;
  }
  setSpellcheck(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("spellcheck");
    } else {
      this.element.setAttribute("spellcheck", String(value));
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
  setTarget(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("target");
    } else {
      this.element.setAttribute("target", String(value));
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
  setTranslate(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("translate");
    } else {
      this.element.setAttribute("translate", String(value));
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
  Area
};
