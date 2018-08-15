


$('.menu_open').click(function () {
    $('.mobile-menu').addClass('active');
});
$('.close_menu').click(function () {
    $('.mobile-menu').removeClass('active');
});



$('.content-slider').slick({
    infinite: true,
    arrows:true,
    autoplay: true,
    autoplaySpeed: 4000,
    nextArrow: '<a class="slich_arr-right"><i class="fa fa-chevron-right"></i></a>',
    prevArrow: '<a class="slich_arr-left"><i class="fa fa-chevron-left"></i></a>',
});

$('.content-slider a.slide_cont').magnificPopup({
    type: 'image',
    gallery: {
        tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
        enabled: true
    },
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    preloader: false,
    fixedContentPos: false,
    removalDelay: 300,
});

$('.pm_land-slider').slick({
    nextArrow: $('.pm-land-slider__next'),
    prevArrow: $('.pm-land-slider__prev'),

    infinite: true,
    arrows:true,
    autoplay: true,
    autoplaySpeed: 4000,
});
$('.pm_land-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
    setHeiHeightSlider();
});
if($('.pm_land-slider').length){
    setHeiHeightSlider()
    $(window).resize( function(){setHeiHeightSlider()} );
}
function setHeiHeightSlider() {
    var heig = $(window).height()*0.69;
    $('.pm_land-slide-box').css({
        height: heig + 'px'
    });
}