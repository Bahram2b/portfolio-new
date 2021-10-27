<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Morteza Jelokhani Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/landing/css/landing.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/loading.css')}}">

    <!--===============================================================================================-->
{{--        <link rel="stylesheet" type="text/css" href="{{'frontend/landing/css/landing.css'}}">--}}
<!--===============================================================================================-->
    <!-- Fonts -->

    <!-- Styles -->

    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/css/bootstrap.min.css'}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css'}}">--}}

</head>
<body>
<div class="load">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</div>

<div class="container">


    <section class="screen left tiles">

{{--        <img src="frontend/landing/img/left.jpg" />--}}
        <a class="svg-photo" href="{{route('Photo.Portfolio')}}"><svg
            x="0px" y="0px" width="160px" height="250px" viewBox="0 0 400 500" style="enable-background:new 0 0 455 455;"
            xml:space="preserve">

            <defs>
            </defs>
            <circle class="st0" cx="200" cy="230" r="100"/>
            <circle class="st1" cx="200" cy="230" r="105">
                <animate attributeName="r" from="105" to="130" begin="0s" dur="1s" repeatCount="indefinite"/>
                <animate attributeName="opacity"
                         from="0.15"
                         to="0"
                         dur="1s"
                         begin="0s"
                         repeatCount="indefinite"
                         fill="freeze"
                         id="circ-anim"
                />
            </circle>
            {{--            <text class="text" x="90" y="70"--}}
            {{--                  style="fill: #34495e;"--}}
            {{--                  font-family="Helvetica Neue"--}}
            {{--                  font-weight="bold"--}}
            {{--                  font-size="55">--}}
            {{--                Tap here--}}
            {{--            </text>--}}

</svg></a>

        <div class="info">
            <button>
                <a href="{{route('Photo.Portfolio')}}" class="button"></a>
            </button>
        </div>

    </section>
    <section class="screen right">
        <a class="svg-photo" href="{{route('Video.Portfolio')}}"><svg
                x="0px" y="0px" width="160px" height="250px" viewBox="0 0 400 500" style="enable-background:new 0 0 455 455;"
                xml:space="preserve">

            <defs>
            </defs>
                <circle class="st0" cx="200" cy="230" r="100"/>
                <circle class="st1" cx="200" cy="230" r="105">
                    <animate attributeName="r" from="105" to="130" begin="0s" dur="1s" repeatCount="indefinite"/>
                    <animate attributeName="opacity"
                             from="0.15"
                             to="0"
                             dur="1s"
                             begin="0s"
                             repeatCount="indefinite"
                             fill="freeze"
                             id="circ-anim"
                    />
                </circle>
                {{--            <text class="text" x="90" y="70"--}}
                {{--                  style="fill: #34495e;"--}}
                {{--                  font-family="Helvetica Neue"--}}
                {{--                  font-weight="bold"--}}
                {{--                  font-size="55">--}}
                {{--                Tap here--}}
                {{--            </text>--}}

</svg></a>
        <div class="info">
            <button>
                <a href="{{route('Video.Portfolio')}}" class="button"></a>
            </button>
        </div>

    </section>
</div>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
<!--===============================================================================================-->
{{--<script>window.jQuery || document.write('<script src="{{'js/vendor/jquery-1.11.2.min.js'}}"><\/script>')</script>--}}
<!--===============================================================================================-->
{{--<script src="{{'frontend/js/vendor/bootstrap.min.js'}}"></script>--}}
{{--<script src="{{'frontend/js/plugins.js'}}"></script>--}}
<script>
    $(window).on('load', function () {
        $(".load").fadeOut("slow");
    });
</script>
<script src="{{'frontend/landing/js/landing.js'}}"></script>
</body>
</html>
