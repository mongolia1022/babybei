<?php
//页头轮播
		foreach($flash['results'] as $data)
		{
		 ?>
            <div class="swiper-slide"><a href="<?php echo $data['url'];?>" class="to_see_qr"><img src="<?php echo $data['picpath'];?>" width="100%" /></a></div>
		  <?php
		}
		?>