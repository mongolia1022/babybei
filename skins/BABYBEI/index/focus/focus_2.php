<?php
/*底部二维码*/
		foreach($flash['results'] as $data)
		{
	   ?>
            <div class="wx_qr"><img src="<?php echo $data['picpath'];?>" width="100%" /></div>
		  <?php
		}
		?>