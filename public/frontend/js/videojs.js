
var videolightboxHTML = '<div class="videolightbox">' +
    '<div class="videolightbox-inner">' +
    '<div class="lb-content">Loading...' +
    '</div>' +
    '</div>' +
    '</div>';

$("body").on("click", ".videolightbox-button", function() {
    var contentURL = $(this).parents(".videolightbox-thumb").attr("data-lb-content");
    var contentType = $(this).parents(".videolightbox-thumb").attr("data-lb-content-type");

    if (contentType === "video") {
        var contentHTML = '<div class="video-wrapper"><iframe width="1280" height="720" src="'+contentURL+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';

        $("html").prepend(videolightboxHTML);
        $(".videolightbox").animate({
            opacity: 1
        }, 200, function() {
            // Animation complete.
            $(".lb-content").html(contentHTML);
        });

    }
});

// handle clicking dark part of lighbox to cancel
$("html").on("click", ".videolightbox-inner", function(){
    $(".videolightbox").animate({
        opacity: 0
    }, 200, function() {
        // Animation complete.
        $(".videolightbox").remove();
    });

});
$('.owl-carouselv').owlCarousel({
    items:4,
    merge:true,
    loop:true,
    margin:30,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:1
        },
        600:{
            items:2
        }
    }
})
$('.owl-carouselv2').owlCarousel({
    items:4,
    merge:true,
    loop:true,
    margin:30,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:2
        },
        600:{
            items:4
        }
    }
})
$('.owl-carouselv1').owlCarousel({
    items:4,
    merge:true,
    loop:true,
    margin:30,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:1
        },
        600:{
            items:1
        }
    }
})
$('.owl-carouselv4').owlCarousel({
    items:4,
    merge:true,
    loop:true,
    margin:30,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:1
        },
        600:{
            items:1
        }
    }
})
