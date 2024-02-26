$(window).load(function () {
    $("#flexCarouse2").flexslider({
        animation: "slide",
        animationLoop: !1,
        itemWidth: 380,
        itemMargin: 25,
        minItems: 1,
        maxItems: 1,
        move: 1,
        pausePlay: !0,
        pauseText: "Pause",
        playText: "Play",
        controlNav: !1,
        start: function (e) {
            $("body").removeClass("loading"),
                1 === e.pagingCount && e.addClass("flex-centered");
        },
    });
}),
    $(window).load(function () {
        $("#flexSlider").flexslider({
            animation: "slide",
            direction: "vertical",
            directionNav: !0,
            pausePlay: !0,
            controlNav: !0,
            start: function (e) {
                $("body").removeClass("loading");
            },
        }),
            $("#flexSlider1").flexslider({
                animation: "slide",
                controlNav: !1,
                start: function (e) {
                    $("body").removeClass("loading");
                },
            }),
            $("#flexSlider2").flexslider({
                animation: "slide",
                controlNav: !1,
                start: function (e) {
                    $("body").removeClass("loading");
                },
            }),
            $("#contSlider1").flexslider({
                animation: "swing",
                controlNav: !1,
                directionNav: !1,
                direction: "vertical",
                easing: "linear",
                prevText: " ",
                nextText: " ",
                minItems: 2,
                maxItems: 2,
                move: 2,
                itemMargin: 0,
                pausePlay: !0,
                pauseOnHover: !0,
                slideshowSpeed: 1e3,
                animationSpeed: 1e4,
            }),
            $("#contSlider2").flexslider({
                animation: "slide",
                controlNav: !1,
                start: function (e) {
                    $("body").removeClass("loading");
                },
            }),
            window.innerWidth < 991
                ? $("#flexCarousel").flexslider({
                      animation: "slide",
                      animationLoop: !1,
                      itemWidth: 200,
                      itemMargin: 10,
                      minItems: 2,
                      maxItems: 3,
                      slideshow: 1,
                      move: 1,
                      pausePlay: !0,
                      pauseText: "Pause",
                      playText: "Play",
                      controlNav: !1,
                      start: function (e) {
                          $("body").removeClass("loading"),
                              1 === e.pagingCount &&
                                  e.addClass("flex-centered");
                      },
                  })
                : $("#flexCarousel").flexslider({
                      animation: "slide",
                      animationLoop: !1,
                      itemWidth: 200,
                      itemMargin: 10,
                      minItems: 2,
                      maxItems: 5,
                      slideshow: 1,
                      move: 1,
                      pausePlay: !0,
                      pauseText: "Pause",
                      playText: "Play",
                      controlNav: !1,
                      start: function (e) {
                          $("body").removeClass("loading"),
                              1 === e.pagingCount &&
                                  e.addClass("flex-centered");
                      },
                  }),
            $("#flexCarousel1").flexslider({
                animation: "slide",
                animationLoop: !1,
                itemWidth: 168,
                itemMargin: 20,
                minItems: 1,
                maxItems: 4,
                slideshow: 1,
                move: 1,
                controlNav: !1,
                start: function (e) {
                    $("body").removeClass("loading");
                },
            }),
            $("#breaking_news").flexslider({
                animation: "slide",
                controlNav: !1,
                animationLoop: !0,
                directionNav: !1,
                direction: "horizontal",
                slideshowSpeed: 7e3,
                animationSpeed: 600,
                initDelay: 1e3,
                pausePlay: !0,
                pauseText: "",
                playText: "",
                pauseOnHover: !1,
            }),
            $("#galleryCarousel").flexslider({
                animation: "fade",
                controlNav: "thumbnails",
                start: function (e) {
                    $("body").removeClass("loading");
                },
            });
    }),
    $(document).ready(function () {
        $("figure img").ma5gallery({ preload: !0 }),
            $("#socialTab").easyResponsiveTabs({
                type: "default",
                width: "auto",
                fit: !0,
                tabidentify: "socialTab_1",
                activate: function (e) {
                    var t = $(this),
                        o = $("#nested-tabInfo");
                    $("span", o).text(t.text()), o.show();
                },
            }),
            $("#feedTab").easyResponsiveTabs({
                type: "default",
                width: "auto",
                fit: !0,
                tabidentify: "feedTab_1",
                activate: function (e) {
                    var t = $(this),
                        o = $("#nested-tabInfo");
                    $("span", o).text(t.text()), o.show();
                },
            }),
            $(".resp-tabs-list li a").click(function (e) {
                e.preventDefault();
            });
    });
var a = 0;
// function changeClass() {
//     var e = document.getElementsByClassName("text-slide"),
//         t = document.getElementsByClassName("scroll-text");
//     e[0].classList.toggle("pause"), t[0].classList.toggle("scroll-left");
// }
// function changeClass01() {
//     var e = document.getElementsByClassName("text-slide01"),
//         t = document.getElementsByClassName("scroll-text01");
//     e[0].classList.toggle("pause"), t[0].classList.toggle("scroll-left");
// }
// function changeClass1() {
//     var e = document.getElementsByClassName("text-slide1"),
//         t = document.getElementsByClassName("scroll-text-1");
//     e[0].classList.toggle("pause"), t[0].classList.toggle("scroll-left");
// }
function increaseFontSize() {
    document
        .querySelectorAll(
            "p, h1, h2, h3, h4, h5, h6, a, li, button,.about-t,h2.title,.desc-text-title, .copyright-text, span select"
        )
        .forEach((e) => {
            let t = parseFloat(window.getComputedStyle(e).fontSize);
            t < 18 && ((t += 1), (e.style.fontSize = t + "px"));
        });
}
function normaltext() {
    document
        .querySelectorAll(
            "p, h1, h2, h3, h4, h5, h6, a, li,.desc, button,.about-t,h2.title,.desc-text-title, .copyright-text"
        )
        .forEach((e) => {
            e.style.fontSize = "";
        });
}
function decreaseFontSize() {
    document
        .querySelectorAll(
            "p, h1, h2, h3, h4, h5, h6, a, li,.desc, button,.about-t,h2.title,.desc-text-title, .copyright-text"
        )
        .forEach((e) => {
            let t = parseFloat(window.getComputedStyle(e).fontSize);
            t > 12 && ((t -= 2), (e.style.fontSize = t + "px"));
        });
}
$(window).scroll(function () {
    var e = $("#counter").offset().top - window.innerHeight;
    0 == a &&
        $(window).scrollTop() > e &&
        ($(".count").each(function () {
            $(this)
                .prop("Counter", 0)
                .animate(
                    { Counter: $(this).text() },
                    {
                        duration: 4e3,
                        easing: "swing",
                        step: function (e) {
                            $(this).text(Math.ceil(e));
                        },
                    }
                );
        }),
        (a = 1));
}),
    $(document).ready(function () {
        $("figure img").ma5gallery({ preload: !0 });
    }),
    $(document).ready(function () {
        $("#parentHorizontalTab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: !0,
            tabidentify: "hor_1",
            activate: function (e) {
                var t = $(this),
                    o = $("#nested-tabInfo");
                $("span", o).text(t.text()), o.show();
            },
        }),
            $("#ChildVerticalTab_1").easyResponsiveTabs({
                type: "vertical",
                width: "auto",
                fit: !0,
                tabidentify: "ver_1",
                activetab_bg: "#fff",
                inactive_bg: "#fff",
                active_border_color: "#c1c1c1",
                active_content_border_color: "#5AB1D0",
            });
        var e,
            t = document.getElementsByClassName("video-wrapper")[0],
            o = document.getElementsByTagName("video")[0];
        ({
            renderVideoPlayButton: function () {
                t.contains(o) &&
                    (this.formatVideoPlayButton(),
                    o.classList.add("has-media-controls-hidden"),
                    (e = document.getElementsByClassName(
                        "video-overlay-play-button"
                    )[0]).addEventListener("click", this.hideVideoPlayButton));
            },
            formatVideoPlayButton: function () {
                t.insertAdjacentHTML(
                    "beforeend",
                    '                    <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">                        <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>                        <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>                    </svg>                    '
                );
            },
            hideVideoPlayButton: function () {
                o.play(),
                    e.classList.add("is-hidden"),
                    o.classList.remove("has-media-controls-hidden"),
                    o.setAttribute("controls", "controls");
            },
        }).renderVideoPlayButton();
    }),
    $(document).ready(function () {
        $(document).scroll(function () {
            $(this).scrollTop() > 100
                ? $("#scroll").fadeIn()
                : $("#scroll").fadeOut();
        }),
            $("#scroll").click(function () {
                return $("html, body").animate({ scrollTop: 0 }, 800), !1;
            });
    }),
    $(document).ready(function () {
        $(".loader, .loader-bg").css("display", "block"),
            $(window).on("load", function () {
                $(".loader, .loader-bg").css("display", "none");
            });
    }),
    window.onload(function () {
        alert("main header"),
            $(".loader").css("display", "block"),
            $(".loader-bg").css("display", "block");
    }),
    (window.onscroll = function () {
        myFunction();
    });
var header = document.getElementById("myHeader"),
    sticky = header.offsetTop;
function myFunction() {
    window.pageYOffset > sticky
        ? header.classList.add("sticky")
        : header.classList.remove("sticky");
}
function topFunction() {
    const e = window.pageYOffset,
        t =
            "now" in window.performance
                ? performance.now()
                : new Date().getTime();
    window.requestAnimationFrame(function o() {
        const a =
                "now" in window.performance
                    ? performance.now()
                    : new Date().getTime(),
            n = Math.min(1, (a - t) / 500);
        window.scrollTo(
            0,
            e +
                (0 - e) *
                    ((e) =>
                        e < 0.5 ? 4 * e ** 3 : 1 - Math.pow(-2 * e + 2, 3) / 2)(
                        n
                    )
        ),
            n < 1 && window.requestAnimationFrame(o);
    });
}

// accordion js

var acc = document.getElementsByClassName("contentAccordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

// End accordion js