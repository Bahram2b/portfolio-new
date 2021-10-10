

<!-- manipulation -->
<div class="manipulation-content" id="sec-1">

    <div class="container">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow"> ─ Motion</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv owl-theme">

                    @foreach($motion as $row)
                        <div class="item">
                            <div class="testimonials-item">
                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    <div class="videolightbox-thumb-details">
                                        <img class="videolightbox-button bg-transparent" src="{{asset('frontend/img/play(2).png')}}" height="100" width="100" alt="">
                                    </div>
                                    <div class="lightbox-video-details">This is some test text describing what this particular video happens to be about.</div>
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
<!-- manipulation end -->

<!-- portrait -->
<div class=" portrait-content" id="sec-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv owl-theme">

                        @foreach($product as $row)
                            <div class="item">
                                <div class="testimonials-item">
                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    <div class="videolightbox-thumb-details">
                                        <img class="videolightbox-button bg-transparent" src="{{asset('frontend/img/play(2).png')}}" height="100" width="100" alt="">
                                    </div>
                                    <div class="lightbox-video-details">This is some test text describing what this particular video happens to be about.</div>
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
<!-- portrait -->

<!-- portfolio -->
<div class="product-content" id="sec-3">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv owl-theme">

                    @foreach($broll as $row)
                        <div class="item">
                            <div class="testimonials-item">
                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    <div class="videolightbox-thumb-details">
                                        <img class="videolightbox-button bg-transparent" src="{{asset('frontend/img/play(2).png')}}" height="100" width="100" alt="">
                                    </div>
                                    <div class="lightbox-video-details">This is some test text describing what this particular video happens to be about.</div>
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
<!-- portfolio -->
