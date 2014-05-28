
	<div id="carousel_fade" class="carousel slide">
	
	      <div class="carousel-inner">
			 <?php
				  $attachments=OneGallery($post->ID);
				  foreach ($attachments as $attachment) { $img=wp_get_attachment_image_src($attachment->ID, 'large', false); 
					  if($i==0) { $css=" active"; } else { $css=""; }
				  ?>
				  
				  	<div class="item  <?php echo $css; ?>">
					  	<img src="<?php echo $img[0]; ?>" />
					 </div>
	        
			<?php $i++; } ?> 
	
	      </div>
	      <a class="left carousel-control" href="#carousel_fade" data-slide="prev"><span class="icon-prev"></span></a>
	      <a class="right carousel-control" href="#carousel_fade" data-slide="next"><span class="icon-next"></span></a>
	</div>	

			
