var baseurl = window.location.origin;
//alert(baseurl + "/set-language");
function setlang(value) {
    // alert(value)
    $.ajax({
        url: baseurl + "/set-language",
        data: { data: value },
        success: function (result) {
            //alert(result.data);
            location.reload();
        }
    });
}
(function () {
    // store the slider in a local variable
    var $window = $(window),
        flexslider;
    // tiny helper function to add breakpoints
    function getGridSize() {
        return (window.innerWidth < 280) ? 1 :
            (window.innerWidth < 600) ? 2 :
                (window.innerWidth < 800) ? 2 :
                    (window.innerWidth < 900) ? 2 : 5;
    }
    $window.load(function () {
        // Carouse2
        $('#flexCarouse2').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 380,
            itemMargin: 25,
            minItems: 1,
            maxItems: 1,
            //slideshow: 1,
            move: 1,
            pausePlay: true,
            pauseText: 'Pause',
            playText: 'Play',
            controlNav: false,
            start: function (slider) {
                $('body').removeClass('loading');
                if (slider.pagingCount === 1) slider.addClass('flex-centered');
            }
        });
    });
}());
$(window).load(function () {
    // Slider
    $('#flexSlider').flexslider({
        animation: "slide",
        pausePlay: true,
        controlNav: true,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
    $('#flexSlider1').flexslider({
        animation: "slide",
        controlNav: false,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
    $('#flexSlider2').flexslider({
        animation: "slide",
        controlNav: false,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
    $('#contSlider1').flexslider({
        animation: "swing",
        controlNav: false,
        directionNav: false,
        direction: "vertical",
        easing: 'linear',
        prevText: " ",
        nextText: " ",
        minItems: 2,
        maxItems: 2,
        move: 2,
        itemMargin: 0,
        pausePlay: true,
        pauseOnHover: true,
        slideshowSpeed: 1000,
        animationSpeed: 10000,
    });
    $('#contSlider2').flexslider({
        animation: "slide",
        controlNav: false,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
    $('#flexCarousel1').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 168,
        itemMargin: 20,
        minItems: 1,
        maxItems: 4,
        slideshow: 1,
        move: 1,
        controlNav: false,
        start: function (slider) {
            $('body').removeClass('loading');
            //if (slider.pagingCount === 1) slider.addClass('flex-centered');
        }
    });
    // breaking_news
    $('#breaking_news').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        directionNav: false,
        direction: "horizontal",
        slideshowSpeed: 7000,
        animationSpeed: 600,
        initDelay: 1000,
        pausePlay: true,
        pauseText: '',
        playText: '',
        pauseOnHover: false
    });
    // Gallery
    $('#galleryCarousel').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$(document).ready(function () {
    $('figure img').ma5gallery({
        preload: true
    });
    $('#socialTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'socialTab_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    $('#feedTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'feedTab_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    $('.resp-tabs-list li a').click(function (event) {
        event.preventDefault();
    })
});
// var a = 0;
// $(window).scroll(function () {
//     var oTop = $('#counter').offset().top - window.innerHeight;
//     if (a == 0 && $(window).scrollTop() > oTop) {
//         $('.count').each(function () {
//             $(this).prop('Counter', 0).animate({
//                 Counter: $(this).text()
//             }, {
//                 duration: 4000,
//                 easing: 'swing',
//                 step: function (now) {
//                     $(this).text(Math.ceil(now));
//                 }
//             });
//         });
//         a = 1;
//     }
// });
$(document).ready(function () {
    $('figure img').ma5gallery({
        preload: true
    });
});
$(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    // Child Tab
    $('#ChildVerticalTab_1').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true,
        tabidentify: 'ver_1', // The tab groups identifier
        activetab_bg: '#fff', // background color for active tabs in this group
        inactive_bg: '#fff', // background color for inactive tabs in this group
        active_border_color: '#c1c1c1', // border color for active tabs heads in this group
        active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
    });
    var videoPlayButton,
        videoWrapper = document.getElementsByClassName('video-wrapper')[0],
        video = document.getElementsByTagName('video')[0],
        videoMethods = {
            renderVideoPlayButton: function () {
                if (videoWrapper.contains(video)) {
                    this.formatVideoPlayButton()
                    video.classList.add('has-media-controls-hidden')
                    videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                    videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
                }
            },
            formatVideoPlayButton: function () {
                videoWrapper.insertAdjacentHTML('beforeend', '\
                    <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                        <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                        <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                    </svg>\
                    ')
            },
            hideVideoPlayButton: function () {
                video.play()
                videoPlayButton.classList.add('is-hidden')
                video.classList.remove('has-media-controls-hidden')
                video.setAttribute('controls', 'controls')
            }
        }
    videoMethods.renderVideoPlayButton()
});
// ====Tab scrolling text====
function changeClass() {
    var x = document.getElementsByClassName("text-slide");
    var y = document.getElementsByClassName("scroll-text");
    x[0].classList.toggle("pause");
    y[0].classList.toggle("scroll-left");
}
function changeClass01() {
    var x = document.getElementsByClassName("text-slide01");
    var z = document.getElementsByClassName("scroll-text01");
    x[0].classList.toggle("pause");
    z[0].classList.toggle("scroll-left");
}
function changeClass1() {
    var x = document.getElementById("tender_pause_button");
    var z = document.getElementById("tender_scroll");
    console.log(x);
    console.log(z)
    x.classList.toggle("pause");
    z.classList.toggle("scroll-left");
}
// ===== Scroll to Top ====
$(document).ready(function () {
    $(document).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
});
function ctime() {
    if (!document.getElementById)
        return
    timeElement = document.getElementById("timeid")
    var curdate = new Date()
    var hours = curdate.getHours()
    var minutes = curdate.getMinutes()
    var seconds = curdate.getSeconds()
    var DayNight = "PM"
    if (hours < 12) DayNight = "AM";
    if (hours > 12) hours = hours - 12;
    if (hours == 0) hours = 12;
    if (minutes <= 9) minutes = "0" + minutes;
    if (seconds <= 9) seconds = "0" + seconds;
    var ctime = hours + ":" + minutes + ":" + seconds + " " + DayNight;
    timeElement.innerHTML = "<p class='time'>" + ctime + "</p>"
    setTimeout("ctime()", 1000)
}
window.onload = ctime;
$("document").ready(function () {
    setTimeout(function () {
        $("div.alert").remove();
    }, 5000); // 5 secs
});
$(document).ready(() => {
    $('.sl-accordion').click(() => {
    })
    $('#sidebarDropdown2').click(() => {
        console.log('hellow world')
        $('#sidebarDropdown2').css({
            'background-color': '#000'
        })
    })
})
$(document).ready(function () {
    $('.image-popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
    });
});
$(document).ready(function () {
    $('a.btn-gallery').on('click', function (event) {
        event.preventDefault();
        var gallery = $(this).attr('href');
        $(gallery).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        }).magnificPopup('open');
    });
    // let test = document.querySelectorAll('.accordion-collapse .accordion-body ul li');
    // test.forEach((e)=>{
    //     if(e.className == 'qm-active'){
    //         let currentElementId = (((e.parentNode).parentNode).parentNode).id;
    //         let accordion = (((((e.parentNode).parentNode).parentNode).parentNode).parentNode);
    //         let currentElement = document.getElementById(currentElementId);
    //         currentElement.classList.add('show');
    //         let mainParentElement = (((((e.parentNode).parentNode).parentNode).parentNode).firstElementChild.firstElementChild.classList.remove('collapsed'));
    //     }
    // })
    let test2 = document.querySelectorAll('.accordion-collapse .accordion-body ul li ul li');
    test2.forEach((e) => {
        if (e.classList.contains('qm-active')) {
            let currentElementId = e.closest('.accordion').id;
            console.log('sal;dkfj', e.closest('.accordion'))
            let mainParent = e.closest('.accordion').parentElement.parentElement.parentElement.classList.add('show')
            console.log('mainparent', mainParent)
            let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
            console.log('menu-active', menu_active)
            console.log(currentElementId);
            let accordion = e.closest('.accordion');
            let currentElement = document.getElementById(currentElementId);
            console.log(currentElement.firstElementChild.childNodes[3])
            let addClass = currentElement.firstElementChild.childNodes[3];
            console.log('fl', addClass);
            if (addClass) {
                addClass.classList.add('show');
            }
            let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
            console.log(mainParentElement)
            if (mainParentElement) {
                mainParentElement.classList.add('collapsed');
            }
        }
    });
    let test = document.querySelectorAll('.accordion-collapse .accordion-body ul li');
    test.forEach((e) => {
        if (e.classList.contains('qm-active')) {
            let currentElementId = e.closest('.accordion').id;
            let menu_active = document.getElementById(currentElementId).classList.add('menu-active')
            console.log(currentElementId);
            let accordion = e.closest('.accordion');
            let currentElement = document.getElementById(currentElementId);
            console.log(currentElement.firstElementChild.childNodes[3])
            let addClass = currentElement.firstElementChild.childNodes[3];
            if (addClass) {
                addClass.classList.add('show');
            }
            let mainParentElement = currentElement.firstElementChild.childNodes[1].childNodes[1];
            console.log(mainParentElement)
            if (mainParentElement) {
                mainParentElement.classList.add('collapsed');
            }
        }
    });
    //     let test = $('.accordion-collapse .accordion-body ul li');
    //    test.each((e)=>{
    //     console.log(e.hasClass('qm-active'));
    //    })
    // $('.accordion-item').on('click', function () {
    //     // Collapse all other accordion items
    //     $('.accordion-item').not(this).find('.collapse').collapse('hide');
    // });
});
// $('.accordion').click((e)=>{
//    console.log(e.attr('id'))
// })
$('#mobile_no').keypress(function (e) {
    var regex = new RegExp("^[0-9_]");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
$('.preventnumeric').keypress(function (e) {
    //alert("yes");
    var regex = new RegExp(/^[a-zA-Z\s]+$/);
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
// let sl_accordion = $('.sl-accordion');
// sl_accordion.each(function(index, element) {
//     $(element).click(function(){
//         alert(this)
// $(this).addClass('menu-accordion-click');
//     })
// });
$(document).ready(function () {
    // let sl_accordion = $('.sl-accordion');
    // sl_accordion.click(function() {
    //    sl_accordion.removeClass('menu-accordion-click');
    //     $(this).addClass('menu-accordion-click');
    //     // alert('click');
    // });
    let fl_accordion = $('.fl-accordion');
    fl_accordion.click(function () {
        $(this).addClass('fl-accordion-active');
        // alert('click');
    });
    let fl_n_accordion = $('.fl-n-accordion');
    fl_n_accordion.click
});
// window.onscroll = function() {stickySidebar()};
// var $sidebar = $('#main-sidebar');
// var top = $sidebar.offset().top - parseFloat($sidebar.css('marginTop').replace('auto', 0));
// var footTop = $('.footer-wrapper').offset().top - parseFloat($('.footer-wrapper').css('marginTop').replace('auto', 0)); 
// var maxY = footTop - $sidebar.outerHeight();
// console.log(maxY);
// console.log(top.innerHeight);
// let width = window.innerWidth;
// console.log('footer top',footTop)
// function stickySidebar() {
//     var y = $(this).scrollTop();
//     console.log('Scroll Position:', y);
// console.log('y', y)
// console.log('top', top.innerHeight)
// if(width<1300 && width > 1080){
// let maxY = footTop - $sidebar.outerHeight();
// console.log('maxY 623',maxY)
//     if (y> top.innerHeight - 250) {
//         if (y < maxY) {
//             $sidebar.addClass('stickySidebar').css('top', '');
//             console.log('Adding stickySidebar class');
//         } else {
//             $sidebar.removeClass('stickySidebar').css({
//                 position: 'absolute',
//                 top: maxY + top.innerHeight + 'px'
//             });
//             console.log('Removing stickySidebar class');
//         }
//     } else {
//         $sidebar.removeClass('stickySidebar').css('top', '');
//         console.log('Removing stickySidebar class');
//     }
// }
// // for desktop width
// if(width<1500 && width > 1300){
//     if (y > top.innerHeight - 450) {
//         if (y < maxY) {
//             $sidebar.addClass('stickySidebar').css('top', '');
//             console.log('Adding stickySidebar class');
//         } else {
//             $sidebar.removeClass('stickySidebar').css({
//                 position: 'absolute',
//                 top: maxY + top.innerHeight + 'px'
//             });
//             console.log('Removing stickySidebar class');
//         }
//     } else {
//         $sidebar.removeClass('stickySidebar').css('top', '');
//         console.log('Removing stickySidebar class');
//     }
// }
// // for large screen
// if(width>1600){
//     if (y > top.innerHeight - 450) {
//         if (y < maxY) {
//             $sidebar.addClass('stickySidebar').css('top', '');
//             console.log('Adding stickySidebar class');
//         } else {
//             $sidebar.removeClass('stickySidebar').css({
//                 position: 'absolute',
//                 top: maxY + top.innerHeight + 'px'
//             });
//             console.log('Removing stickySidebar class');
//         }
//     } else {
//         $sidebar.removeClass('stickySidebar').css('top', '');
//         console.log('Removing stickySidebar class');
//     }
// }
// }
// // Log initial values
// console.log('Initial top:', top);
// console.log('Initial maxY:', maxY);
// // Attach the function to the scroll event
// $(window).scroll(stickySidebar);
// media query 
$('.latest_news_marquee').marquee({
    speed: 5000,
    gap: 5,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    pauseOnHover: true
});
$('.marquee-with-options').marquee({
    speed: 200,
    gap: 50,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    pauseOnHover: true
});
$('.color').on('click', function () {
    let a = $(this).attr('data-id');
    $(".change-color-code").css('background', a);
    $(".banner-wrapper .flex-control-nav").css('background', a);
    $(".banner-wrapper .flex-pauseplay").css('background', a);
    $(".latest-new-title:before").css('border-color', a);
    $(".change-border-color-text").css({
        "border-color": a,
        "color": a
    });
    $(".change-text-color").css('color', a);
})
let accordion_collapse = $('.accordion-collapse.collapse');
accordion_collapse.on('show.bs.collapse', function () {
    // Hide other open collapse elements except for those with .accordion as parent
    let parentAccordion = $(this).closest('.accordion');
    accordion_collapse.not(parentAccordion).removeClass('show');
});
// paper mausem kagaj sangralay
let sidebarDropdown_5 = $('#sidebarDropdown_5')
let fl_accordion = $('.fl-accordion');
// fl_accordion.parent().parent().parent().addClass('show');
console.log(fl_accordion.parent().parent().parent())
console.log();
fl_accordion.click(function () {
    fl_accordion.parent().parent().parent().addClass('show');
})
// sticky header
// window.onscroll = function() {myFunction()};
// // Get the header
// var header = document.getElementById("menuHeader");
// // Get the offset position of the navbar
// var sticky = header.offsetTop;
// // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }
$(document).ready(function () {
    // Check if the modal should be shown today
    if (!getCookie("modalShownToday")) {
        // If it hasn't been shown today, show the modal
        $(".modal").each(function (l) {
            $(this).on("show.bs.modal", function (l) {
                var o = $(this).attr("data-easein");
                "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ?
                    $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(
                        ".modal-dialog").velocity("callout." + o) : "flash" == o ? $(
                            ".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(
                                ".modal-dialog").velocity("callout." + o) : "swing" == o ? $(
                                    ".modal-dialog").velocity("callout." + o) : $(".modal-dialog")
                                        .velocity("transition." + o)
            })
        });
        setTimeout(function () {
            $('#costumModal8').modal('show');
        }, 1000);
        // Set a cookie with an expiration date one day from now
        setCookie("modalShownToday", "true", 1);
    }
});



$('#submitForm').click(function (e) {
    // Prevent the default form submission
    $('#contact_form input, #contact_form textarea').focus(function() {
        var fieldId = $(this).attr('name');
        $('#' + fieldId + '-error').html('');
    });
    e.preventDefault();
    var formData = $('#contact_form').serialize();

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });

    $.ajax({
        type: 'POST',
        url: baseUrl1 + '/contact-us',
        data: formData,
        success: function (response) {
            console.log(response)          
            if (response.success) {
                $('#contact_form')[0].reset();
                $('#contact-error').html('<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style="display: block;"><div class="toast-message">Record Add Successfully</div></div></div>');
            } else if (response.captchaError){
                $('#contact-error').html('<div id="toast-container" class="toast-top-right"><div class="toast toast-error" aria-live="assertive" style="display: block;"><div class="toast-message">Captcha Invalid .</div></div></div>');
            } else {
                toastr.error('Oops something went wrong')
            }
        },
        error: function (error) {
            if (error.responseJSON && error.responseJSON.errors) {
                var errors = error.responseJSON.errors;
                for (var field in errors) {
                    if (errors.hasOwnProperty(field)) {
                        $('#' + field + '-error').html(errors[field][0]);
                    }
                }
            } else {
                console.log('Unexpected error:', error);
            }

        }
    });
});



$('#feedback_button').click(function (e) {
    // Prevent the default form submission
    $('#feedback_form input, #feedback_form textarea').focus(function() {
        var fieldId = $(this).attr('name');
        $('#' + fieldId + '-error').html('');
    });
    e.preventDefault();
    var formData = $('#feedback_form').serialize();

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });
    $.ajax({
        type: 'POST',
        url: baseUrl1 + '/feedbackStore',
        data: formData,
        success: function (response) {            
            if (response.success) {
                $('#feedback_form')[0].reset();
                $('#response-error').html('<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style="display: block;"><div class="toast-message">Record Add Successfully</div></div></div>');                
            } else if (response.captchaError){
                $('#response-error').html('<div id="toast-container" class="toast-top-right"><div class="toast toast-error" aria-live="assertive" style="display: block;"><div class="toast-message">Captcha Invalid.</div></div></div>');              
            } else {
                toastr.error('Oops something went wrong')
            }
        },
        error: function (error) {
            if (error.responseJSON && error.responseJSON.errors) {
                var errors = error.responseJSON.errors;
                for (var field in errors) {
                    if (errors.hasOwnProperty(field)) {
                        $('#' + field + '-error').html(errors[field][0]);
                    }
                }
            } else {
                console.log('Unexpected error:', error);
            }

        }
    });
});


// scroll to top

let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document with smooth animation
function topFunction() {
  // Set the duration of the scrolling animation
  const duration = 500; // in milliseconds
  const start = window.pageYOffset;
  const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

  function scroll() {
    const now = 'now' in window.performance ? performance.now() : new Date().getTime();
    const time = Math.min(1, (now - startTime) / duration);
    const easeInOutCubic = time => time < 0.5 ? 4 * time ** 3 : 1 - Math.pow(-2 * time + 2, 3) / 2;
    window.scrollTo(0, start + (0 - start) * easeInOutCubic(time));

    if (time < 1) {
      window.requestAnimationFrame(scroll);
    }
  }

  window.requestAnimationFrame(scroll);
}
// end scroll to top
  /*-------------------------------------
        OwlCarousel
    -------------------------------------*/
    $('.rs-carousel').each(function () {
        var owlCarousel = $(this),
            loop = owlCarousel.data('loop'),
            items = owlCarousel.data('items'),
            margin = owlCarousel.data('margin'),
            stagePadding = owlCarousel.data('stage-padding'),
            autoplay = owlCarousel.data('autoplay'),
            autoplayTimeout = owlCarousel.data('autoplay-timeout'),
            smartSpeed = owlCarousel.data('smart-speed'),
            dots = owlCarousel.data('dots'),
            nav = owlCarousel.data('nav'),
            navSpeed = owlCarousel.data('nav-speed'),
            xsDevice = owlCarousel.data('mobile-device'),
            xsDeviceNav = owlCarousel.data('mobile-device-nav'),
            xsDeviceDots = owlCarousel.data('mobile-device-dots'),
            smDevice = owlCarousel.data('ipad-device'),
            smDeviceNav = owlCarousel.data('ipad-device-nav'),
            smDeviceDots = owlCarousel.data('ipad-device-dots'),
            smDevice2 = owlCarousel.data('ipad-device2'),
            smDeviceNav2 = owlCarousel.data('ipad-device-nav2'),
            smDeviceDots2 = owlCarousel.data('ipad-device-dots2'),
            mdDevice = owlCarousel.data('md-device'),
            centerMode = owlCarousel.data('center-mode'),
            HoverPause = owlCarousel.data('hoverpause'),
            mdDeviceNav = owlCarousel.data('md-device-nav'),
            mdDeviceDots = owlCarousel.data('md-device-dots');
        owlCarousel.owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            center: (centerMode ? true : false),
            autoplayHoverPause: (HoverPause ? true : false),
            margin: (margin ? margin : 0),
            //stagePadding: (stagePadding ? stagePadding : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
                0: {
                    items: (xsDevice ? xsDevice : 1),
                    nav: (xsDeviceNav ? true : false),
                    dots: (xsDeviceDots ? true : false),
                    center: false,
                },
                576: {
                    items: (smDevice2 ? smDevice2 : 2),
                    nav: (smDeviceNav2 ? true : false),
                    dots: (smDeviceDots2 ? true : false),
                    center: false,
                },
                768: {
                    items: (smDevice ? smDevice : 2),
                    nav: (smDeviceNav ? true : false),
                    dots: (smDeviceDots ? true : false),
                    center: false,
                },
                992: {
                    items: (mdDevice ? mdDevice : 2),
                    nav: (mdDeviceNav ? true : false),
                    dots: (mdDeviceDots ? true : false),
                }
            }
        });
    });


    var owl_3 = $('#banner3');
    $('#customNextBtn3').click(function () {
        owl_3.trigger('next.owl.carousel', 500);
    });
    $('#customPreviousBtn3').click(function () {
        owl_3.trigger('prev.owl.carousel', 500);
    });
    $('#customPause3').click(function () {
        owl_3.trigger('stop.owl.autoplay', 500);
    });
    $('#customPlay3').click(function () {
        owl_3.trigger('play.owl.autoplay', 500);
    });
    
    
//   third photo gallery latest news

var owl_3 = $('#banner3');
$('#customNextBtn3').click(function () {
    owl_3.trigger('next.owl.carousel', 500);
});
$('#customPreviousBtn3').click(function () {
    owl_3.trigger('prev.owl.carousel', 500);
});
$('#customPause3').click(function () {
    owl_3.trigger('stop.owl.autoplay', 500);
});
$('#customPlay3').click(function () {
    owl_3.trigger('play.owl.autoplay', 500);
});



var pause3 = document.querySelector("#customPause3");
var play3 = document.querySelector("#customPlay3");
pause3.addEventListener("click", function () {
    play3.style.display = "block";
    pause3.style.display = "none"
});

play3.addEventListener("click", function () {
    play3.style.display = "none";
    pause3.style.display = "block"
});





//   fourth video gallery latest news

var owl_4 = $('#banner4');
$('#customNextBtn4').click(function () {
    owl_4.trigger('next.owl.carousel', 500);
});
$('#customPreviousBtn4').click(function () {
    owl_4.trigger('prev.owl.carousel', 500);
});
$('#customPause4').click(function () {
    owl_4.trigger('stop.owl.autoplay', 500);
});
$('#customPlay4').click(function () {
    owl_4.trigger('play.owl.autoplay', 500);
});



var pause4 = document.querySelector("#customPause4");
var play4 = document.querySelector("#customPlay4");
pause4.addEventListener("click", function () {
    play4.style.display = "block";
    pause4.style.display = "none"
});

play4.addEventListener("click", function () {
    play4.style.display = "none";
    pause4.style.display = "block"
});

// detail page gallery js
