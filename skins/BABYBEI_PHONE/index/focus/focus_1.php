<?php
//页头轮播小点
		foreach($flash['results'] as $data)
		{
	   ?>
            <img src="<?php echo $data['picpath'];?>" />
            <?php
		}
		?>