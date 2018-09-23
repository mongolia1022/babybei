<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BABYBEI</title>
<meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
<meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css" />

<!--JQ基础文件-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-3.3.1.min.js"></script>

<!--IE6 PNG透明-->
<!--[if lte IE 6]>
<script src="<?php echo $tag['path.skin']; ?>js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

<!--wow.js-->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/wow.js"></script>
<script>
var wow = new WOW({  
    boxClass: 'wow',  
    animateClass: 'animated',  
    offset: 0,  
    mobile: true,  
    live: true  
});  
wow.init();  
</script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">

</head>

<body>

<div class="top">
	<img src="<?php echo $tag['path.skin']; ?>images/logo.png" />
    <div class="nav_all">
        <ul>
            <?php nav_main()?>
        </ul>
    </div>
    <div class="nav_in">
    	<div class="nav_in_cover"></div>
    	<ul class="clear">
            <?php nav_sub(1,0,0);?>
        </ul>
    </div>
    <script>
    	$(function(){
			$('#pro').mouseover(function(){
				//$('.nav_in').slideDown();	
				$('.nav_in').slideDown();
				$('.top').css('background','#fff');
			});
			
			$('.nav_in').mouseleave(function(){
				//$('.nav_in').slideDown();	
				$('.nav_in').slideUp();
				$('.top').css('background','none');
			});
		});
    </script>
</div>

<!-- Swiper -->
<div class="swiper-container swiper1">
	
    <div class="swiper-wrapper">
    <?php doc_focus('1',3,0,0,0,true,'id',0)?>
</div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination1"></div>
</div>

<div class="idx_av">
	<!-- Swiper -->
	<div class="swiper-container swiper2 wow fadeInUp" style="overflow:visible;">
    <div class="swiper-wrapper">
        <?php nav_sub('1',1,0,0)?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination2" style="bottom:-28px;"></div>
</div>
</div>

<!-- Swiper JS -->
<script src="<?php echo $tag['path.skin']; ?>dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper1 = new Swiper('.swiper1', {
	pagination: '.swiper-pagination1',
	paginationClickable: true,
	spaceBetween: 30,
	effect: 'fade',
	autoplay: 2500,
	autoplayDisableOnInteraction: false
});
var swiper2 = new Swiper('.swiper2', {
	pagination: '.swiper-pagination2',
	paginationClickable: true,
	spaceBetween: 300,
	autoplay: 2500,
	autoplayDisableOnInteraction: false
});
</script>

<!--首页产品列表-->
<?php nav_sub('1',2,0,0)?>

<!--产品hover JS-->
<script>
	$(function(){
		$('.idx_pro ul li').mouseover(function(){
			$(this).children('.pro_hover').stop(true,true).fadeIn();	
		});	
		$('.idx_pro ul li').mouseleave(function(){
			$(this).children('.pro_hover').stop(true,true).fadeOut();	
		});	
	});
</script>

<!--首页底部说明-->
<?php doc_article('13',0,0,0,0,0,true,true,'id',0)?>

<!--二维码显示-->
<div class="see_qr">
    <?php doc_focus('3',1,2,0,0,true,'id',0)?>
</div>
<script>
	$(function(){
		$('.to_see_qr').click(function(){
			$('.see_qr').fadeIn()
		});	
		$('.see_qr').click(function(){
			$('.see_qr').fadeOut()
		});	
	});
</script>

</body>
</html>
