<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Morteza Jelokhani Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/landing/css/landing.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/landing/css/loading.css')}}">
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

        <a class="mobilelink" href="{{route('Photo.Portfolio')}}" style=""></a>

        <div class="info">
            <button>
                <a href="{{route('Photo.Portfolio')}}" class="button"></a>
                <a href="{{route('Photo.Portfolio')}}" class="button">Photography</a>

            </button>
        </div>

    </section>
    <section class="screen right">
        <a class="mobilelink" href="{{route('Video.Portfolio')}}" style=""></a>

        <div class="info">
            <button>
                <a href="{{route('Video.Portfolio')}}" class="button"></a>

                <a href="{{route('Video.Portfolio')}}" class="button">Videography</a>

            </button>
        </div>

    </section>
</div>

<script>
    $(window).on('load', function () {
        $(".load").fadeOut("slow");
    });
</script>
<script src="{{'frontend/landing/js/landing.js'}}"></script>
</body>
</html>
