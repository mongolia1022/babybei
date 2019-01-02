<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
    <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
    <script src="<?php echo $tag['path.skin']; ?>js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/flexible.css" />

    <title>BABYBEI</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>dist/css/swiper.min.css">

    <!--JQ基础文件-->
    <script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-3.3.1.min.js"></script>

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


</head>

<body>

<!--头部-->
<div class="top_all">
    <div class="nav_bar"></div>
    <div class="logo"><a href="index.html"><img src="<?php echo $tag['path.skin']; ?>images/logo.jpg" /></a></div>
</div>

<div class="nav_box animated">
    <div class="nav_bar_close"></div>
    <div class="nav_list">
        <ul>
            <?php nav_main()?>
        </ul>
    </div>
    <!--导航 JS-->
    <script>
        $(function(){

            $('.nav_bar').click(function(){
                $('.nav_box').show();
                $('.nav_box').addClass('fadeInLeft');
                $('.nav_box').removeClass('fadeOutLeft');
            });
            $('.nav_bar_close').click(function(){
                $('.nav_box').addClass('fadeOutLeft');
                $('.nav_box').removeClass('fadeInLeft');
            });

            $('.nav_pro').click(function(){
                var has_class = $('.nav_pro').hasClass('open');
                if(has_class == false){
                    $(this).addClass('open');
                    $(this).children('label').show();
                    $(this).children('em').hide();
                    $(this).children('dl').slideDown();
                }
                if(has_class == true){
                    $(this).removeClass('open');
                    $(this).children('label').hide();
                    $(this).children('em').show();
                    $(this).children('dl').slideUp();
                }
            });

        });
    </script>
</div>


<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php doc_focus('1',3,0,0,0,true,'id',0)?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="<?php echo $tag['path.skin']; ?>dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>


<!--系列介绍-->
<?php nav_sub('1',1,0,0)?>

<!--返回顶部-->
<div class="go_back_top wow fadeInUp"><a href="#" class="iconfont">返回顶层 &#xe605;</a></div>





<!--二维码显示-->
<div class="see_qr">
    <div class="wx_qr"><img src="<?php echo $tag['path.skin']; ?>images/qr.png" width="100%" /></div>
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
