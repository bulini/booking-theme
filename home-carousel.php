

    <div id="carousel_fade" class="carousel slide">

      <div class="carousel-inner">
        <?php 
        $i=0;

        query_posts( array ( 'post_type' => 'accommodations', 'posts_per_page' => -1, 'taxonomy' => 'stars','term' => '5') ); ?>
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	        	if($i==0) { $css=" active"; } else { $css=""; }
        	?>      
      
        <div class="item  <?php echo $css; ?>">
          <?php the_post_thumbnail('slider-crop'); ?>
          <div class="carousel-caption">
          	<div class="caption_carousel">
	            <h2><?php the_title(); ?></h2>
	            <?php $max_pax=get_post_meta($post->ID,'bookandpay_maxpeople',true); ?>
				<p class="lead">Alloggi da <?php echo $max_pax; ?> <i class="fa fa-user"></i><br />a partire da  <?php echo get_post_meta($post->ID, "apartment-rate-1-".$max_pax, true); ?>&euro; al giorno.</p>

				<p><a href="<?php the_permalink(); ?>" class="btn-primary btn-lg">Prenota subito</a></p>
          	</div>
          </div>
        </div>
        
		<?php $i++;
         endwhile; else: ?>
			<li><?php _e('Sorry, no posts matched your criteria.'); ?></li>
		<?php endif; ?>

      </div>
      <a class="left carousel-control" href="#carousel_fade" data-slide="prev"><span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#carousel_fade" data-slide="next"><span class="icon-next"></span></a>
    </div>			
<!-- end carousel -->
