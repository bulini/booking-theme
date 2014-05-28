<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
  <div id="carousel_fade" class="carousel slide carousel-fade">
     
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img  src="<?php bloginfo('template_url'); ?>/images/6.jpg" alt="First slide">
          <div class="container hidden-xs">
           <div class="carousel-caption">
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-sm-offset-7 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
								<h1>Allhome is back</h1>
									<p class="hidden-sm">The new booking marketplace blog</p>
									<p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
							</div>
						</div>
				</div>
          </div>
        </div>
        <div class="item">
          <img  src="<?php bloginfo('template_url'); ?>/images/trip.jpg"  alt="Second slide">
          <div class="container hidden-xs">
				<div class="carousel-caption ">
						<div class="row">
							<div class="col-xs-12 col-sm-5 col-sm-offset-7 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
								<h1>Another example headline.</h1>
									<p class="hidden-sm">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
							</div>
						</div>
				</div>
				
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel_fade" data-slide="prev"><span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#carousel_fade" data-slide="next"><span class="icon-next"></span></a>
	  <div class="frm-wrapper">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h4><i class="icon-search"></i> Search guesthouses</h4>
							</div>
							<div class="panel-body">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<form class="" role="form">
										<fieldset>
										<div class="form-group">
										  <label for="CountrySelect">Country</label>
										  <select class="form-control " name="CountrySelect">
													<option value="" selected="selected"> - Select Country - </option>
													<option value="244">Aaland Islands</option>
													<option value="1">Afghanistan</option>
													<option value="2">Albania</option>
													<option value="3">Algeria</option>
													<option value="4">American Samoa</option>
													<option value="5">Andorra</option>
													<option value="6">Angola</option>
													<option value="7">Anguilla</option>
													<option value="8">Antarctica</option>
													<option value="9">Antigua and Barbuda</option>
													<option value="10">Argentina</option>
													<option value="11">Armenia</option>
													<option value="12">Aruba</option>
													<option value="13">Australia</option>
													<option value="14">Austria</option>
													<option value="15">Azerbaijan</option>
											
												</select>
										</div>
										<div class="form-group">
									  <label for="RegionSelect">Region/State</label>
									  <select class="form-control" name="RegionSelect">
												<option value="" selected="selected"> - Select Region/State - </option>
												<option value="244">Aaland Islands</option>
												<option value="1">Afghanistan</option>
												<option value="2">Albania</option>
												<option value="3">Algeria</option>
												<option value="4">American Samoa</option>
												<option value="5">Andorra</option>
												<option value="6">Angola</option>
												<option value="7">Anguilla</option>
												<option value="8">Antarctica</option>
												<option value="9">Antigua and Barbuda</option>
												<option value="10">Argentina</option>
												<option value="11">Armenia</option>
												<option value="12">Aruba</option>
												<option value="13">Australia</option>
												<option value="14">Austria</option>
												<option value="15">Azerbaijan</option>
												
											</select>
									</div>
									  
									  <button type="submit" class="btn btn-lg pull-right btn-info">SEARCH</button>
									  </fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
				</div>
    </div>
	<!-- /.carousel -->
	<!-- Main blog .container -->
	<div class="container">
		<div class="row">
	<!-- Main blocks right side wrapper col  -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="panel panel-default margin-top-10">
							<div class="panel-heading">
								<h3>Featured guesthouse destinations</h3>
							</div>
						</div>
						<div class="row margin-top-10">
						<!-- COUNTRY ITEM -->
				
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome9.jpg" alt="">
									<div class="caption alt"><p class="lead">Rome</p></div>
									<div class="caption">
										<h4><a href="#" title="">Rome</a></h4>
										<p>Italy</p>
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
									<div class="caption alt"><p class="lead">Paris</p></div>
									<div class="caption">
										<h4><a href="#" title="">Paris</a></h4>
										<p>France</p>
										<p>
											<a class="btn btn-default btn-sm btn-block" href="#" title=""><i class="icon-building"></i> 390 guesthouses</a>
										</p>
									</div>
									
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
					</div>
					<div class="row margin-top-10">
						<!-- COUNTRY ITEM -->
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/6.jpg" alt="">
									<div class="caption alt"><p class="lead">Sydney</p></div>
									<div class="caption">
										<h4><a href="#" title="">Sydney</a></h4>
										<p>Australia</p>
										<p>
											<a class="btn btn-default btn-sm btn-block" href="#" title=""><i class="icon-building"></i> 390 guesthouses</a>
										</p>
									</div>
									
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
							
							<!-- COUNTRY ITEM -->
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="thumbnail">
									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/6.jpg" alt="">
									<div class="caption alt"><p class="lead">Sydney</p></div>
									<div class="caption">
										<h4><a href="#" title="">Sydney</a></h4>
										<p>Australia</p>
										<p>
											<a class="btn btn-default btn-sm btn-block" href="#" title=""><i class="icon-building"></i> 390 guesthouses</a>
										</p>
									</div>
									
								</div>
								
							</div>
							<!-- /COUNTRY ITEM -->
					</div>
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/london.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="#" title="">London</a> <small>United Kingdom</small></h3>
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
					
					
					
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/london.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="#" title="">London</a> <small>United Kingdom</small></h3>
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
					
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/london.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="#" title="">London</a> <small>United Kingdom</small></h3>
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
					
					<!-- ITEM-->
					<div class="row hov-action-border ">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<img class="img-responsive img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/london.jpg" style="margin-top:20px;" alt="">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h3><a href="#" title="">London</a> <small>United Kingdom</small></h3>
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
					
					
					<!-- / ITEMS-->
		</div>
	<!-- /Main blocks left side -->
	
	<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gradient-bg" >
			<!-- ADDS PANEL-->
							<div class="panel panel-primary margin-top-10">
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
											<i class="icon-comments icon-3x text-info"></i>
										</div>
										<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
											<p class="lead">Read More than 1000'000 reviews from real customers online! </p>
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<p><a class="btn btn-warning btn-sm margin-top-10" href="#" title=""><i class="icon-comments"></i> Read reviews</a></p>
										</div>
									</div>
								</div>
							</div>
						<!-- / ADDS PANEL-->
						
							<div class="panel panel-primary margin-top-10">
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
											<i class="icon-search icon-3x text-info"></i>
										</div>
										
										<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
											<p class="lead"> Search more than 300'000 hotels online! 
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
											<h3>Top destinations </h3>
										</div>
											<div class="thumbnail">
												<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome9.jpg" alt="">
													<div class="caption alt">
														<p class="lead">ROME</p>
														<p>200 guesthouses</p>
													</div>
											</div>
									</div>
								</div>
							</div>
							<hr class="hr-sm">
							
							<!-- COUNTRY ITEM-->
							<div class="row margin-top-10">
								<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome11.jpg" alt=""></div>
								</div>
								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
									<h4><a href="#" title="">Title Hotel and apartment</a></h4>
									
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left:0px;">
										<p class="text-warning"><i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-thumbs-up"></i> </p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p class="lead text-info text-right"><small>from:</small> <strong>$100.00</strong></p>
										</div>
									
									<p>Hotel description paragraph. Hotel description paragraph. Hotel description paragraph. Hotel description paragraph.</p>
								</div>
							</div>
							<!-- /COUNTRY ITEM-->
							
							<!-- COUNTRY ITEM-->
							<div class="row margin-top-10">
								<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome11.jpg" alt=""></div>
								</div>
								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
									<h4><a href="#" title="">Title Hotel and apartment</a></h4>
									
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left:0px;">
										<p class="text-warning"><i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-thumbs-up"></i> </p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p class="lead text-info text-right"><small>from:</small> <strong>$100.00</strong></p>
										</div>
									
									<p>Hotel description paragraph. Hotel description paragraph. Hotel description paragraph. Hotel description paragraph.</p>
								</div>
							</div>
							<!-- /COUNTRY ITEM-->
							
							<!-- COUNTRY ITEM-->
							<div class="row margin-top-10">
								<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/rome11.jpg" alt=""></div>
								</div>
								<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8">
									<h4><a href="#" title="">Title Hotel and apartment</a></h4>
									
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left:0px;">
										<p class="text-warning"><i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-thumbs-up"></i> </p>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
											<p class="lead text-info text-right"><small>from:</small> <strong>$100.00</strong></p>
										</div>
									
									<p>Hotel description paragraph. Hotel description paragraph. Hotel description paragraph. Hotel description paragraph.</p>
								</div>
							</div>
							<!-- /COUNTRY ITEM-->
					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<hr>
</div>
<!-- /.container-->


<div class="container">
	
		<div class="panel panel-info">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center">
						<p class="lead ">
							<i class="icon-gift text-info"></i> Subscribe to newsletter and get special offers to you email every week!
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center">
						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
							</div>
							  <button type="submit" class="btn btn-info">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	<hr>
      <!-- Three columns of text below the carousel -->
      <div class="row">

         <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="icon-building icon-4x text-info"></i>
					  <h4>Hotels</h4>
					  <p>Search more than 300'000 hotels around the World</p>
					  <p><a class="btn btn-info" href="#">All hotels  &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="icon-group icon-4x text-info"></i>
					  <h4>Hostels</h4>
					  <p>Search more than 300'000 hostels around the World</p>
					  <p><a class="btn btn-info" href="#">All hotels  &raquo;</a></p>
				</div>
			</div>
		</div><!-- /.col-lg-3 -->
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="icon-ticket icon-4x text-info"></i>
					  <h4>Tickets</h4>
					  <p>Search more than 300'000 hostels around the World</p>
					  <p><a class="btn btn-info" href="#">Buy tickets  &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
		
		
		
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
			<div class="panel panel-default">
				<div class="panel-body">
					 <i class="icon-sun icon-4x text-info"></i>
					  <h4>Resorts</h4>
					  <p>Search more than 300'000 resorts around the World</p>
					  <p><a class="btn btn-info" href="#">All resorts  &raquo;</a></p>
				</div>
			</div>
        </div><!-- /.col-lg-3 -->
       
	
		
      </div><!-- /.row -->
      
<?php get_footer(); ?>