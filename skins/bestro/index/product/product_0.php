<?php 
//首页产品列表
?>
<li>
    <img src="<?php echo $data['smallPic'];?>" width="236" height="156">
    <div class="clear"></div>
    <div class="pro_name">
        <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a>
    </div>
</li>
