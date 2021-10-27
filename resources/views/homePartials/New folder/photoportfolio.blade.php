
<div class="photo-portfolio">


<!-- manipulation -->
<div class="sec1-content" id="sec-1">

    <div class="mobbg">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow pt-5"> ─  @yield('ver-1')</span></p>
            </div>
        </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    @foreach($portraits as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
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
<div class=" sec2-content" id="sec-2">
    <div class="mobbg">

        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5"> ─ @yield('ver-2')</span></p>
            </div>
        </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials2" class="owl-carousel owl-theme">
                    @foreach($manipulation as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
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

{{--<div class="sec3-layar">--}}
    <div class="mobbg">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5" > ─ @yield('ver-3')</span></p>
            </div>
        </div>
    <div class="container ">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials3" class="owl-carousel owl-theme">
                    @foreach($product as $row)
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
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

    <div class="sec4-content" id="sec-4">

        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize pt-5"> ─ @yield('ver-4')</span></p>
            </div>
        </div>


    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials4" class="owl-carousel owl-theme">
                    @foreach($music as $row)
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
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
{{--</div>--}}
<!-- portfolio -->



</div>
