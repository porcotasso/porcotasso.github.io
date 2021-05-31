<?php include("_partial/wrapper-head.php"); ?>
<main>
<div class="swiper-container">
    <img src="<?php echo($_SERVER['DOCUMENT_ROOT']) ?>/images/illustration/illustration_001.jpg">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide-item">
            <a href="/frontend.html">
                <h2 class="bl-summary_ttl">frontend skill</h2>
            </a>
        </div>
        <div class="swiper-slide slide-item">Slide 2</div>
        <div class="swiper-slide slide-item">Slide 3</div>
    </div>
</div>

<script>
var mySwiper = new Swiper ('.swiper-container', {});
</script>
    <div class="bl-summary ly-innnerWidth">
        
        <div class="bl-summary_txt">
 
            <a href="/profile.html">profile.html</a>
        </div>
    </div>
</main>
<script src="/js/home.js"></script>
<?php include("_partial/wrapper-foot.php"); ?>
