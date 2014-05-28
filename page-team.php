<?php 
/*
Template Name: Staff
*/
get_header(); ?>

	<!-- Main blog .container -->
	<div class="container">
	

	
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
		<div class="row margin-top-10">
	<h1><?php the_title(); ?></h1>

					<hr class="hr-sm">
					<?php 
					query_posts('post_type=team');
					while ( have_posts() ) : the_post(); ?>
							
					<!-- ITEM-->
					<div class="col-md-6">
					
							<div class="row text-center">

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12	">
								<h2><?php the_title(); ?></h2>
								<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle'));?>
									
									<?php the_content(); ?>
								</div>

						</div>
					</div>
					<!-- /ITEM-->
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