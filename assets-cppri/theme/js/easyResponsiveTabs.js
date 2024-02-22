!(function (t) {
    t.fn.extend({
        easyResponsiveTabs: function (a) {
            var e = (a = t.extend(
                    {
                        type: "default",
                        width: "auto",
                        fit: !0,
                        closed: !1,
                        tabidentify: "",
                        activetab_bg: "white",
                        inactive_bg: "",
                        active_content_border_color: "#4c4d52",
                        activate: function () {},
                    },
                    a
                )),
                i = e.type,
                r = e.fit,
                s = e.width,
                o = window.location.hash,
                n = !(!window.history || !history.replaceState);
            t(this).bind("tabactivate", function (t, e) {
                "function" == typeof a.activate && a.activate.call(e, t);
            }),
                this.each(function () {
                    var e,
                        c = t(this),
                        d = c.find("ul.resp-tabs-list." + a.tabidentify),
                        b = c.attr("id");
                    c
                        .find("ul.resp-tabs-list." + a.tabidentify + " li")
                        .addClass("resp-tab-item")
                        .addClass(a.tabidentify),
                        c.css({ display: "block", width: s }),
                        "vertical" == a.type && d.css("margin-top", "3px"),
                        c
                            .find(".resp-tabs-container." + a.tabidentify)
                            .css("border-color", a.active_content_border_color),
                        c
                            .find(
                                ".resp-tabs-container." +
                                    a.tabidentify +
                                    " > div"
                            )
                            .addClass("resp-tab-content")
                            .addClass(a.tabidentify),
                        (function () {
                            "vertical" == i &&
                                c
                                    .addClass("resp-vtabs")
                                    .addClass(a.tabidentify);
                            1 == r && c.css({ width: "100%", margin: "0px" });
                            "accordion" == i &&
                                (c
                                    .addClass("resp-easy-accordion")
                                    .addClass(a.tabidentify),
                                c
                                    .find(".resp-tabs-list")
                                    .css("display", "none"));
                        })(),
                        c
                            .find(".resp-tab-content." + a.tabidentify)
                            .before(
                                "<h2 class='resp-accordion " +
                                    a.tabidentify +
                                    "' role='tab'><span class='resp-arrow'></span></h2>"
                            ),
                        c
                            .find(".resp-tab-content." + a.tabidentify)
                            .prev("h2")
                            .css({
                                "background-color": a.inactive_bg,
                                "border-color": a.active_border_color,
                            });
                    var l = 0;
                    c.find(".resp-accordion").each(function () {
                        e = t(this);
                        var i = c.find(".resp-tab-item:eq(" + l + ")"),
                            r = c.find(".resp-accordion:eq(" + l + ")");
                        r.append(i.html()),
                            r.data(i.data()),
                            e.attr(
                                "aria-controls",
                                a.tabidentify + "_tab_item-" + l
                            ),
                            l++;
                    });
                    var f = 0;
                    c.find(".resp-tab-item").each(function () {
                        ($tabItem = t(this)),
                            $tabItem.attr(
                                "aria-controls",
                                a.tabidentify + "_tab_item-" + f
                            ),
                            $tabItem.attr("role", "tab"),
                            $tabItem.css({
                                "background-color": a.inactive_bg,
                                "border-color": "none",
                            });
                        var e = 0;
                        c
                            .find(".resp-tab-content." + a.tabidentify)
                            .each(function () {
                                t(this)
                                    .attr(
                                        "aria-labelledby",
                                        a.tabidentify + "_tab_item-" + e
                                    )
                                    .css({
                                        "border-color": a.active_border_color,
                                    }),
                                    e++;
                            }),
                            f++;
                    });
                    var p = 0;
                    if ("" != o) {
                        var v = o.match(new RegExp(b + "([0-9]+)"));
                        null !== v &&
                            2 === v.length &&
                            (p = parseInt(v[1], 10) - 1) > f &&
                            (p = 0);
                    }
                    t(c.find(".resp-tab-item." + a.tabidentify)[p])
                        .addClass("resp-tab-active")
                        .css({
                            "background-color": a.activetab_bg,
                            "border-color": a.active_border_color,
                        }),
                        !0 === a.closed ||
                            ("accordion" === a.closed && !d.is(":visible")) ||
                            ("tabs" === a.closed && d.is(":visible")) ||
                            (t(c.find(".resp-accordion." + a.tabidentify)[p])
                                .addClass("resp-tab-active")
                                .css({
                                    "background-color":
                                        a.activetab_bg + " !important",
                                    "border-color": a.active_border_color,
                                    background: "none",
                                }),
                            t(c.find(".resp-tab-content." + a.tabidentify)[p])
                                .addClass("resp-tab-content-active")
                                .addClass(a.tabidentify)
                                .attr("style", "display:block")),
                        c.find("[role=tab]").each(function () {
                            t(this).click(function () {
                                var e = t(this),
                                    i = e.attr("aria-controls");
                                if (
                                    e.hasClass("resp-accordion") &&
                                    e.hasClass("resp-tab-active")
                                )
                                    return (
                                        c
                                            .find(
                                                ".resp-tab-content-active." +
                                                    a.tabidentify
                                            )
                                            .slideUp("", function () {
                                                t(this).addClass(
                                                    "resp-accordion-closed"
                                                );
                                            }),
                                        e
                                            .removeClass("resp-tab-active")
                                            .css({
                                                "background-color":
                                                    a.inactive_bg,
                                                "border-color": "none",
                                            }),
                                        !1
                                    );
                                if (
                                    (!e.hasClass("resp-tab-active") &&
                                    e.hasClass("resp-accordion")
                                        ? (c
                                              .find(
                                                  ".resp-tab-active." +
                                                      a.tabidentify
                                              )
                                              .removeClass("resp-tab-active")
                                              .css({
                                                  "background-color":
                                                      a.inactive_bg,
                                                  "border-color": "none",
                                              }),
                                          c
                                              .find(
                                                  ".resp-tab-content-active." +
                                                      a.tabidentify
                                              )
                                              .slideUp()
                                              .removeClass(
                                                  "resp-tab-content-active resp-accordion-closed"
                                              ),
                                          c
                                              .find("[aria-controls=" + i + "]")
                                              .addClass("resp-tab-active")
                                              .css({
                                                  "background-color":
                                                      a.activetab_bg,
                                                  "border-color":
                                                      a.active_border_color,
                                              }),
                                          c
                                              .find(
                                                  ".resp-tab-content[aria-labelledby = " +
                                                      i +
                                                      "]." +
                                                      a.tabidentify
                                              )
                                              .slideDown()
                                              .addClass(
                                                  "resp-tab-content-active"
                                              ))
                                        : (c
                                              .find(
                                                  ".resp-tab-active." +
                                                      a.tabidentify
                                              )
                                              .removeClass("resp-tab-active")
                                              .css({
                                                  "background-color":
                                                      a.inactive_bg,
                                                  "border-color": "none",
                                              }),
                                          c
                                              .find(
                                                  ".resp-tab-content-active." +
                                                      a.tabidentify
                                              )
                                              .removeAttr("style")
                                              .removeClass(
                                                  "resp-tab-content-active"
                                              )
                                              .removeClass(
                                                  "resp-accordion-closed"
                                              ),
                                          c
                                              .find("[aria-controls=" + i + "]")
                                              .addClass("resp-tab-active")
                                              .css({
                                                  "background-color":
                                                      a.activetab_bg,
                                                  "border-color":
                                                      a.active_border_color,
                                              }),
                                          c
                                              .find(
                                                  ".resp-tab-content[aria-labelledby = " +
                                                      i +
                                                      "]." +
                                                      a.tabidentify
                                              )
                                              .addClass(
                                                  "resp-tab-content-active"
                                              )
                                              .attr("style", "display:block")),
                                    e.trigger("tabactivate", e),
                                    n)
                                ) {
                                    var r = window.location.hash,
                                        s = i.split("tab_item-"),
                                        o =
                                            b +
                                            (parseInt(s[1], 10) + 1).toString();
                                    if ("" != r) {
                                        var d = new RegExp(b + "[0-9]+");
                                        o =
                                            null != r.match(d)
                                                ? r.replace(d, o)
                                                : r + "|" + o;
                                    } else o = "#" + o;
                                    history.replaceState(null, null, o);
                                }
                            });
                        }),
                        t(window).resize(function () {
                            c.find(".resp-accordion-closed").removeAttr(
                                "style"
                            );
                        });
                });
        },
    });
})(jQuery);
