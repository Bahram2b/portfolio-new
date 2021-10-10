

<!-- manipulation -->
<div class="manipulation-content" id="sec-1">
    <div class="container">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize"> ─ M A N I P U L A T I O N</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials" class="owl-carousel owl-theme">
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
<!-- manipulation end -->

<!-- portrait -->
<div class=" portrait-content" id="sec-2">
    <div class="container">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize"> ─ P o r t r a i t</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials2" class="owl-carousel owl-theme">
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
<!-- portrait -->

<!-- portfolio -->
<div class="product-content" id="sec-3">


    <div class="container">
        <div class="sec-title">
            <div class="title-vertical">
                <p><span class="title-info-vertical-section title-font glow text-capitalize" > ─ P r o d u c T </span></p>
            </div>
        </div>
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
</div>
<!-- portfolio -->


