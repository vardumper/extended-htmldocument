// src/inline/textarea/textarea.ts
var Textarea = class {
  constructor(props = {}) {
    this.element = document.createElement("textarea");
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
    if (props["aria-autocomplete"] !== void 0) {
      this.setAriaAutocomplete(props["aria-autocomplete"]);
    }
    if (props["aria-controls"] !== void 0) {
      this.element.setAttribute("aria-controls", String(props["aria-controls"]));
    }
    if (props["aria-describedby"] !== void 0) {
      this.element.setAttribute("aria-describedby", String(props["aria-describedby"]));
    }
    if (props["aria-details"] !== void 0) {
      this.element.setAttribute("aria-details", String(props["aria-details"]));
    }
    if (props["aria-disabled"] !== void 0) {
      this.setAriaDisabled(props["aria-disabled"]);
    }
    if (props["aria-expanded"] !== void 0) {
      this.setAriaExpanded(props["aria-expanded"]);
    }
    if (props["aria-haspopup"] !== void 0) {
      this.setAriaHaspopup(props["aria-haspopup"]);
    }
    if (props["aria-invalid"] !== void 0) {
      this.setAriaInvalid(props["aria-invalid"]);
    }
    if (props["aria-keyshortcuts"] !== void 0) {
      this.element.setAttribute("aria-keyshortcuts", String(props["aria-keyshortcuts"]));
    }
    if (props["aria-label"] !== void 0) {
      this.element.setAttribute("aria-label", String(props["aria-label"]));
    }
    if (props["aria-labelledby"] !== void 0) {
      this.element.setAttribute("aria-labelledby", String(props["aria-labelledby"]));
    }
    if (props["aria-live"] !== void 0) {
      this.setAriaLive(props["aria-live"]);
    }
    if (props["aria-multiline"] !== void 0) {
      this.setAriaMultiline(props["aria-multiline"]);
    }
    if (props["aria-placeholder"] !== void 0) {
      this.element.setAttribute("aria-placeholder", String(props["aria-placeholder"]));
    }
    if (props["aria-pressed"] !== void 0) {
      this.setAriaPressed(props["aria-pressed"]);
    }
    if (props["aria-readonly"] !== void 0) {
      this.setAriaReadonly(props["aria-readonly"]);
    }
    if (props["aria-relevant"] !== void 0) {
      this.setAriaRelevant(props["aria-relevant"]);
    }
    if (props["aria-required"] !== void 0) {
      this.setAriaRequired(props["aria-required"]);
    }
    if (props["aria-roledescription"] !== void 0) {
      this.element.setAttribute("aria-roledescription", String(props["aria-roledescription"]));
    }
    if (props.autocapitalize !== void 0) {
      this.setAutocapitalize(props.autocapitalize);
    }
    if (props.autocomplete !== void 0) {
      this.setAutocomplete(props.autocomplete);
    }
    if (props.autocorrect !== void 0) {
      this.setAutocorrect(props.autocorrect);
    }
    if (props.autofocus !== void 0) {
      this.element.setAttribute("autofocus", String(props.autofocus));
    }
    if (props.className !== void 0) {
      this.element.setAttribute("className", String(props.className));
    }
    if (props.cols !== void 0) {
      this.element.setAttribute("cols", String(props.cols));
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
    if (props.dirname !== void 0) {
      this.element.setAttribute("dirname", String(props.dirname));
    }
    if (props.disabled !== void 0) {
      this.element.setAttribute("disabled", String(props.disabled));
    }
    if (props.draggable !== void 0) {
      this.element.setAttribute("draggable", String(props.draggable));
    }
    if (props.form !== void 0) {
      this.element.setAttribute("form", String(props.form));
    }
    if (props.hidden !== void 0) {
      this.element.setAttribute("hidden", String(props.hidden));
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
    if (props.maxlength !== void 0) {
      this.element.setAttribute("maxlength", String(props.maxlength));
    }
    if (props.minlength !== void 0) {
      this.element.setAttribute("minlength", String(props.minlength));
    }
    if (props.name !== void 0) {
      this.element.setAttribute("name", String(props.name));
    }
    if (props.placeholder !== void 0) {
      this.element.setAttribute("placeholder", String(props.placeholder));
    }
    if (props.popover !== void 0) {
      this.setPopover(props.popover);
    }
    if (props.readonly !== void 0) {
      this.element.setAttribute("readonly", String(props.readonly));
    }
    if (props.required !== void 0) {
      this.element.setAttribute("required", String(props.required));
    }
    if (props.role !== void 0) {
      this.setRole(props.role);
    }
    if (props.rows !== void 0) {
      this.element.setAttribute("rows", String(props.rows));
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
    if (props.wrap !== void 0) {
      this.setWrap(props.wrap);
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
  setAriaAutocomplete(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-autocomplete");
    } else {
      this.element.setAttribute("aria-autocomplete", String(value));
    }
    return this;
  }
  setAriaControls(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-controls");
    } else {
      this.element.setAttribute("aria-controls", String(value));
    }
    return this;
  }
  setAriaDescribedby(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-describedby");
    } else {
      this.element.setAttribute("aria-describedby", String(value));
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
  setAriaDisabled(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-disabled");
    } else {
      this.element.setAttribute("aria-disabled", String(value));
    }
    return this;
  }
  setAriaExpanded(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-expanded");
    } else {
      this.element.setAttribute("aria-expanded", String(value));
    }
    return this;
  }
  setAriaHaspopup(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-haspopup");
    } else {
      this.element.setAttribute("aria-haspopup", String(value));
    }
    return this;
  }
  setAriaInvalid(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-invalid");
    } else {
      this.element.setAttribute("aria-invalid", String(value));
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
  setAriaLabelledby(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-labelledby");
    } else {
      this.element.setAttribute("aria-labelledby", String(value));
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
  setAriaMultiline(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-multiline");
    } else {
      this.element.setAttribute("aria-multiline", String(value));
    }
    return this;
  }
  setAriaPlaceholder(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-placeholder");
    } else {
      this.element.setAttribute("aria-placeholder", String(value));
    }
    return this;
  }
  setAriaPressed(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-pressed");
    } else {
      this.element.setAttribute("aria-pressed", String(value));
    }
    return this;
  }
  setAriaReadonly(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-readonly");
    } else {
      this.element.setAttribute("aria-readonly", String(value));
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
  setAriaRequired(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-required");
    } else {
      this.element.setAttribute("aria-required", String(value));
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
  setAutocapitalize(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("autocapitalize");
    } else {
      this.element.setAttribute("autocapitalize", String(value));
    }
    return this;
  }
  setAutocomplete(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("autocomplete");
    } else {
      this.element.setAttribute("autocomplete", String(value));
    }
    return this;
  }
  setAutocorrect(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("autocorrect");
    } else {
      this.element.setAttribute("autocorrect", String(value));
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
  setCols(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("cols");
    } else {
      this.element.setAttribute("cols", String(value));
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
  setDirname(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("dirname");
    } else {
      this.element.setAttribute("dirname", String(value));
    }
    return this;
  }
  setDisabled(value) {
    if (value === true) {
      this.element.setAttribute("disabled", "");
    } else {
      this.element.removeAttribute("disabled");
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
  setForm(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("form");
    } else {
      this.element.setAttribute("form", String(value));
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
  setMaxlength(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("maxlength");
    } else {
      this.element.setAttribute("maxlength", String(value));
    }
    return this;
  }
  setMinlength(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("minlength");
    } else {
      this.element.setAttribute("minlength", String(value));
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
  setPlaceholder(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("placeholder");
    } else {
      this.element.setAttribute("placeholder", String(value));
    }
    return this;
  }
  setPopover(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("popover");
    } else {
      this.element.setAttribute("popover", String(value));
    }
    return this;
  }
  setReadonly(value) {
    if (value === true) {
      this.element.setAttribute("readonly", "");
    } else {
      this.element.removeAttribute("readonly");
    }
    return this;
  }
  setRequired(value) {
    if (value === true) {
      this.element.setAttribute("required", "");
    } else {
      this.element.removeAttribute("required");
    }
    return this;
  }
  setRole(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("role");
    } else {
      this.element.setAttribute("role", String(value));
    }
    return this;
  }
  setRows(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("rows");
    } else {
      this.element.setAttribute("rows", String(value));
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
  setWrap(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("wrap");
    } else {
      this.element.setAttribute("wrap", String(value));
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
  Textarea
};
