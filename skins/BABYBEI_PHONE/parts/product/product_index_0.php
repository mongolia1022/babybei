<!-- 产品列表页 -->
<!--内页banner-->
<div class="in_banner"><img src="<?php echo $tag['path.skin']; ?>images/banner_pro.jpg" /></div>


<!--简介-->
<div class="wow fadeInUp">
    <div class="brand_font mgt_1rem">
        自古以来，人们从来没有停止过对美的追求。 <br />
        生活缺少了美，就如宝石失去了璀璨火彩。<br />
        可以说，衣食住行，解决的是人们在物质上的刚性需求，<br/>
        而对美的创造，则是精神上的刚性需求。<br/>
    </div>
</div>



<!--产品系列-->
<div class="wow fadeInUp">
    <?php foreach($tag['data.results'] as $k =>$data)
    {?>
        <div class="idx_pro"><a href="###" class="to_see_qr"><img src="<?php echo ispic($data['smallPic']); ?>" /></a></div>
        <?php
    }?>
</div>