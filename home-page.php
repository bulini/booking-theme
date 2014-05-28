<?php 
/*
Template Name: Home Page Slider
*/
get_header(); ?>
<?php 
$options=load_theme_options();
?>

	<!-- caousel -->
	<?php get_template_part('home-carousel'); wp_reset_query(); ?>

	<!-- Main blog .container -->
	<div class="container">
		<div class="row">
			<!-- Main blocks right side wrapper col  -->
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">			
						<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
												
						<?php get_template_part('home_tabs'); ?>						
						
						<?php the_content(); ?>
			
			</div>
			<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gradient-bg" >
			<!-- / ADDS PANEL-->
			<div class="panel panel-default margin-top-10">
				<div class="panel-heading">
					<h2><?php echo $options['city']; ?></h2>
				</div>
			</div>
							
							
			<?php query_posts('post_type=accommodations&posts_per_page=6'); ?>
			<?php while ( have_posts() ) : the_post(); 
					$maxpax= get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true); ?>
							
							<!-- COUNTRY ITEM-->
							<div class="row margin-top-10 hov-action-border">
								<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail"><?php the_post_thumbnail();?></div>
								</div>
								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
									<h4><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h4>
									
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left:0px;">
										<p class="text-warning"><i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-thumbs-up"></i> </p>
										<small>capienza: <?php echo get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true); ?> <i class="fa fa-user"></i></small>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p class="lead text-right"><small>da</small> <strong>&euro; <?php echo get_post_meta(get_the_ID(), "apartment-rate-1-".$maxpax, true); ?></strong><br /> <small>a notte</small></p>
										</div>
									
									
								</div>
							</div>
							<!-- /COUNTRY ITEM-->
		    <?php endwhile; wp_reset_query(); ?>
						
						<hr />
						
						<p><a class="btn btn-warning btn-sm margin-top-10" href="appartamenti-hotel-studios"><i class="icon-search"></i>Tutti gli alloggi</a></p>

							<hr>


						<div class="row margin-top-10">

					

						
						<!-- COUNTRY ITEM -->
				
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome9.jpg" alt="">
									<div class="caption alt"><p class="lead">Roma</p></div>

								
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
							
							<!-- COUNTRY ITEM -->
							

					
							
							
							
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/amster.jpg" alt="">
									<div class="caption alt"><p class="lead">Amsterdam</p></div>

									
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
					</div>
		
							

					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<hr />
</div>
<!-- /.container-->

<?php get_template_part('pre-footer');?>      
<?php get_footer(); ?>