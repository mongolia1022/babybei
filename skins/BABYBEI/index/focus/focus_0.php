<?php
//页头轮播
		foreach($flash['results'] as $data)
		{
		 ?>
    <div class="swiper-slide"><a href="<?php echo $data['url'];?>"><img src="<?php echo $data['picpath'];?>" /></a></div>
		  <?php 
		}
		?>