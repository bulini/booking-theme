<?php 
$options=load_theme_options();
?>
<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#mappa" data-toggle="tab">Cerca sulla mappa</a></li>
	<li><a href="#zone" data-toggle="tab">Paesini Lefkada</a></li>
</ul>

  <div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="mappa">
		<div class="container white">


				<h3>Mappa di <?php echo $options['city']; ?></h3>

			<iframe src="http://maps.google.com/maps/ms?msa=0&amp;msid=213746428413981142916.0004bb48c0c77f4709d4f&amp;ie=UTF8&amp;t=m&amp;ll=38.719724,20.67009&amp;spn=0.214293,0.115357&amp;output=embed" width="500" height="500" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
<small>View <a style="color: #0000ff; text-align: left;" href="http://maps.google.com/maps/ms?msa=0&amp;msid=213746428413981142916.0004bb48c0c77f4709d4f&amp;ie=UTF8&amp;t=m&amp;ll=38.719724,20.67009&amp;spn=0.214293,0.115357&amp;source=embed">Appartamenti Lefkada</a> in a larger map</small>


																
		</div>
	</div>
	 
	<div class="tab-pane fade" id="zone">
		<div class="container white">
		<h3>Le zone</h3>
		<?php $terms = get_terms("areas");
		 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
		 		foreach ( $terms as $term ) { ?>
		
		<!-- ITEM-->
		<div class="row hov-action-border ">
	
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<h3><a href="<?php echo get_term_link( $term ); ?>" title=""><?php echo $term->name; ?></a> <small>Appartamenti</small></h3>
				<p><?php echo term_description($term->term_id,'areas');?></p>
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
		</div>
	</div>

  </div>