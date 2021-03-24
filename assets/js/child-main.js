$(document).ready(function() {

    /* ==============================================================================
    Add owl carousel in single product page image
    ============================================================================== */

    $(".owl-carousel.singlePageThumbnailCarousel").owlCarousel({
        loop: 1,
        autoplay: 1,
        margin: 0,
        nav: 0,
        dots: 0,
        items: 3,
        lazyLoad: 1,
        margin: 0
    });

    /* ==============================================================================
    Add a class in active category for desing the active category
    ============================================================================== */

   $("a").each(function(){
       if ($(this).attr("href") == window.location.href){
            $(this).addClass("active");
       }
   });



}); // Close document dot ready =================================================