<?php get_header(); ?>
	<!-- Main row .container -->
	<div class="container">
	
	<!-- breadcrumbs-->	
	<div class="row">
		<div class="col-xs-9 col-sm-9 col-md9 col-lg-9">
			<ol class="breadcrumb">
			  <li><a href="<?php bloginfo('siteurl'); ?>">Lefkada</a></li>
			  <li><?php the_terms( get_the_ID(), 'areas'); ?></li>
			  <li class="active"><?php the_title(); ?></li>
			</ol>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
			<a class="btn btn-lg btn-block btn-warning" data-toggle="modal" data-target="#myModal">Richiedi informazioni</a>
			
			<a  class="btn btn-info btn-block btn-lg toggler" href="#" style="margin:30px 0px 10px 0px;"> <i class="icon-map-marker"></i> Show map </a> <a  class="btn btn-info btn-lg btn-block toggler-hide" href="#" style="margin:30px 0px 10px 0px;"><i class="icon-map-marker"></i> Hide map </a>
			
		</div>
	
	</div>
	<!-- /breadcrumbs-->	

	<div class="row">
		<!-- Left side wrapper col  -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<a class="" href="http://www.appartamenti-lefkada.com/appartamenti-hotel-studios/"><i class="icon-angle-left"></i> <strong>Tutti gli alloggi</strong></a>
		<hr class="hr-sm">
			<div class="panel">
				<div class="panel-heading">
					<h4>I tuoi dati</h4>
				</div>
				<div class="panel-body">
	
					<ul class="list-unstyled">
						<li><a href="#" title="">Lefkada <small>(<?php echo $_COOKIE['bookandpay_checkin']; ?> - <?php echo $_COOKIE['bookandpay_checkout']; ?>)</small></a><li>
						<li>persone: <?php echo $_COOKIE['bookandpay_people']; ?></li>
						<li><?php echo $_COOKIE['bookandpay_contactname']; ?> <?php echo $_COOKIE['bookandpay_contactsurname']; ?></li>
						<li>email: <?php echo $_COOKIE['bookandpay_email']; ?></li>
					</ul>
				</div>
				<div class="panel-footer">
					<a class="btn btn-block btn-sm btn-info" data-toggle="modal" data-target="#myModal">Richiedi info</a>
				</div>
			</div>

				<div class="panel panel-primary">
				
					<div class="panel-body">
									
					<h4>Altre ville</h4>
					<hr class="hr-sm">
					<?php query_posts('post_type=accommodations'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<!-- RELATED ITEM -->
					<div class="alert" style="position:relative">	
						<a class="close" data-dismiss="alert" href="#" aria-hidden="true" style="position:absolute; top:0px; right:0px;">&times;</a>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="thumbnail"><?php the_post_thumbnail();?></div>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
							</div>
						</div>
					</div>
					<!-- RELATED ITEM -->

					<?php endwhile; wp_reset_query(); ?>
					
					</div>
				</div>
			</div><!-- / left side -->

		<?php while ( have_posts() ) : the_post(); ?>
	
		<!-- Right side wrapper col-->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" >
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" >
					<h2><?php the_title(); ?></h2>
					<small><?php the_category(',');?></small>
					<?php $max_pax=get_post_meta($post->ID,'bookandpay_maxpeople',true); ?>
					Alloggi <?php the_terms( get_the_ID(), 'types'); ?> da <?php echo $max_pax; ?> <i class="fa fa-user"></i> - <i class="fa fa-map-marker"></i> Lefkada: <?php the_terms( get_the_ID(), 'areas'); ?> 
				</div>
				
				<!--
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
					<a  class="btn btn-info btn-block btn-lg toggler" href="#" style="margin:30px 0px 10px 0px;"> <i class="icon-map-marker"></i> Show map </a> <a  class="btn btn-info btn-lg btn-block toggler-hide" href="#" style="margin:30px 0px 10px 0px;"><i class="icon-map-marker"></i> Hide map </a>
					
					
				</div>
				-->
				
			</div>
			
				<hr class="hr-sm">
			
				<div class="block-wrapper">
				<!-- SLIDER -->
		
					 <div class="flexslider">
					  <ul class="slides">
					  		<?php
					  		$attachments=OneGallery($post->ID);
					  		
					  		foreach ($attachments as $attachment) { $img=wp_get_attachment_image_src($attachment->ID, 'slider-home', false); ?>
					  			<li data-thumb="<?php echo $img[0]; ?>"><img src="<?php echo $img[0]; ?>"></li>
					  		<?php } ?>
					  </ul>
					</div>
	
				<!-- /SLIDER -->
		
				
					
				<!-- GMAP-->
					
				<div id="map" class="gmappanel hide-map" data-address="<?php echo get_post_meta($post->ID,'address',true); ?>"></div>

			</div>
			
			
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
						
						
						
						<hr>
						
						<!-- DESCRIPTION TABS-->
						<ul id="myTab" class="nav nav-tabs">
							<li class="active"><a href="#home" data-toggle="tab">Descrizione generale</a></li>
							<li><a href="#profile" data-toggle="tab">Prezzi stagionali</a></li>
							
						  </ul>
						  
						  <div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="home">
								<div class="container white">
									<?php the_content(); ?>																
								</div>
								</div>
							 
							<div class="tab-pane fade" id="profile">
								<div class="container white">
									<?php echo prices_table($post->ID); ?>
								</div>
							</div>

						  </div>
						<!-- / DESCRIPTION TABS-->
						<hr />
					</div>
				</div>
		</div>
		<!-- /Right side wrapper col-->
		
		<?php endwhile; ?>
	</div>
	<!-- / .row -->
</div>
<!-- /.container-->


					<!-- Modal -->
				<div class="modal fade modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Richiedi un preventivo</h4>
				      </div>
				      <div class="modal-body">
				        
						<!-- instant booking o no -->
				 		<?php 
				 		$instant_booking=get_post_meta($post->ID,'bookandpay_instant_booking',true);
				 		if($instant_booking=='on'): ?>
				  		<h3><?php _e("<!--:it-->Booking immediato<!--:--><!--:en-->Instant booking<!--:-->"); ?></h3>
						<?php else : ?>
				
				 		<p><?php _e("<!--:it-->Compilate il seguente modulo per richiedere informazioni<!--:--><!--:en-->Please submit this module to ask availability. We will contact you as soon as possible.<!--:-->"); ?>. In alternativa o se avete delle domande inviate una mail a <a href="mailto:booking@appartamenti-lefkada.com">booking@appartamenti-lefkada.com</a>
				 		<?php endif ?></p> <hr />
				 		<?php BookingBsForm($post->ID,'it'); ?>
				 			
				 
				 		
				 		<?php dynamic_sidebar('right_1'); ?>  

				        <div id="booking_response">
				        	<div id="wheel" style="display:none;">Un momento di pazienza</div>
				        </div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
				      </div>
				    </div>
				  </div>
				</div>
			
			<!-- end modal -->
			



<?php get_template_part('pre-footer');?>
<?php get_footer(); ?>