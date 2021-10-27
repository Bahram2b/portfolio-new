{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}

<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
<!--===============================================================================================-->
{{--<script src="{{asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>--}}
<!--===============================================================================================-->


<!--===============================================================================================-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>




<!--===============================================================================================-->


{{--<!--===============================================================================================-->--}}
<script>
    $(window).on('load', function () {
        $(".load").fadeOut("slow");
    });
</script>
<script>


        'use strict';

        var top_header = $('.parallax-content');
        top_header.css({'background-position':'center center'}); // better use CSS

        $(window).scroll(function () {
            var st = $(this).scrollTop();
            top_header.css({'background-position':'center calc(50% + '+(st*.5)+'px)'});
        });


        $('body').scrollspy({
            target: '.fixed-side-navbar',
            offset: 200
        });

        // smoothscroll on sidenav click

        $('.tabgroup > div').hide();
        $('.tabgroup > div:first-of-type').show();
        $('.tabs a').click(function(e){
            e.preventDefault();
            var $this = $(this),
                tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                others = $this.closest('li').siblings().children('a'),
                target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabgroup).children('div').hide();
            $(target).show();

        })

</script>
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        // Add smooth scrolling to all links--}}
{{--        $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {--}}

{{--            // Make sure this.hash has a value before overriding default behavior--}}
{{--            if (this.hash !== "") {--}}
{{--                // Prevent default anchor click behavior--}}
{{--                event.preventDefault();--}}

{{--                // Store hash--}}
{{--                var hash = this.hash;--}}

{{--                // Using jQuery's animate() method to add smooth page scroll--}}
{{--                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area--}}
{{--                $('html, body').animate({--}}
{{--                    scrollTop: $(hash).offset().top--}}
{{--                }, 800, function(){--}}

{{--                    // Add hash (#) to URL when done scrolling (default click behavior)--}}
{{--                    window.location.hash = hash;--}}
{{--                });--}}
{{--            } // End if--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

