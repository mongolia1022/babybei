<?php
//页头轮播
		foreach($flash['results'] as $data)
		{
		 ?>
    <div class="swiper-slide"><img src="<?php echo $data['picpath'];?>" /></div>
		  <?php 
		}
		?>