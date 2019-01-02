<!-- 产品列表页 -->
<!-- Swiper -->

<!-- Swiper -->
<div class="swiper-container swiper1">

    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:#ece7e3;">

            <div class="pro_title wow flipInX">
                <?php doc_focus('2',1,1,0,0,true,'id',intval(sys_menu_info('ordering')))?>
            </div>
            <?php doc_focus('4',1,1,0,0,true,'id',intval($data['ordering']))?>
        </div>
    </div>
    <!-- Add Pagination
    <div class="swiper-pagination swiper-pagination1"></div>
     -->
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
        spaceBetween: 30,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>

<div class="class_details wow fadeInUp"><?php echo $tag['seo.description']; ?></div>

<!--产品列表-->
<div class="idx_pro">
    <ul class="clear">
        <?php foreach($tag['data.results'] as $k =>$data)
        {?>
            <li class="wow fadeInUp">
                <img src="<?php echo ispic($data['smallPic']); ?>" />
                <div class="pro_hover to_see_qr">
                    <div class="pro_hover_in">
                        <span>MORE</span>
                        <em></em>
                        <label>查看详情</label>
                    </div>
                </div>
            </li>
            <?php
        }?>
    </ul>
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
