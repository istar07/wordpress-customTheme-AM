					<?php if(is_front_page()) {
						get_header('front-page');
					}
					else 
					{
						get_header();
					}?>
					<!--Jumbotron Feature-->
					
						<div class="jumbotron-feature ">
							<div class="jumbotron-background-image">
								<img class="img-responsive" src="<?php bloginfo('template_url')?>/images/tonyFO5682AA10214hs_d1450.jpg">
							</div>
						</div>
					<!--/Jumbotron Feature-->

			<!--/First Feature-->
			</div>
			<div class="container-fluid">
			<!--Second Feature-->
			<section id="second-feature">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6">
								<img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Baltimore_Inner_Harbor_from_Federal_Hill.jpg/640px-Baltimore_Inner_Harbor_from_Federal_Hill.jpg" alt="Baltimore Inner Harbor from Federal Hill">
							<small>Image by Kathleen Conklin via <a href="https://www.flickr.com/photos/79865753@N00/3181331268/">flickr.com</a> (Creative Commons 2.0 Generic)</small>
						</div>
						<div class="col-sm-6 col-md-6">
							<h2>AppsByMax is a Maryland based software development, and training company.</h2>
							<p>We pride ourselves on our diverse portfolio, including projects in the commercial, education, and e-commerce sectors.</p>
							<a href="<?php echo  esc_url(get_permalink( get_page_by_title( 'About Us' ) ) );?>">Learn More »</a>
						</div>
					</div>
				</div>
			<!--/Second Feature-->
			</section>
			<!--Third Feature-->
			<section id="third-feature">
				<div class="container">
					<div class="col-md-12">
						<h3 class="text-center">Services</h3>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="text-block">
								<i id="icon-1" class="fab fa-apple"></i>
								<h4>iOS App Development</h4>
								<p>We specialize in iOS apps.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="text-block">
								<i id="icon-2" class="fab fa-android"></i>
								<h4>Android App Development</h4>
								<p>We also make apps for Android.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="text-block">
								<i id="icon-3" class="fas fa-shopping-bag"></i>
								<h4>E-Commerce Development</h4>
								<p>We can help you build the E-Commerce shop of your dreams.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="text-block">
								<i id="icon-4" class="fas fa-laptop"></i>
								<h4>Software Training</h4>
								<p>We offer training services to teams.</p>
							</div>
						</div>
					</div>
				</div>
			<!--/Third Feature-->
			</section>
			<!--Fourth Feature-->
			<section id="fourth-feature" class="text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-8-offset-4">
							<div class="fourth-feature-content">
								<h2 class="">We would love to be of service to you. Fill out our contact form so we can understand your needs.</h2>
								<a href="<?php echo  esc_url(get_permalink( get_page_by_title( 'Contact Us' ) ) );?>" id="fourth-feature-btn" class="btn btn-primary">Contact Us</a>
								<p>Or you can just send us an <a id="email" href="#">email.</a></p>
							</div>
						</div>
					</div>
				</div>
			<!--/Fourth Feature-->
			</section>
		</div>
			<?php if(is_front_page()) {
				get_footer('front-page');
			}
			else 
			{
				get_footer();
			}?>