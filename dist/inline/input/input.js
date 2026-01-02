// templates/typescript/inline/input/input.ts
var Input = class {
  constructor(props = {}) {
    this.element = document.createElement("input");
    this.applyProps(props);
  }
  applyProps(props) {
    if (props.accept !== void 0) {
      this.element.setAttribute("accept", String(props.accept));
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
    if (props.alt !== void 0) {
      this.element.setAttribute("alt", String(props.alt));
    }
    if (props["aria-atomic"] !== void 0) {
      this.setAriaAtomic(props["aria-atomic"]);
    }
    if (props["aria-autocomplete"] !== void 0) {
      this.setAriaAutocomplete(props["aria-autocomplete"]);
    }
    if (props["aria-checked"] !== void 0) {
      this.setAriaChecked(props["aria-checked"]);
    }
    if (props["aria-controls"] !== void 0) {
      this.element.setAttribute("aria-controls", String(props["aria-controls"]));
    }
    if (props["aria-current"] !== void 0) {
      this.setAriaCurrent(props["aria-current"]);
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
    if (props.autocomplete !== void 0) {
      this.setAutocomplete(props.autocomplete);
    }
    if (props.autocorrect !== void 0) {
      this.setAutocorrect(props.autocorrect);
    }
    if (props.autofocus !== void 0) {
      this.element.setAttribute("autofocus", String(props.autofocus));
    }
    if (props.checked !== void 0) {
      this.element.setAttribute("checked", String(props.checked));
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
    if (props.formaction !== void 0) {
      this.element.setAttribute("formaction", String(props.formaction));
    }
    if (props.formenctype !== void 0) {
      this.setFormenctype(props.formenctype);
    }
    if (props.formmethod !== void 0) {
      this.setFormmethod(props.formmethod);
    }
    if (props.formnovalidate !== void 0) {
      this.element.setAttribute("formnovalidate", String(props.formnovalidate));
    }
    if (props.formtarget !== void 0) {
      this.setFormtarget(props.formtarget);
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
    if (props.inputmode !== void 0) {
      this.setInputmode(props.inputmode);
    }
    if (props.lang !== void 0) {
      this.element.setAttribute("lang", String(props.lang));
    }
    if (props.list !== void 0) {
      this.element.setAttribute("list", String(props.list));
    }
    if (props.max !== void 0) {
      this.element.setAttribute("max", String(props.max));
    }
    if (props.maxlength !== void 0) {
      this.element.setAttribute("maxlength", String(props.maxlength));
    }
    if (props.min !== void 0) {
      this.element.setAttribute("min", String(props.min));
    }
    if (props.minlength !== void 0) {
      this.element.setAttribute("minlength", String(props.minlength));
    }
    if (props.multiple !== void 0) {
      this.element.setAttribute("multiple", String(props.multiple));
    }
    if (props.name !== void 0) {
      this.element.setAttribute("name", String(props.name));
    }
    if (props.pattern !== void 0) {
      this.element.setAttribute("pattern", String(props.pattern));
    }
    if (props.placeholder !== void 0) {
      this.element.setAttribute("placeholder", String(props.placeholder));
    }
    if (props.popovertarget !== void 0) {
      this.element.setAttribute("popovertarget", String(props.popovertarget));
    }
    if (props.popovertargetaction !== void 0) {
      this.setPopovertargetaction(props.popovertargetaction);
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
    if (props.size !== void 0) {
      this.element.setAttribute("size", String(props.size));
    }
    if (props.spellcheck !== void 0) {
      this.setSpellcheck(props.spellcheck);
    }
    if (props.src !== void 0) {
      this.element.setAttribute("src", String(props.src));
    }
    if (props.step !== void 0) {
      this.element.setAttribute("step", String(props.step));
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
    if (props.type !== void 0) {
      this.setType(props.type);
    }
    if (props.value !== void 0) {
      this.element.setAttribute("value", String(props.value));
    }
    if (props.width !== void 0) {
      this.element.setAttribute("width", String(props.width));
    }
  }
  setAccept(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("accept");
    } else {
      this.element.setAttribute("accept", String(value));
    }
    return this;
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
  setAriaChecked(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-checked");
    } else {
      this.element.setAttribute("aria-checked", String(value));
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
  setAriaCurrent(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("aria-current");
    } else {
      this.element.setAttribute("aria-current", String(value));
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
  setChecked(value) {
    if (value === true) {
      this.element.setAttribute("checked", "");
    } else {
      this.element.removeAttribute("checked");
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
  setFormaction(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("formaction");
    } else {
      this.element.setAttribute("formaction", String(value));
    }
    return this;
  }
  setFormenctype(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("formenctype");
    } else {
      this.element.setAttribute("formenctype", String(value));
    }
    return this;
  }
  setFormmethod(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("formmethod");
    } else {
      this.element.setAttribute("formmethod", String(value));
    }
    return this;
  }
  setFormnovalidate(value) {
    if (value === true) {
      this.element.setAttribute("formnovalidate", "");
    } else {
      this.element.removeAttribute("formnovalidate");
    }
    return this;
  }
  setFormtarget(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("formtarget");
    } else {
      this.element.setAttribute("formtarget", String(value));
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
  setList(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("list");
    } else {
      this.element.setAttribute("list", String(value));
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
  setMaxlength(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("maxlength");
    } else {
      this.element.setAttribute("maxlength", String(value));
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
  setMinlength(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("minlength");
    } else {
      this.element.setAttribute("minlength", String(value));
    }
    return this;
  }
  setMultiple(value) {
    if (value === true) {
      this.element.setAttribute("multiple", "");
    } else {
      this.element.removeAttribute("multiple");
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
  setPattern(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("pattern");
    } else {
      this.element.setAttribute("pattern", String(value));
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
  setPopovertarget(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("popovertarget");
    } else {
      this.element.setAttribute("popovertarget", String(value));
    }
    return this;
  }
  setPopovertargetaction(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("popovertargetaction");
    } else {
      this.element.setAttribute("popovertargetaction", String(value));
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
  setSize(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("size");
    } else {
      this.element.setAttribute("size", String(value));
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
  setSrc(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("src");
    } else {
      this.element.setAttribute("src", String(value));
    }
    return this;
  }
  setStep(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("step");
    } else {
      this.element.setAttribute("step", String(value));
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
  setType(value) {
    if (value === null || value === void 0) {
      this.element.removeAttribute("type");
    } else {
      this.element.setAttribute("type", String(value));
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
  Input
};
