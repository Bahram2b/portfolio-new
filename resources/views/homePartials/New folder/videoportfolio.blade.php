

<!-- manipulation -->
<div class="video-portfolio">
<div class="sec1-content" id="sec-1">

    <div class="mobbg">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5"> ─ @yield('ver-1')</span></p>
            </div>
        </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv owl-theme">

                    @foreach($broll as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    {{--                                    <img  src="{{'backend/img/clips/thumbnails/'.$row->thumbnail}}"   style="height: 100%; width:100%;" >--}}
                                    <div class="videolightbox-thumb-details">

                                        <div class="desc " style=""> {{$row->description}} <br>
                                            <div class="videolightbox-button " style="">
                                                <img class="" src="{{asset('frontend/img/play.png')}}"  style="height:60px; width:60px; ">
                                            </div>

                                        </div>

                                    </div>


                                </div>

                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- manipulation end -->

<!-- portrait -->
<div class="sec2-content " id="sec-2">

    <div class="mobbg">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5"> ─ @yield('ver-2')</span></p>
            </div>
        </div>
    <div class="container ">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv1 owl-theme">

                        @foreach($product as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
{{--                                    <img  src="{{'backend/img/clips/thumbnails/'.$row->thumbnail}}"   style="height: 100%; width:100%;" >--}}
                                    <div class="videolightbox-thumb-details">

                                        <div class="desc " style=""> {{$row->description}} <br>
                                            <div class="videolightbox-button " style="">
                                                <img class="" src="{{asset('frontend/img/play.png')}}"  style="height:60px; width:60px; ">
                                            </div>

                                        </div>

                                        </div>


                                </div>

                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- portrait -->

<!-- portfolio -->
<div class="sec3-content" id="sec-3">


    <div class="mobbg">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalizept-5"> ─ @yield('ver-3')</span></p>
            </div>
        </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv2 owl-theme">

                    @foreach($music as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    {{--                                    <img  src="{{'backend/img/clips/thumbnails/'.$row->thumbnail}}"   style="height: 100%; width:100%;" >--}}
                                    <div class="videolightbox-thumb-details">

                                        <div class="desc " style=""> {{$row->description}} <br>
                                            <div class="videolightbox-button " style="">
                                                <img class="" src="{{asset('frontend/img/play.png')}}"  style="height:60px; width:60px; ">
                                            </div>

                                        </div>

                                    </div>


                                </div>

                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mobbg">
    <div class="sec4-content" id="sec-4">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5"> ─ @yield('ver-4')</span></p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials1" class="owl-carouselv2 owl-theme">

                        @foreach($motion as $row)
                            <div class="item">
                                <div class="testimonials-item">

                                    <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                        {{--                                    <img  src="{{'backend/img/clips/thumbnails/'.$row->thumbnail}}"   style="height: 100%; width:100%;" >--}}
                                        <div class="videolightbox-thumb-details">

                                            <div class="desc " style=""> {{$row->description}} <br>
                                                <div class="videolightbox-button " style="">
                                                    <img class="" src="{{asset('frontend/img/play.png')}}"  style="height:60px; width:60px; ">
                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                    <div class="text-content">
                                        <h4>{{$row->title}}</h4>
                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
   @include('homePartials.footer')

    </div>
</div>
<!-- portfolio -->


</div>
