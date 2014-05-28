<?php 

get_header(); ?>
	<?php get_template_part('page-carousel'); wp_reset_query(); ?>
	<!-- Main blog .container -->
	<div class="container">
	

	
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
									<div class="row margin-top-10">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									
											<h1 class="page-title"><?php the_title(); ?></h1>
							
							</div>

					<hr class="hr-sm">
					<?php 
					
					while ( have_posts() ) : the_post(); ?>
							
					<!-- ITEM-->
			
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
									<?php the_content(); ?>
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