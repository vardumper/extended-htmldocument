// src/block/body/body.ts
var Body = class {
  constructor(props = {}) {
    this.element = document.createElement("body");
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
    if (props.draggable !== void 0) {
      this.element.setAttribute("draggable", String(props.draggable));
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
    if (props.onafterprint !== void 0) {
      this.element.setAttribute("onafterprint", String(props.onafterprint));
    }
    if (props.onbeforeprint !== void 0) {
      this.element.setAttribute("onbeforeprint", String(props.onbeforeprint));
    }
    if (props.onbeforeunload !== void 0) {
      this.element.setAttribute("onbeforeunload", String(props.onbeforeunload));
    }
    if (props.onhashchange !== void 0) {
      this.element.setAttribute("onhashchange", String(props.onhashchange));
    }
    if (props.onlanguagechange !== void 0) {
      this.element.setAttribute("onlanguagechange", String(props.onlanguagechange));
    }
    if (props.onmessage !== void 0) {
      this.element.setAttribute("onmessage", String(props.onmessage));
    }
    if (props.onmessageerror !== void 0) {
      this.element.setAttribute("onmessageerror", String(props.onmessageerror));
    }
    if (props.onoffline !== void 0) {
      this.element.setAttribute("onoffline", String(props.onoffline));
    }
    if (props.ononline !== void 0) {
      this.element.setAttribute("ononline", String(props.ononline));
    }
    if (props.onpagehide !== void 0) {
      this.element.setAttribute("onpagehide", String(props.onpagehide));
    }
    if (props.onpageshow !== void 0) {
      this.element.setAttribute("onpageshow", String(props.onpageshow));
    }
    if (props.onpopstate !== void 0) {
      this.element.setAttribute("onpopstate", String(props.onpopstate));
    }
    if (props.onrejectionhandled !== void 0) {
      this.element.setAttribute("onrejectionhandled", String(props.onrejectionhandled));
    }
    if (props.onstorage !== void 0) {
      this.element.setAttribute("onstorage", String(props.onstorage));
    }
    if (props.onunhandledrejection !== void 0) {
      this.element.setAttribute("onunhandledrejection", String(props.onunhandledrejection));
    }
    if (props.onunload !== void 0) {
      this.element.setAttribute("onunload", String(props.onunload));
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
  setOnafterprint(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onafterprint");
    } else {
      this.element.setAttribute("onafterprint", String(value));
    }
    return this;
  }
  setOnbeforeprint(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onbeforeprint");
    } else {
      this.element.setAttribute("onbeforeprint", String(value));
    }
    return this;
  }
  setOnbeforeunload(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onbeforeunload");
    } else {
      this.element.setAttribute("onbeforeunload", String(value));
    }
    return this;
  }
  setOnhashchange(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onhashchange");
    } else {
      this.element.setAttribute("onhashchange", String(value));
    }
    return this;
  }
  setOnlanguagechange(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onlanguagechange");
    } else {
      this.element.setAttribute("onlanguagechange", String(value));
    }
    return this;
  }
  setOnmessage(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onmessage");
    } else {
      this.element.setAttribute("onmessage", String(value));
    }
    return this;
  }
  setOnmessageerror(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onmessageerror");
    } else {
      this.element.setAttribute("onmessageerror", String(value));
    }
    return this;
  }
  setOnoffline(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onoffline");
    } else {
      this.element.setAttribute("onoffline", String(value));
    }
    return this;
  }
  setOnonline(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("ononline");
    } else {
      this.element.setAttribute("ononline", String(value));
    }
    return this;
  }
  setOnpagehide(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onpagehide");
    } else {
      this.element.setAttribute("onpagehide", String(value));
    }
    return this;
  }
  setOnpageshow(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onpageshow");
    } else {
      this.element.setAttribute("onpageshow", String(value));
    }
    return this;
  }
  setOnpopstate(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onpopstate");
    } else {
      this.element.setAttribute("onpopstate", String(value));
    }
    return this;
  }
  setOnrejectionhandled(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onrejectionhandled");
    } else {
      this.element.setAttribute("onrejectionhandled", String(value));
    }
    return this;
  }
  setOnstorage(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onstorage");
    } else {
      this.element.setAttribute("onstorage", String(value));
    }
    return this;
  }
  setOnunhandledrejection(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onunhandledrejection");
    } else {
      this.element.setAttribute("onunhandledrejection", String(value));
    }
    return this;
  }
  setOnunload(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("onunload");
    } else {
      this.element.setAttribute("onunload", String(value));
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
  Body
};
