// templates/typescript/inline/meter/meter.ts
var Meter = class {
  constructor(props = {}) {
    this.element = document.createElement("meter");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.children !== void 0) {
      this.setChildren(props.children);
    }
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
    if (props["aria-atomic"] !== void 0) {
      this.setAriaAtomic(props["aria-atomic"]);
    }
    if (props["aria-details"] !== void 0) {
      this.element.setAttribute("aria-details", String(props["aria-details"]));
    }
    if (props["aria-keyshortcuts"] !== void 0) {
      this.element.setAttribute("aria-keyshortcuts", String(props["aria-keyshortcuts"]));
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
    if (props["aria-valuemax"] !== void 0) {
      this.element.setAttribute("aria-valuemax", String(props["aria-valuemax"]));
    }
    if (props["aria-valuemin"] !== void 0) {
      this.element.setAttribute("aria-valuemin", String(props["aria-valuemin"]));
    }
    if (props["aria-valuenow"] !== void 0) {
      this.element.setAttribute("aria-valuenow", String(props["aria-valuenow"]));
    }
    if (props["aria-valuetext"] !== void 0) {
      this.element.setAttribute("aria-valuetext", String(props["aria-valuetext"]));
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
    if (props.draggable !== void 0) {
      this.element.setAttribute("draggable", String(props.draggable));
    }
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
    }
    if (props.high !== void 0) {
      this.element.setAttribute("high", String(props.high));
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
    if (props.low !== void 0) {
      this.element.setAttribute("low", String(props.low));
    }
    if (props.max !== void 0) {
      this.element.setAttribute("max", String(props.max));
    }
    if (props.min !== void 0) {
      this.element.setAttribute("min", String(props.min));
    }
    if (props.optimum !== void 0) {
      this.element.setAttribute("optimum", String(props.optimum));
    }
    if (props.slot !== void 0) {
      this.element.setAttribute("slot", String(props.slot));
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
    if (props.title !== void 0) {
      this.element.setAttribute("title", String(props.title));
    }
    if (props.translate !== void 0) {
      this.setTranslate(props.translate);
    }
    if (props.value !== void 0) {
      this.element.setAttribute("value", String(props.value));
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
  setAriaKeyshortcuts(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-keyshortcuts");
    } else {
      this.element.setAttribute("aria-keyshortcuts", String(value));
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
  setAriaValuemax(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-valuemax");
    } else {
      this.element.setAttribute("aria-valuemax", String(value));
    }
    return this;
  }
  setAriaValuemin(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-valuemin");
    } else {
      this.element.setAttribute("aria-valuemin", String(value));
    }
    return this;
  }
  setAriaValuenow(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-valuenow");
    } else {
      this.element.setAttribute("aria-valuenow", String(value));
    }
    return this;
  }
  setAriaValuetext(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-valuetext");
    } else {
      this.element.setAttribute("aria-valuetext", String(value));
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
  setHigh(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("high");
    } else {
      this.element.setAttribute("high", String(value));
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
  setLow(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("low");
    } else {
      this.element.setAttribute("low", String(value));
    }
    return this;
  }
  setMax(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("max");
    } else {
      this.element.setAttribute("max", String(value));
    }
    return this;
  }
  setMin(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("min");
    } else {
      this.element.setAttribute("min", String(value));
    }
    return this;
  }
  setOptimum(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("optimum");
    } else {
      this.element.setAttribute("optimum", String(value));
    }
    return this;
  }
  setSlot(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("slot");
    } else {
      this.element.setAttribute("slot", String(value));
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
  setValue(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("value");
    } else {
      this.element.setAttribute("value", String(value));
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
  Meter
};
