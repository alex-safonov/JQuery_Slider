$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
  
// Most important owl features


  items: 1,
    margin: 10,
    loop: true,
    nav: true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    //navText: true;
    autoplay:true, //Автозапуск слайдера
 	autoplayHoverPause: true,
    

    smartSpeed:1000, //Время движения слайда
    dots: true,




  });
});

$('.thumb').click(function(){
 $('.owl-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);  
})