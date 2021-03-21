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
    Pass Min and Max selected value in single page option for select Item.
    ============================================================================== */

    $(".minPrice").click(function(){
      var one = "small";
      var one = Cookies.set('size', one);
    });

    $(".maxPrice").click(function(){
      var one = "large"
      var one = Cookies.set('size', one);
    });

    function minMaxPrice(){
      var one = Cookies.get('size');
      if(one == 'small'){
        $('table.variations select#pa_size option[value="small"]').prop('selected', true);
        Cookies.remove('size');
      }else if(one == 'large'){
        $('table.variations select#pa_size option[value="large"]').prop('selected', true);
        Cookies.remove('size');
      }
    }

    minMaxPrice();

    /* ==============================================================================
    Add a class in active category for desing the active category
    ============================================================================== */

   $("a").each(function(){
       if ($(this).attr("href") == window.location.href){
            $(this).addClass("active");
       }
   });



}); // Close document dot ready =================================================