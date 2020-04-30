<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="CSS/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>


<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div id="slider_container" class="owl-carousel owl-theme">


    <?foreach($arResult["ITEMS"] as $arItem):?>
<div>       
  <a target="blank" href="<?=$arItem['PROPERTIES']['SLIDER_LINK']['VALUE']?>">

<img width="" height="" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="photo_<?=$arItem["NAME"]?>" />
</a>
</div>
    <?endforeach;?>

<!--

          <div>
              <a target="blank" href="https://beautyimage.ru/products/brends/epil-beauty/liniya-classic-epil-beauty/"><img src="../local/templates/beautyimage/images/static_page/index/01banner.jpg" alt="Image 2"></a>
          </div>
          <div>
          <a target="blank" href="https://beautyimage.ru/products/brends/beauty-image/liniya-classic/"><img src="../local/templates/beautyimage/images/static_page/index/02banner.jpg" alt="Image 3"></a>

          </div>
          <div>
          <a target="blank" href="https://beautyimage.ru/products/brends/profepil/liniya-classic-profepil/"><img src="../local/templates/beautyimage/images/static_page/index/03banner.jpg" alt="Image 1"></a>
          </div>
-->

      </div>
        </div>

    </div>
  </div>
</section>

<script>
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

responsive: {
            0:{
                nav:false
            },
            480: {
              nav: true
            }
        }
  });
});
</script>