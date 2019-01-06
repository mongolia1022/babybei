<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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
    <div class="logo"><a href="/"><img src="<?php echo $tag['path.skin']; ?>images/logo.jpg" /></a></div>
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

<!--主体内容-->
<?php sys_parts() ?>

<!--返回顶部-->
<div class="go_back_top wow fadeInUp"><a href="#" class="iconfont">返回顶层 &#xe605;</a></div>


<!--底部联系方式-->
<div class="bottom_contact wow fadeInUp">
    <ul>
        <li>
            <span>销售门店</span>
            <label>我们将在销售店铺恭候您的光临</label>
            <a href="###" class="to_see_qr">寻找销售店铺</a>
        </li>
        <li>
            <span>联系方式</span>
            <label>我们将尽快给予您答复</label>
            <a href="###" class="to_see_qr">联系我们</a>
        </li>
        <li>
            <span>保养建议与专业服务</span>
            <label>查看我们的专业服务与保养建议</label>
            <a href="###" class="to_see_qr">访问专栏</a>
        </li>
    </ul>
</div>


<!--底部连接-->
<div class="bottom_links wow fadeInUp">
    <ul>
        <li><a href="###" class="to_see_qr">FAQ</a></li>
        <li><a href="###" class="to_see_qr">法律声明</a></li>
        <li><a href="###" class="to_see_qr">私隐政策</a></li>
        <li><a href="###" class="to_see_qr">网站地图</a></li>
        <li><a href="###" class="to_see_qr">工作机会</a></li>
        <li><a href="###" class="to_see_qr">专门店</a></li>
    </ul>
</div>


<!--版权信息-->
<div class="copyright wow fadeInUp">Copyright © BABYBEI.,Ltd. All rights reserved.</div>


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
