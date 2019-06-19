$(document).ready( function () {
    "use strict";

    /*

    1. Vars and Inits

    */

    var header = $('.header');
    var topNav = $('.top_nav')
    var mainSlider = $('.main_slider');
    var hamburger = $('.hamburger_container');
    var menu = $('.hamburger_menu');
    var menuActive = false;
    var hamburgerClose = $('.hamburger_close');
    var fsOverlay = $('.fs_menu_overlay');

    setHeader();

    $(window).on('resize', function () {
        initFixProductBorder();
        setHeader();
    });

    $(document).on('scroll', function () {
        setHeader();
    });

    initMenu();
    initTimer();
    initFavorite();
    initFixProductBorder();
    initIsotopeFiltering();
    initSlider();

    /*

    2. Set Header

    */

    function setHeader() {
        if (window.innerWidth < 992) {
            if ($(window).scrollTop() > 100) {
                header.css({'top': "0"});
            }
            else {
                header.css({'top': "0"});
            }
        }
        else {
            if ($(window).scrollTop() > 100) {
                header.css({'top': "-50px"});
            }
            else {
                header.css({'top': "0"});
            }
        }
        if (window.innerWidth > 991 && menuActive) {
            closeMenu();
        }
    }

    /*

    3. Init Menu

    */

    function initMenu() {
        if (hamburger.length) {
            hamburger.on('click', function () {
                if (!menuActive) {
                    openMenu();
                }
            });
        }

        if (fsOverlay.length) {
            fsOverlay.on('click', function () {
                if (menuActive) {
                    closeMenu();
                }
            });
        }

        if (hamburgerClose.length) {
            hamburgerClose.on('click', function () {
                if (menuActive) {
                    closeMenu();
                }
            });
        }

        if ($('.menu_item').length) {
            var items = document.getElementsByClassName('menu_item');
            var i;

            for (i = 0; i < items.length; i++) {
                if (items[i].classList.contains("has-children")) {
                    items[i].onclick = function () {
                        this.classList.toggle("active");
                        var panel = this.children[1];
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        }
                        else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    }
                }
            }
        }
    }

    function openMenu() {
        menu.addClass('active');
        // menu.css('right', "0");
        fsOverlay.css('pointer-events', "auto");
        menuActive = true;
    }

    function closeMenu() {
        menu.removeClass('active');
        fsOverlay.css('pointer-events', "none");
        menuActive = false;
    }

    /*

    4. Init Timer

    */

    function initTimer() {
        if ($('.timer').length) {
            // Uncomment line below and replace date
            // var target_date = new Date("Dec 7, 2017").getTime();

            // comment lines below
            var date = new Date();
            date.setDate(date.getDate() + 3);
            var target_date = date.getTime();
            //----------------------------------------

            // variables for time units
            var days, hours, minutes, seconds;

            var d = $('#day');
            var h = $('#hour');
            var m = $('#minute');
            var s = $('#second');

            setInterval(function () {
                // find the amount of "seconds" between now and target
                var current_date = new Date().getTime();
                var seconds_left = (target_date - current_date) / 1000;

                // do some time calculations
                days = parseInt(seconds_left / 86400);
                seconds_left = seconds_left % 86400;

                hours = parseInt(seconds_left / 3600);
                seconds_left = seconds_left % 3600;

                minutes = parseInt(seconds_left / 60);
                seconds = parseInt(seconds_left % 60);

                // display result
                d.text(days);
                h.text(hours);
                m.text(minutes);
                s.text(seconds);

            }, 1000);
        }
    }

    /*

    5. Init Favorite

    */

    function initFavorite() {
        if ($('.favorite').length) {
            var favs = $('.favorite');

            favs.each(function () {
                var fav = $(this);
                var active = false;
                if (fav.hasClass('active')) {
                    active = true;
                }

                fav.on('click', function () {
                    if (active) {
                        fav.removeClass('active');
                        active = false;
                    }
                    else {
                        fav.addClass('active');
                        active = true;
                    }
                });
            });
        }
    }

    /*

    6. Init Fix Product Border

    */

    function initFixProductBorder() {
        if ($('.product_filter').length) {
            var products = $('.product_filter:visible');
            var wdth = window.innerWidth;

            // reset border
            products.each(function () {
                $(this).css('border-right', 'solid 1px #e9e9e9');
            });

            // if window width is 991px or less

            if (wdth < 480) {
                for (var i = 0; i < products.length; i++) {
                    var product = $(products[i]);
                    product.css('border-right', 'none');
                }
            }

            else if (wdth < 576) {
                if (products.length < 5) {
                    var product = $(products[products.length - 1]);
                    product.css('border-right', 'none');
                }
                for (var i = 1; i < products.length; i += 2) {
                    var product = $(products[i]);
                    product.css('border-right', 'none');
                }
            }

            else if (wdth < 768) {
                if (products.length < 5) {
                    var product = $(products[products.length - 1]);
                    product.css('border-right', 'none');
                }
                for (var i = 2; i < products.length; i += 3) {
                    var product = $(products[i]);
                    product.css('border-right', 'none');
                }
            }

            else if (wdth < 992) {
                if (products.length < 5) {
                    var product = $(products[products.length - 1]);
                    product.css('border-right', 'none');
                }
                for (var i = 3; i < products.length; i += 4) {
                    var product = $(products[i]);
                    product.css('border-right', 'none');
                }
            }

            //if window width is larger than 991px
            else {
                if (products.length < 5) {
                    var product = $(products[products.length - 1]);
                    product.css('border-right', 'none');
                }
                for (var i = 4; i < products.length; i += 5) {
                    var product = $(products[i]);
                    product.css('border-right', 'none');
                }
            }
        }
    }

    /*

    7. Init Isotope Filtering

    */

    function initIsotopeFiltering() {
        if ($('.grid_sorting_button').length) {
            $('.grid_sorting_button').click(function () {
                // putting border fix inside of setTimeout because of the transition duration
                setTimeout(function () {
                    initFixProductBorder();
                }, 500);

                $('.grid_sorting_button.active').removeClass('active');
                $(this).addClass('active');

                var selector = $(this).attr('data-filter');
                $('.product-grid').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });


                return false;
            });
        }
    }

    /*

	8. Init Slider

	*/

    function initSlider()
    {
        if($('.product_slider').length)
        {
            var slider1 = $('.product_slider');

            slider1.owlCarousel({
                loop:false,
                dots:false,
                nav:false,
                responsive:
                    {
                        0:{items:1},
                        480:{items:2},
                        768:{items:3},
                        991:{items:4},
                        1280:{items:5},
                        1440:{items:5}
                    }
            });

            if($('.product_slider_nav_left').length)
            {
                $('.product_slider_nav_left').on('click', function()
                {
                    slider1.trigger('prev.owl.carousel');
                });
            }

            if($('.product_slider_nav_right').length)
            {
                $('.product_slider_nav_right').on('click', function()
                {
                    slider1.trigger('next.owl.carousel');
                });
            }
        }
    }

    /**
     * Audio Player
     *
     */
    // var for audio content
    var audio = document.getElementById('audio');

    // html5 function - toggle play/pause btn and audio
    $("#plays_btn").click(function() {
        if (audio.paused == false) {
            audio.pause();
            $("#play_btn").show();
            $("#pause_btn").hide();
        } else {
            audio.play();
            $("#play_btn").hide();
            $("#pause_btn").show();
        }
    });


    // function for timeline
    audio.addEventListener("timeupdate", function() {
        var currentTime = audio.currentTime,
            duration = audio.duration,
            currentTimeMs = audio.currentTime * 1000;
        $('.progressbar_range').stop(true, true).animate({'width': (currentTime + .25) / duration * 100 + '%'}, 250, 'linear');
    });

    // count function for timeleft
    audio.addEventListener("timeupdate", function() {
        var timeleft = document.getElementById('timeleft'),
            duration = parseInt( audio.duration ),
            currentTime = parseInt( audio.currentTime ),
            timeLeft = duration - currentTime,
            s, m;

        s = timeLeft % 60;
        m = Math.floor( timeLeft / 60 ) % 60;

        s = s < 10 ? "0"+s : s;
        m = m < 10 ? "0"+m : m;

        $('#timeleft').text("-"+m+":"+s);
    });

    // Establish all variables that the analyser will use
    var canvas, ctx, source, context, analyser, fbc_array, bars, bar_x, bar_width, bar_height;

    // Inintialize the mp3 player after the page loads all of its HTM elements
    window.addEventListener("load", initMp3Player, false);

    function initMp3Player(){
        document.getElementById('audio');
        context = new AudioContext();
        analyser = context.createAnalyser();
        canvas = document.getElementById('analyser_render');
        ctx = canvas.getContext('2d');

        // Re-route audio playback into the processing graph of the Audio
        source = context.createMediaElementSource(audio);
        source.connect(analyser);
        analyser.connect(context.destination);
        frameLooper();
    }



    /**
     * frameLooper() animates any style of graphics
     * you wish to the audio frequency.
     * Looping at the default frame rate that the browser provides (apprx. 60FPS
    */
    function frameLooper(){
        window.webkitRequestAnimationFrame(frameLooper);
        fbc_array = new fnArraySwitch(analyser.frequencyBinCount);
        analyser.getByteFrequencyData(fbc_array);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#ffcd00'; //Color of the bars
        bars = 100;
        for (var i = 0; i < bars; i++) {
            bar_x = i * 3;
            bar_width = 2;
            bar_height = -(fbc_array[i] / 2);
            // fillRect(x, y, width, height)
            ctx.fillRect(bar_x, canvas.height, bar_width, bar_height);
        }
    }

    /**
     * Contact Page with ajax inputs validations
     *
     */
    
});
