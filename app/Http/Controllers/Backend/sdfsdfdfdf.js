(() => {
    var t,
        e = {
            419: () => {
                function t(e) {
                    return (t =
                        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                            ? function (t) {
                                return typeof t;
                            }
                            : function (t) {
                                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
                            })(e);
                }
                var e;
                ((e = jQuery).fn.inputTags = function (n) {
                    if (
                        ("inputTags" in window || (window.inputTags = { instances: [] }),
                            (window.inputTags.methods = {
                                tags: function (e, n) {
                                    if (e) {
                                        switch (t(e)) {
                                            case "string":
                                                switch (e) {
                                                    case "_toString":
                                                        var o = i.tags.toString();
                                                        return n ? n(o) : o;
                                                    case "_toObject":
                                                        var s = i._toObject(i.tags);
                                                        return n ? n(s) : s;
                                                    case "_toJSON":
                                                        s = i._toObject(i.tags);
                                                        var a = JSON.stringify(s);
                                                        return n ? n(a) : a;
                                                    case "_toArray":
                                                        return n ? n(i.tags) : i.tags;
                                                }
                                                var r = e.split(",");
                                                if (r.length > 1) {
                                                    var u = i.tags;
                                                    i.tags = u.concat(r);
                                                } else i.tags.push(r[0]);
                                                break;
                                            case "object":
                                                (u = i.tags),
                                                "[object Object]" === Object.prototype.toString.call(e) &&
                                                (e = Object.keys(e).map(function (t) {
                                                    return e[t];
                                                })),
                                                    (i.tags = u.concat(e));
                                                break;
                                            case "function":
                                                return e(i.tags);
                                        }
                                        if ((i._clean(), i._fill(), i._updateValue(), i.destroy(), i._setInstance(i), n)) return n(i.tags);
                                    }
                                    return i.tags;
                                },
                                event: function (t, e) {
                                    (i.options[t] = e), i._setInstance(i);
                                },
                                options: function (t, e) {
                                    return t || e ? (e ? ((i.options[t] = e), void i._setInstance(i)) : i.options[t]) : i.options;
                                },
                                destroy: function () {
                                    var t = e(this).attr("data-uniqid");
                                    delete window.inputTags.instances[t];
                                },
                            }),
                        "object" === t(n) || !n)
                    )
                        return (
                            (n = e.extend(!0, {}, e.fn.inputTags.defaults, n)),
                                this.each(function () {
                                    var o = e(this);
                                    (o.KEY_ENTER = "Enter"),
                                        (o.KEY_COMMA = ","),
                                        (o.KEY_ESCAPE = "Escape"),
                                        (o.UNIQID = Math.round(Date.now() / (494 * Math.random() - 54))),
                                        (o.DEFAULT_CLASS = "inputTags"),
                                        (o.ELEMENT_CLASS = o.DEFAULT_CLASS + "-" + o.UNIQID),
                                        (o.LIST_CLASS = o.DEFAULT_CLASS + "-list"),
                                        (o.ITEM_CLASS = o.DEFAULT_CLASS + "-item"),
                                        (o.ITEM_CONTENT = '<span class="value" title="Cliquez pour Ã©diter">%s</span><i class="close-item">&times</i>'),
                                        (o.FIELD_CLASS = o.DEFAULT_CLASS + "-field"),
                                        (o.ERROR_CLASS = o.DEFAULT_CLASS + "-error"),
                                        (o.ERROR_CONTENT = '<p class="' + o.ERROR_CLASS + '">%s</p>'),
                                        (o.AUTOCOMPLETE_LIST_CLASS = o.DEFAULT_CLASS + "-autocomplete-list"),
                                        (o.AUTOCOMPLETE_ITEM_CLASS = o.DEFAULT_CLASS + "-autocomplete-item"),
                                        (o.AUTOCOMPLETE_ITEM_CONTENT = '<li class="' + o.AUTOCOMPLETE_ITEM_CLASS + '">%s</li>'),
                                        (o.options = n),
                                        (o.keys = [o.KEY_ENTER, o.KEY_COMMA, o.KEY_ESCAPE]),
                                        (o.tags = []),
                                    o.options.keys.length > 0 && (o.keys = o.keys.concat(o.options.keys)),
                                        (o.init = function () {
                                            o.addClass(o.ELEMENT_CLASS).attr("data-uniqid", o.UNIQID),
                                                (o.$element = e("." + o.ELEMENT_CLASS)),
                                                o.$element.hide(),
                                                o.build(),
                                                o.fill(),
                                                o.save(),
                                                o.edit(),
                                                o.destroy(),
                                                o._autocomplete._init(),
                                                o._focus();
                                        }),
                                        (o.build = function () {
                                            (o.$html = e("<div>").addClass(o.LIST_CLASS)),
                                                (o.$input = e("<input>").attr({ type: "text", class: o.FIELD_CLASS })),
                                                o.$html.insertAfter(o.$element).prepend(o.$input),
                                                (o.$list = o.$element.next("." + o.LIST_CLASS)),
                                                o.$list.on("click", function (t) {
                                                    if (e(t.target).hasClass("inputTags-field")) return !1;
                                                    o.$input.focus();
                                                });
                                        }),
                                        (o.fill = function () {
                                            if ((o._getDefaultValues(), 0 === o.options.tags)) return !1;
                                            o._concatenate(), o._updateValue(), o._fill();
                                        }),
                                        (o._fill = function () {
                                            o.tags.forEach(function (t, e) {
                                                var n = o._validate(t, !1);
                                                (!0 === n || ("max" === n && e + 1 <= o.options.max)) && o._buildItem(t);
                                            });
                                        }),
                                        (o._clean = function () {
                                            e("." + o.ITEM_CLASS, o.$list).remove();
                                        }),
                                        (o.save = function () {
                                            o.$input.on("keyup", function (t) {
                                                t.preventDefault();
                                                var n = t.key,
                                                    i = o.$input.val().trim();
                                                if (e.inArray(n, o.keys) < 0) return o._autocomplete._init(!0), o._autocomplete._show(), !1;
                                                if (o.KEY_ESCAPE === n) return o._cancel(), o._autocomplete._hide(), !1;
                                                if (((i = o.KEY_COMMA === n ? i.slice(0, -1) : i), !o._validate(i, !0))) return !1;
                                                if (o.options.only && o._exists(i)) return o._errors("exists"), !1;
                                                if (o.$input.hasClass("is-edit")) {
                                                    var s = o.$input.attr("data-old-value");
                                                    if (s === i) return o._cancel(), !0;
                                                    o._update(s, i), o._clean(), o._fill();
                                                } else {
                                                    if (o._autocomplete._isSet() && o._autocomplete._get("only") && e.inArray(i, o._autocomplete._get("values")) < 0) return o._autocomplete._hide(), o._errors("autocomplete_only"), !1;
                                                    if (o._exists(i)) {
                                                        o.$input.removeClass("is-autocomplete"), o._errors("exists");
                                                        var a = e('[data-tag="' + i + '"]', o.$list);
                                                        return (
                                                            a.addClass("is-exists"),
                                                                setTimeout(function () {
                                                                    a.removeClass("is-exists");
                                                                }, 300),
                                                                !1
                                                        );
                                                    }
                                                    o._buildItem(i), o._insert(i);
                                                }
                                                return o._cancel(), o._updateValue(), o.destroy(), o._autocomplete._build(), o._setInstance(o), o.$input.focus(), !1;
                                            });
                                        }),
                                        (o.edit = function () {
                                            o.$list.on("click", "." + o.ITEM_CLASS, function (t) {
                                                if (e(t.target).hasClass("close-item") || !1 === o.options.editable || (o._autocomplete._isSet() && o._autocomplete._get("only"))) return o._cancel(), !0;
                                                var n = e(this).addClass("is-edit"),
                                                    i = e(".value", n).text();
                                                o.$input.width(n.outerWidth()).insertAfter(n).addClass("is-edit").attr("data-old-value", i).val(i).focus(),
                                                    o._bindEvent("selected"),
                                                    o.$input.on("blur", function () {
                                                        o._cancel(), o._bindEvent("unselected");
                                                    });
                                            });
                                        }),
                                        (o.destroy = function () {
                                            e("." + o.ITEM_CLASS, o.$list)
                                                .off("click")
                                                .on("click", ".close-item", function () {
                                                    var t = e(this).parent("." + o.ITEM_CLASS),
                                                        n = e(".value", t).text();
                                                    t.addClass("is-closed"),
                                                        setTimeout(function () {
                                                            o._pop(n), o._updateValue(), t.remove(), o._autocomplete._build(), o.$input.focus(), o._setInstance(o);
                                                        }, 200);
                                                });
                                        }),
                                        (o._buildItem = function (t) {
                                            var n = e(o.ITEM_CONTENT.replace("%s", t));
                                            e("<span>")
                                                .addClass(o.ITEM_CLASS + " is-closed")
                                                .attr("data-tag", t)
                                                .html(n)
                                                .insertBefore(o.$input)
                                                .delay(100)
                                                .queue(function () {
                                                    e(this).removeClass("is-closed");
                                                });
                                        }),
                                        (o._getIndex = function (t) {
                                            return o.tags.indexOf(t);
                                        }),
                                        (o._concatenate = function () {
                                            o.options.max > 0 && o.options.tags.length > o.options.max && o.options.tags.splice(-Math.abs(o.options.tags.length - o.options.max)), (o.tags = o.tags.concat(o.options.tags));
                                        }),
                                        (o._getDefaultValues = function () {
                                            o.$element.val().length > 0 ? (o.tags = o.tags.concat(o.$element.val().split(o.KEY_COMMA))) : o.$element.prop("value", "");
                                        }),
                                        (o._insert = function (t) {
                                            o.tags.push(t), o._bindEvent(["change", "create"]);
                                        }),
                                        (o._update = function (t, e) {
                                            var n = o._getIndex(t);
                                            (o.tags[n] = e), o._bindEvent(["change", "update"]);
                                        }),
                                        (o._pop = function (t) {
                                            var e = o._getIndex(t);
                                            if (e < 0) return !1;
                                            o.tags.splice(e, 1), o._bindEvent(["change", "destroy"]);
                                        }),
                                        (o._cancel = function () {
                                            e("." + o.ITEM_CLASS).removeClass("is-edit"), o.$input.removeClass("is-edit is-autocomplete").removeAttr("data-old-value style").val("").appendTo(o.$list);
                                        }),
                                        (o._autocomplete = {
                                            _isSet: function () {
                                                return o.options.autocomplete.values.length > 0;
                                            },
                                            _init: function (t) {
                                                if (!o._autocomplete._isSet()) return !1;
                                                o._autocomplete._build(t);
                                            },
                                            _build: function (t) {
                                                var n = o.$input.val().trim().toLowerCase();
                                                o._autocomplete._exists() && o.$autocomplete.remove(),
                                                    (o.$autocomplete = e("<ul>").addClass(o.AUTOCOMPLETE_LIST_CLASS)),
                                                    o._autocomplete._get("values").forEach(function (i) {
                                                        var s = o.AUTOCOMPLETE_ITEM_CONTENT.replace("%s", i),
                                                            a = e(s);
                                                        e.inArray(i, o.tags) >= 0 && a.addClass("is-disabled"), t && n.length > 0 && !i.toLowerCase().startsWith(n) && a.css({ display: "none" }), a.appendTo(o.$autocomplete);
                                                    }),
                                                    o._autocomplete._bindClick(),
                                                    e(document)
                                                        .not(o.$autocomplete)
                                                        .on("click", function () {
                                                            o._autocomplete._hide();
                                                        });
                                            },
                                            _bindClick: function () {
                                                e(o.$autocomplete)
                                                    .off("click")
                                                    .on("click", "." + o.AUTOCOMPLETE_ITEM_CLASS, function (t) {
                                                        if (e(t.target).hasClass("is-disabled")) return !1;
                                                        o.$input.addClass("is-autocomplete").val(e(this).text()), o._autocomplete._hide(), o._bindEvent("autocompleteTagSelect"), ((t = e.Event("keyup")).key = o.KEY_ENTER), o.$input.trigger(t);
                                                    });
                                            },
                                            _show: function () {
                                                if (!o._autocomplete._isSet()) return !1;
                                                o.$autocomplete.css({ left: o.$input[0].offsetLeft, minWidth: o.$input.width() }).insertAfter(o.$input),
                                                    setTimeout(function () {
                                                        o._autocomplete._bindClick(), o.$autocomplete.addClass("is-active");
                                                    }, 100);
                                            },
                                            _hide: function () {
                                                o.$autocomplete.removeClass("is-active");
                                            },
                                            _get: function (t) {
                                                return o.options.autocomplete[t];
                                            },
                                            _exists: function () {
                                                return void 0 !== o.$autocomplete;
                                            },
                                        }),
                                        (o._updateValue = function () {
                                            o.$element.prop("value", o.tags.join(o.KEY_COMMA));
                                        }),
                                        (o._focus = function () {
                                            o.$input.on("focus", function () {
                                                o._bindEvent("focus"), !o._autocomplete._isSet() || o.$input.hasClass("is-autocomplete") || o.$input.hasClass("is-edit") || (o._autocomplete._build(), o._autocomplete._show());
                                            });
                                        }),
                                        (o._toObject = function (t) {
                                            return t.reduce(function (t, e, n) {
                                                return (t[n] = e), t;
                                            }, {});
                                        }),
                                        (o._validate = function (t, e) {
                                            var n = "";
                                            switch (!0) {
                                                case !t:
                                                case void 0 === t:
                                                case 0 === t.length:
                                                    o._cancel(), (n = "empty");
                                                    break;
                                                case t.length > 0 && t.length < o.options.minLength:
                                                    n = "minLength";
                                                    break;
                                                case t.length > o.options.maxLength:
                                                    n = "maxLength";
                                                    break;
                                                case o.options.max > 0 && o.tags.length >= o.options.max:
                                                    o.$input.hasClass("is-edit") || (n = "max");
                                                    break;
                                                case o.options.email:
                                                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(t) || (n = "email");
                                            }
                                            return !(n.length > 0) || (e ? o._errors(n) : n);
                                        }),
                                        (o._exists = function (t) {
                                            return e.inArray(t, o.tags) >= 0;
                                        }),
                                        (o._errors = function (t) {
                                            return 0 === t.length || (o._autocomplete._exists() && o.$autocomplete.remove(), o._displayErrors(o.options.errors[t].replace("%s", o.options[t]), t)), !1;
                                        }),
                                        (o._displayErrors = function (t, n) {
                                            var i = e(o.ERROR_CONTENT.replace("%s", t)).attr("data-error", n),
                                                s = o.options.errors.timeout;
                                            return (
                                                !e("." + o.ERROR_CLASS + '[data-error="' + n + '"]').length &&
                                                (i.hide().insertAfter(o.$list).slideDown(),
                                                !(!s || s <= 0) &&
                                                (e("." + o.ERROR_CLASS).on("click", function () {
                                                    o._collapseErrors(e(this));
                                                }),
                                                    void setTimeout(function () {
                                                        o._collapseErrors();
                                                    }, s)))
                                            );
                                        }),
                                        (o._collapseErrors = function (t) {
                                            var n = t || e("." + o.ERROR_CLASS);
                                            n.slideUp(300, function () {
                                                n.remove();
                                            });
                                        }),
                                        (o._getInstance = function () {
                                            return window.inputTags.instances[o.UNIQID];
                                        }),
                                        (o._setInstance = function () {
                                            window.inputTags.instances[o.UNIQID] = o;
                                        }),
                                        (o._isSet = function (t) {
                                            return !(void 0 === o.options[t] || !1 === o.options[t] || o.options[t].length);
                                        }),
                                        (o._callMethod = function (t, e) {
                                            if (void 0 === e.options[t] || "function" != typeof e.options[t]) return !1;
                                            e.options[t].apply(this, Array.prototype.slice.call(arguments, 1));
                                        }),
                                        (o._initEvent = function (e, n) {
                                            if (!e) return !1;
                                            switch (t(e)) {
                                                case "string":
                                                    n(e, o);
                                                    break;
                                                case "object":
                                                    e.forEach(function (t, e) {
                                                        n(t, o);
                                                    });
                                            }
                                            return !0;
                                        }),
                                        (o._bindEvent = function (t) {
                                            return o._initEvent(t, function (t, e) {
                                                o._callMethod(t, e);
                                            });
                                        }),
                                        (o._unbindEvent = function (t) {
                                            return o._initEvent(t, function (t) {
                                                o.options[t] = !1;
                                            });
                                        }),
                                        o.init(),
                                        o._bindEvent("init"),
                                        o._setInstance(o);
                                }),
                                {
                                    on: function (t, e) {
                                        window.inputTags.methods.event(t, e);
                                    },
                                }
                        );
                    if (window.inputTags.methods[n]) {
                        var o = e(this).attr("data-uniqid"),
                            i = window.inputTags.instances[o];
                        return void 0 === i ? e.error("[undefined instance] No inputTags instance found.") : window.inputTags.methods[n].apply(this, Array.prototype.slice.call(arguments, 1));
                    }
                    e.error("[undefined method] The method [" + n + "] does not exists.");
                }),
                    (e.fn.inputTags.defaults = {
                        tags: [],
                        keys: [],
                        minLength: 1,
                        maxLength: 30,
                        max: 6,
                        email: !1,
                        only: !0,
                        init: !1,
                        create: !1,
                        update: !1,
                        destroy: !1,
                        focus: !1,
                        selected: !1,
                        unselected: !1,
                        change: !1,
                        autocompleteTagSelect: !1,
                        editable: !0,
                        autocomplete: { values: [], only: !1 },
                        errors: {
                            empty: "Attention, vous ne pouvez pas ajouter un tag vide.",
                            minLength: "Attention, your tag must have at least %s characters.",
                            maxLength: "Attention, your tag must not exceed %s characters.",
                            max: "Attention, the number of tags must not exceed %s.",
                            email: "Attention, the email address you entered is invalid",
                            exists: "Attention, what tag already exists!",
                            autocomplete_only: "Attention, you must select a value from the list.",
                            timeout: 8e3,
                        },
                    });
            },
            829: () => {},
        },
        n = {};
    function o(t) {
        var i = n[t];
        if (void 0 !== i) return i.exports;
        var s = (n[t] = { exports: {} });
        return e[t](s, s.exports, o), s.exports;
    }
    (o.m = e),
        (t = []),
        (o.O = (e, n, i, s) => {
            if (!n) {
                var a = 1 / 0;
                for (c = 0; c < t.length; c++) {
                    for (var [n, i, s] = t[c], r = !0, u = 0; u < n.length; u++) (!1 & s || a >= s) && Object.keys(o.O).every((t) => o.O[t](n[u])) ? n.splice(u--, 1) : ((r = !1), s < a && (a = s));
                    if (r) {
                        t.splice(c--, 1);
                        var l = i();
                        void 0 !== l && (e = l);
                    }
                }
                return e;
            }
            s = s || 0;
            for (var c = t.length; c > 0 && t[c - 1][2] > s; c--) t[c] = t[c - 1];
            t[c] = [n, i, s];
        }),
        (o.o = (t, e) => Object.prototype.hasOwnProperty.call(t, e)),
        (() => {
            var t = { 249: 0, 6: 0 };
            o.O.j = (e) => 0 === t[e];
            var e = (e, n) => {
                    var i,
                        s,
                        [a, r, u] = n,
                        l = 0;
                    if (a.some((e) => 0 !== t[e])) {
                        for (i in r) o.o(r, i) && (o.m[i] = r[i]);
                        if (u) var c = u(o);
                    }
                    for (e && e(n); l < a.length; l++) (s = a[l]), o.o(t, s) && t[s] && t[s][0](), (t[s] = 0);
                    return o.O(c);
                },
                n = (self.webpackChunkinputTags_js = self.webpackChunkinputTags_js || []);
            n.forEach(e.bind(null, 0)), (n.push = e.bind(null, n.push.bind(n)));
        })(),
        o.O(void 0, [6], () => o(419));
    var i = o.O(void 0, [6], () => o(829));
    i = o.O(i);
})();
