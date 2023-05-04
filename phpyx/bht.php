<div>
  <link href="qtimages/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="qtimages/lib/jquery/jquery.min.js"></script>
  <script src="qtimages/lib/bootstrap/js/bootstrap.min.js"></script>
</div>
<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper-container {
    margin-top: 80px;
    width: 100%;
    height: 500px;
    margin-left: auto;
    margin-right: auto;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }
</style>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="./swiper/swiper.css">
<!-- Swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="./uploadfile/1.jpg"></div>
    <div class="swiper-slide"><img src="./uploadfile/2.jpg"></div>
    <div class="swiper-slide"><img src="./uploadfile/3.jpg"></div>
    <div class="swiper-slide"><img src="./uploadfile/4.jpg"></div>
    <div class="swiper-slide"><img src="./uploadfile/5.jpg"></div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<!-- Swiper JS -->
<script src="./swiper/swiper.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true,
    autoplay: 1500,
  });
  //鼠标覆盖停止自动切换
  swiper.container[0].onmouseover = function() {
    swiper.stopAutoplay();
  }
  //鼠标移出开始自动切换
  swiper.container[0].onmouseout = function() {
    swiper.startAutoplay();
  }
</script>