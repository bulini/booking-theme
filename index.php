<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
  <div id="carousel_fade" class="carousel slide carousel-fade">
     

      <div class="carousel-inner">
      <?php $i=0; 
      query_posts('post_type=accommodations&posts_per_page=3'); ?>
	  <?php while ( have_posts() ) : the_post(); 		  
		 if($i==0) { $css=" active"; } else { $css=""; }
	  ?>
      
        <div class="item <?php echo $css; ?>">
         <?php the_post_thumbnail('slider-crop'); ?>
          <div class="container hidden-xs">
           <div class="carousel-caption">
						<div class="row">
							<div class="col-md-12 col-md-12 col-lg-12 ">
								<h2><?php the_title(); ?></h2>
									<p class="hidden-sm"><?php the_excerpt(); ?></p>
									<p><a class="btn btn-large btn-warning" href="#">Prenota</a></p>
							</div>
						</div>
				</div>
          </div>
        </div>
        
        <?php $i++; endwhile; wp_reset_query(); ?>
        
       
      </div>
      <a class="left carousel-control" href="#carousel_fade" data-slide="prev"><span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#carousel_fade" data-slide="next"><span class="icon-next"></span></a>
    </div>
	<!-- /.carousel -->
	<!-- Main blog .container -->
	<div class="container">
		<div class="row">
	<!-- Main blocks right side wrapper col  -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

						<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Lefkada</h3>
							</div>
						</div>

					<?php 
						
						$terms = get_terms("areas");
					 if ( !empty( $terms ) && !is_wp_error( $terms ) ){

					     foreach ( $terms as $term ) { ?>

					        
				
					
					<!-- ITEM-->
					<div class="row hov-action-border ">

						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
							<h3><a href="<?php echo get_term_link( $term ); ?>" title=""><?php echo $term->name; ?></a> <small>Appartamenti</small></h3>
							<ul class="list-inline">
								<li><a href="#" title="">200 hotels</a></li>
								<li><a href="#" title="">230 guesthouses</a></li>
								<li><a href="#" title="">200 apartments</a></li>
								<li><a href="#" title="">200 hostels</a></li>
							</ul>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
							<a class="btn btn-link" href="#" title="go" style="margin-top:20px;"><i class="icon-angle-right icon-3x text-info"></i></a>
						</div>
					</div>
					<!-- /ITEM-->
					<hr class="hr-sm">
				 <?php    }

					 }
					?>	
					
					<!-- / ITEMS-->
					
					
					
						<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Prenota con noi</h3>
							</div>
						</div>
						<div class="row margin-top-10">
						
						<!-- COUNTRY ITEM -->
				
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome9.jpg" alt="">
									<div class="caption alt"><p class="lead">Roma</p></div>
									<div class="caption">

										<p>
											<a class="btn btn-default btn-sm btn-block" href="#" title=""><i class="icon-building"></i> 350 guesthouses</a>
										</p>
									</div>
								
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
							
							<!-- COUNTRY ITEM -->
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/paris.jpg" alt="">
									<div class="caption alt"><p class="lead">Amsterdam</p></div>
									<div class="caption">
	
										<p>
											<a class="btn btn-default btn-sm btn-block" href="#" title=""><i class="icon-building"></i> 390 guesthouses</a>
										</p>
									</div>
									
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
					</div>
					
					
		</div>
	<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gradient-bg" >
			<!-- ADDS PANEL-->

						<!-- / ADDS PANEL-->
						
							<div class="panel panel-primary margin-top-10">
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
											<i class="icon-search icon-3x text-info"></i>
										</div>
										
										<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
											<p class="lead">Ville Studios, bilocali trilocali e sistemazioni su ogni genere. I proprietari sono nostri amici!
											</p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<p><a class="btn btn-warning btn-sm margin-top-10" href="#"><i class="icon-search"></i> Search now</a></p>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="row margin-top-10">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3>Mappa di Lefkada</h3>
										</div>
										<iframe src="http://maps.google.com/maps/ms?msa=0&amp;msid=213746428413981142916.0004bb48c0c77f4709d4f&amp;ie=UTF8&amp;t=m&amp;ll=38.719724,20.67009&amp;spn=0.214293,0.115357&amp;output=embed" width="551" height="500" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
<small>View <a style="color: #0000ff; text-align: left;" href="http://maps.google.com/maps/ms?msa=0&amp;msid=213746428413981142916.0004bb48c0c77f4709d4f&amp;ie=UTF8&amp;t=m&amp;ll=38.719724,20.67009&amp;spn=0.214293,0.115357&amp;source=embed">Appartamenti Lefkada</a> in a larger map</small>
										
											<!--
											<div class="thumbnail">
												<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome9.jpg" alt="">
													<div class="caption alt">
														<p class="lead">ROME</p>
														<p>200 guesthouses</p>
													</div>
											</div>
											-->
									</div>
								</div>
							</div>
							<hr class="hr-sm">
						<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Appartamenti e ville</h3>
							</div>
						</div>
							
							
							<?php query_posts('post_type=accommodations&posts_per_page=8'); ?>
							<?php while ( have_posts() ) : the_post(); 
								
							?>
							
							<!-- COUNTRY ITEM-->
							<div class="row margin-top-10">
								<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail"><?php the_post_thumbnail();?></div>
								</div>
								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
									<h4><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h4>
									
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left:0px;">
										<p class="text-warning"><i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-thumbs-up"></i> </p>
										<p><?php echo get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true); ?></p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p class="lead text-info text-right"><small>da</small> <strong>&euro; 100.00</strong></p>
										</div>
									
									
								</div>
							</div>
							<!-- /COUNTRY ITEM-->
							<?php endwhile; ?>
							

					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

</div>
<!-- /.container-->


<?php get_template_part('pre-footer');?>        
<?php get_footer(); ?>