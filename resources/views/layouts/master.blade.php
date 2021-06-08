<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="See the splendors of the High Atlas with our experienced, local guides. From easy day hikes to Mt. Toubkal treks, we have an adventure for you!">
    @include('layouts.head')
</head>

<body >
    
	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

{{--<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>--}}
   
    <!-- /Loader -->
    @include('layouts.main-header')
<!--------------------------->
    @yield('content')

<!--------------------------->

     @include('layouts.main-footer')

	<!-- End footer -->
	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->


     @include('layouts.footer-scripts')


</body>

</html>

<script>
    setInterval(function() {
        $("#notifications_count").load(window.location.href + " #notifications_count");
        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
    }, 5000);

</script>

<script>
    (function($) {

        "use strict";

        /* ==============================================
        Preload
        =============================================== */
        $(window).on("load", function() {
            $('[data-loader="circle-side"]').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('body').delay(350).css({
                'overflow': 'visible'
            });
            $('#animate_intro').addClass('animated fadeInUp');
        })

        /* ==============================================
        Sticky nav +  Scroll to top
        =============================================== */
        var $headerStick = $('header');
        var $toTop = $('#toTop');

        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 1) {
                $headerStick.addClass("sticky");
            } else {
                $headerStick.removeClass("sticky");
            };
            if ($(this).scrollTop() != 0) {
                $toTop.fadeIn();
            } else {
                $toTop.fadeOut();
            }
        });
        $toTop.on("click", function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });

        /* ==============================================
        COMMON
        =============================================== */
        /* Animation on scroll */
        new WOW().init();

        /* Booking form calculate */
        update_amounts();
        $('select').change(update_amounts);

        function update_amounts() {
            var sum = 0.0;
            $('#tickets > tbody  > tr').each(function() {
                var qty = $(this).find('option:selected').val();
                var price = $(this).find('.price').text().replace(/[^\d.]/, '');
                var amount = (qty * price);
                sum += amount;
                $(this).find('.subtotal').text('$' + amount);
            });
            $('#total').val('$' + sum);
        };

        /* Tooltip*/
        $('.tooltip-1').tooltip({
            html: true
        });

        /* Accordion*/
        function toggleChevron(e) {
            $(e.target)
                .prev('.panel-heading')
                .find("i.indicator")
                .toggleClass('icon_plus_alt2 icon_minus_alt2');
        }
        $('.panel-group').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);

        /* Video modal*/
        $('.video').magnificPopup({
            type: 'iframe'
        });

        /* Parallax modal*/
        $('.parallax_window_in').parallax({});

        /*  Image popups */
        $('.magnific-gallery').each(function() {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });

        /* Carousel*/
        $('.carousel_testimonials').owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            animateIn: 'flipInX',
            margin: 30,
            stagePadding: 30,
            smartSpeed: 450,
            responsiveClass: true,
            responsive: {
                600: {
                    items: 1
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });

        /* Twitter feed*/
        var $twitterFeed = $('.latest-tweets');

        $twitterFeed.each(function() {
            $(this).tweet({
                username: $(this).data('username'),
                join_text: "auto",
                avatar_size: 0,
                count: $(this).data('number'),
                auto_join_text_default: " we said,",
                auto_join_text_ed: " we",
                auto_join_text_ing: " we were",
                auto_join_text_reply: " we replied to",
                auto_join_text_url: "",
                loading_text: " Loading tweets...",
                modpath: "./twitter/"
            });
        });
        $twitterFeed.find('ul').addClass('slider');
        if ($().bxSlider) {
            $twitterFeed.bxSlider({
                mode: $twitterFeed.data('mode') != 'undefined' ? $twitterFeed.data('mode') : "horizontal",
                speed: $twitterFeed.data('speed') != 'undefined' ? $twitterFeed.data('speed') : 2000,
                controls: $twitterFeed.data('controls') != 'undefined' != 'undefined' ? $twitterFeed.data(
                    'controls') : true,
                nextSelector: $twitterFeed.data('nextselector') != 'undefined' ? $twitterFeed.data(
                    'nextselector') : '',
                prevSelector: $twitterFeed.data('prevselector') != 'undefined' ? $twitterFeed.data(
                    'prevselector') : '',
                pager: $twitterFeed.data('pager') != 'undefined' ? $twitterFeed.data('pager') : true,
                pagerSelector: $twitterFeed.data('pagerselector') != 'undefined' ? $twitterFeed.data(
                    'pagerselector') : '',
                pagerCustom: $twitterFeed.data('pagercustom') != 'undefined' ? $twitterFeed.data(
                    'pagercustom') : '',
                auto: $twitterFeed.data('auto') != 'undefined' ? $twitterFeed.data('auto') : true,
                autoHover: $twitterFeed.data('autoHover') != 'undefined' ? $twitterFeed.data('autoHover') :
                    true,
                adaptiveHeight: $twitterFeed.data('adaptiveheight') != 'undefined' ? $twitterFeed.data(
                    'adaptiveheight') : true,
                useCSS: $twitterFeed.data('useCSS') != 'undefined' ? $twitterFeed.data('useCSS') : false,
                nextText: '<i class="icon-angle-right">',
                prevText: '<i class="icon-angle-left">',
                preloadImages: 'all',
                responsive: true
            });
        };

        /* Hamburger icon*/
        var toggles = document.querySelectorAll(".cmn-toggle-switch");
        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };

        function toggleHandler(toggle) {
            toggle.addEventListener("click", function(e) {
                e.preventDefault();
                (this.classList.contains("active") === true) ? this.classList.remove("active"): this
                    .classList.add("active");
            });
        };

    })(window.jQuery); // JavaScript Document

</script>