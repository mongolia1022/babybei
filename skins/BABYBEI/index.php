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
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
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
        	<li>
            	<a href="#">
                	<span>STARRT NIGHT</span>
                    <label>繁星之夜系列</label>
                </a>
            </li>
        	<li>
            	<a href="#">
                	<span>NEW CHINESE</span>
                    <label>东方之境系列</label>
                </a>
            </li>
        	<li>
            	<a href="#">
                	<span>LITTLE WORLD</span>
                    <label>迷你世界系列</label>
                </a>
            </li>
        	<li>
            	<a href="#">
                	<span>BABYBEI G.</span>
                    <label>创意随笔系列</label>
                </a>
            </li>
        	<li>
            	<a href="#">
                	<span>ARCH-MARK</span>
                    <label>建筑印记系列</label>
                </a>
            </li>
        	<li>
            	<a href="#">
                	<span>UNEXP. WONDER</span>
                    <label>邂逅自然系列</label>
                </a>
            </li>
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
        <div class="swiper-slide clear bg_white">
        	<div class="idx_av_l" style="background:url(images/av1.jpg) no-repeat; background-size:100%;"></div>
        	<div class="idx_av_r">
            	<div class="idx_av_r_in">
                	<div class="idx_av_r_t">STRRAY NIGHT</div>
                  <div class="idx_av_r_m">繁星之夜</div>
                  <div class="idx_av_r_b">灵感来源于梵高的同名画作。星星，犹如大地、
山川、河流，藏在时间的长河之中，亘古存在。
它是如此古老、神秘、遥远，又是如此年轻、
亲切、美丽。在灿烂星河之下，每一个人都与
星空有不同的交集，并愿意像诗人和艺术家般，
用最深情的目光仰望它，用最有表现力的方式
赞美它。我们与星星的情结由来已久，只因为
心中都有属于自己的那片星空。</div>
					<div class="idx_av_r_b2"><a href="#">浏览此系列 &gt;</a></div>
                </div>
            </div>
        </div>
        <div class="swiper-slide clear bg_white">
        	<div class="idx_av_l" style="background:url(images/av1.jpg) no-repeat; background-size:100%;"></div>
        	<div class="idx_av_r">
            	<div class="idx_av_r_in">
                	<div class="idx_av_r_t">STRRAY NIGHT</div>
                  <div class="idx_av_r_m">繁星之夜</div>
                  <div class="idx_av_r_b">灵感来源于梵高的同名画作。星星，犹如大地、
山川、河流，藏在时间的长河之中，亘古存在。
它是如此古老、神秘、遥远，又是如此年轻、
亲切、美丽。在灿烂星河之下，每一个人都与
星空有不同的交集，并愿意像诗人和艺术家般，
用最深情的目光仰望它，用最有表现力的方式
赞美它。我们与星星的情结由来已久，只因为
心中都有属于自己的那片星空。</div>
					<div class="idx_av_r_b2"><a href="#">浏览此系列 &gt;</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination2" style="bottom:-28px;"></div>
</div>
</div>

<!-- Swiper JS -->
<script src="dist/js/swiper.min.js"></script>

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
<div class="idx_pro">
	<div class="idx_title2 wow flipInX">
    	<!--
    	<span><img src="images/icon_b.png" width="100%" /></span>
        <label>STRRAY NIGHT</label>
        <dt>collection</dt>
        -->
        <img src="images/pro_title.png" />
    </div>
	<ul class="clear">
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    </ul>
	<a href="#" class="idx_more wow flipInY">MORE</a>
</div>

<div class="idx_pro">
	<div class="idx_title2 wow flipInX">
    	<!--
    	<span><img src="images/icon_b.png" width="100%" /></span>
        <label>STRRAY NIGHT</label>
        <dt>collection</dt>
        -->
        <img src="images/pro_title.png" />
    </div>
	<ul class="clear">
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    </ul>
	<a href="#" class="idx_more wow flipInY">MORE</a>
</div>

<div class="idx_pro">
	<div class="idx_title2 wow flipInX">
    	<!--
    	<span><img src="images/icon_b.png" width="100%" /></span>
        <label>STRRAY NIGHT</label>
        <dt>collection</dt>
        -->
        <img src="images/pro_title.png" />
    </div>
	<ul class="clear">
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    	<li class="wow fadeInUp">
        	<img src="images/pro1.jpg" />
            <div class="pro_hover to_see_qr">
            	<div class="pro_hover_in">
                    <span>MORE</span>
                    <em></em>
                    <label>查看详情</label>
                </div>
            </div>
        </li>
    </ul>
	<a href="#" class="idx_more wow flipInY">MORE</a>
</div>

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
<div class="idx_bottom">
  <ul class="clear">
    	<li>
        	<span>销售门店</span>
            <label>我们将在销售店铺恭候您的光临</label>
            <a href="stores.html">寻找销售店铺</a>
        </li>
   	<li>
        	<span>联系方式</span>
            <label>我们将尽快给予您答复</label>
            <a href="contact.html">联系我们</a>
        </li>
   	<li>
        	<span>保养建议与专业服务</span>
            <label>查看我们的专业服务与保养建议</label>
            <a href="###" class="to_see_qr">访问专栏</a>
        </li>
    </ul>
</div>

<!--版权信息-->
<div class="copyright clear">
	<span><a href="###" class="to_see_qr">FAQ</a>　　<a href="###" class="to_see_qr">法律声明</a>　　<a href="###" class="to_see_qr">私隐政策</a>　　<a href="###" class="to_see_qr">网站地图</a>　　<a href="###" class="to_see_qr">工作机会</a>　　<a href="###" class="to_see_qr">专门店</a></span>
    <label>粤ICP备15030916号</label>
</div>




<!--二维码显示-->
<div class="see_qr">
	<div class="wx_qr"><img src="images/qr.png" width="100%" /></div>
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