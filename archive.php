<?php get_header(); ?>

<?php 
$options=load_theme_options();
?>

	<!-- Main blog .container -->
	<div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<ol class="breadcrumb">
			  <li><a href="<?php bloginfo('siteurl'); ?>">Lefkada</a></li>
			  <li class="active"><?php single_cat_title(); ?></li>
			</ol>
		</div>
	
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4><i class="icon-search"></i> Search destinations</h4>
							</div>
							<div class="panel-body">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<p><?php echo term_description(get_cat_ID(single_cat_title()),'areas');?></p>
								</div>
							</div>
						</div>
					</div>


			<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Lefkada appartamenti</h3>
							</div>
						</div>


						<ul class="list-unstyled">
						
					<?php 
						
						$terms = get_terms("areas");
					 if ( !empty( $terms ) && !is_wp_error( $terms ) ){

					     foreach ( $terms as $term ) { ?>
						
									<!-- ITEM-->
										<li><a href="<?php echo get_term_link( $term ); ?>" title=""><?php echo $term->name; ?></a></li>

		<!-- /ITEM-->
		<hr class="hr-sm">
							<!-- /COUNTRY ITEM -->
									 <?php    }

					 }
					?>		
						</ul>		
					<!-- / ITEMS-->
		</div>
	<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 gradient-bg" >
			<!-- ADDS PANEL-->

						<!-- / ADDS PANEL-->

							<div class="row margin-top-10">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3>Appartamenti e ville <?php single_cat_title(); ?> Lefkada</h3>
										</div>
									</div>
								</div>
							</div>
							<hr class="hr-sm">
					<?php while ( have_posts() ) : the_post(); ?>
							
					<!-- ITEM-->
					<div class="panel panel-primary hov-action-border">
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<?php the_post_thumbnail('thumbnail');?>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<h3><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a> <small>Lefkada</small></h3>
									<ul class="list-inline">
										<li><a href="#" title=""><?php echo get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true); ?> persone</a></li>
										<li><a href="#" title="">a partire da &euro; <?php echo get_post_meta( get_the_ID(), 'apartment-rate-1-3', true); ?></a></li>

									</ul>

								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
									<a class="btn btn-link" href="#" title="go" style="margin-top:20px;"><i class="icon-angle-right icon-3x text-info"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /ITEM-->
					<?php endwhile; ?>
		
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<a class="btn btn-warning btn-sm" href="#" title="" style="margin-top:20px;"><i class="icon-angle-left"></i> Back to search results</a>
		</div>
		<!-- Pagination -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<ul class="pagination pull-right">
			  <li class="disabled"><a href="#">Previous</a></li>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">Next</a></li>
			</ul>
		</div>
	  <!-- /Pagination -->
					
					
					
					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<hr>
</div>
<!-- /.container-->

	<hr>
	<?php get_template_part('pre-footer');?>  
	<?php get_footer(); ?>