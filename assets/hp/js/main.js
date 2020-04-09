'user strict'
$(document).ready(function () {

    /* Browser fullscreen experience on double click */
    if (self == top) {
        $('body').on('dblclick', function (e) {

            if (!document.fullscreenElement && // alternative standard method
                !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) { // current working methods
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.msRequestFullscreen) {
                    document.documentElement.msRequestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                }
            }

        });
    } else {

    }


    /* float label checking input is not empty */
    $('.float-label .form-control').on('blur', function () {
        if ($(this).val() || $(this).val().length != 0) {
            $(this).closest('.float-label').addClass('active');
        } else {
            $(this).closest('.float-label').removeClass('active');
        }
    })

    /* menu open close wrapper screen click close menu */
    $('.menu-btn').on('click', function (e) {
        e.stopPropagation();
        if ($('body').hasClass('sidemenu-open') == true) {
            $('body, html').removeClass('sidemenu-open');
            setTimeout(function () {
                $('body, html').removeClass('menuactive');
            }, 500);
        } else {
            $('body, html').addClass('sidemenu-open menuactive');
        }
    });
    $('.wrapper').on('click', function () {

        if ($('body').hasClass('sidemenu-open') == true) {

            $('body, html').removeClass('sidemenu-open');
            setTimeout(function () {
                $('body, html').removeClass('menuactive');
            }, 500);
        }
    });

    /* filter click open filter */
    if ($('body').hasClass('filtermenu-open') == true) {
        $('.filter-btn').find('i').html('close');
    }
    $('.filter-btn').on('click', function () {
        if ($('body').hasClass('filtermenu-open') == true) {
            $('body').removeClass('filtermenu-open');
            $(this).find('i').html('filter_list')

        } else {
            $('body').addClass('filtermenu-open');
            $(this).find('i').html('close')
        }
    });


    /* background image to cover */
    $('.background').each(function () {
        var imagewrap = $(this);
        var imagecurrent = $(this).find('img').attr('src');
        imagewrap.css('background-image', 'url("' + imagecurrent + '")');
        $(this).find('img').remove();
    });


    /* theme color cookie */
    if ($.type($.cookie("theme-color")) != 'undefined' && $.cookie("theme-color") != '') {
        $('html').removeClass('blue-theme');
        $('html').addClass($.cookie("theme-color"));
    }

    $('.theme-color .btn').on('click', function () {
        $('html').removeClass('color-theme-blue');
        $('html').removeClass($.cookie("theme-color"));
        var themecolor = 'color-theme-' + $(this).attr('data-theme');
        $.cookie("theme-color", themecolor, {
            expires: 1
        });
        $('html').addClass($.cookie("theme-color"));

    });

    /* theme layout cookie */
    if ($.type($.cookie("theme-color-layout")) !== 'theme-dark' && $.cookie("theme-color-layout") !== 'theme-dark') {
        $('#theme-dark').prop('checked', false);
        $('html').addClass($.cookie("theme-color-layout"));
    } else {
        $('#theme-dark').prop('checked', true);
        $('html').addClass($.cookie("theme-color-layout"));
    }
    $('#theme-dark').on('change', function () {
        if ($(this).is(':checked') === true) {
            $('html').removeClass('theme-light');
            $('html').removeClass($.cookie("theme-color-layout"));
            $.cookie("theme-color-layout", 'theme-dark', {
                expires: 1
            });
            $('html').addClass($.cookie("theme-color-layout"));
        } else {
            $('html').removeClass('theme-dark');
            $('html').removeClass($.cookie("theme-color-layout"));
            $.cookie("theme-color-layout", 'theme-light', {
                expires: 1
            });
            $('html').addClass($.cookie("theme-color-layout"));
        }


    });
    
    
     /* theme RTL support */
    if ($.type($.cookie("rtl-layout")) !== 'rtl' && $.cookie("rtl-layout") !== 'rtl') {
        $('#theme-rtl').prop('checked', false);
        $('html').removeClass($.cookie("rtl-layout"));
    } else {
        $('#theme-rtl').prop('checked', true);
        $('html').addClass($.cookie("rtl-layout"));
    }
    $('#theme-rtl').on('change', function () {
        if ($(this).is(':checked') === true) {
            $.cookie("rtl-layout", 'rtl', {
                expires: 1
            });
            $('html').addClass($.cookie("rtl-layout"));
        } else {            
            $('html').removeClass($.cookie("rtl-layout"));
            $.cookie("rtl-layout", 'ltr', {
                expires: 1
            });
            $('html').addClass($.cookie("rtl-layout"));
        }

    });


});


$(window).on('load', function () {

    setTimeout(function () {
        $('.loader-screen').fadeOut('slow');
    }, 500);

    /* set window height of caontainer relavtive */

    var footerheight = $('.footer').outerHeight();
    if (footerheight !== 'undefined') {
        $('.wrapper ').attr('style',"padding-bottom:"+footerheight+"px; padding-bottom:calc(env(safe-area-inset-bottom) + "+ footerheight + "px )");
    }

    /* header active on scroll more than 50 px*/

    var loginfooterheight = $('.login-footer').outerHeight();
    if (loginfooterheight !== 'undefined' || loginfooterheight === null) {
        $('.login-row').css('min-height', ($(window).height() - loginfooterheight));
    }

    var headerheight = $('.header').outerHeight();
    if (headerheight !== 'undefined' || headerheight === null) {
        $('.login-row').css('padding-top', headerheight);
    }


    /* header active on scroll more than 50 px*/
    if ($(this).scrollTop() >= 30) {
        $('.header').addClass('active')
    } else {
        $('.header').removeClass('active')
    }

    $(window).on('scroll', function () {
        /* header active on scroll more than 50 px*/
        if ($(this).scrollTop() >= 30) {
            $('.header').addClass('active')
        } else {
            $('.header').removeClass('active')
        }
    });


});

$(window).on('resize', function () {
    var footerheight = $('.footer').outerHeight();
    if (footerheight !== 'undefined') {
        $('.wrapper ').attr('style',"padding-bottom:"+footerheight+"px; padding-bottom:calc(env(safe-area-inset-bottom) + "+ footerheight + "px )");
    }

    /* header active on scroll more than 50 px*/

    var loginfooterheight = $('.login-footer').outerHeight();
    if (loginfooterheight !== 'undefined' || loginfooterheight === null) {
        $('.login-row').css('min-height', ($(window).height() - loginfooterheight));
    }

    var headerheight = $('.header').outerHeight();
    if (headerheight !== 'undefined' || headerheight === null) {
        $('.login-row').css('padding-top', headerheight);
    }
})
