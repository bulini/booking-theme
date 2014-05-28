      
	<hr>
		<div class="row margin-top-10">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
										<ul class="list-inline text-sm">
											<?php 
												$terms = get_terms("areas");
												if ( !empty( $terms ) && !is_wp_error( $terms ) ){
													foreach ( $terms as $term ) { ?>
											<li><a href="<?php echo get_term_link( $term ); ?>" title="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
											<?php  } 
											} ?>	
										</ul>
			</div>
		</div>
	<hr>


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a class="btn btn-sm btn-default" href="#">Back to top</a></p>
        <p>&copy; 2014 <?php bloginfo('siteurl'); ?><a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
    -->
    
    	<!-- FLEXSLIDER INIT SCRIPT-->

  	<!-- gMap PLUGIN -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

	
  <!-- INIT SCRIPT - show gMap onclick -->

    
    <?php wp_footer(); ?>
    
  </body>
</html>
