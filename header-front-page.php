<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content='Warren "Outte" McCoy Jr'>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--Primary Container-->
		<div id="main-container" class="front-page">
			<!--First Feature-->
			<div id="first-feature">
					<!--Header Nav-->
					<nav class="navbar navbar-default">
						<div class="container">
							<div class="col-md-12">
								<div class="navbar-header">
									<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#nav">
										<span class="sr-only">Toggle Navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
								</div>
								<div class="collapse navbar-collapse navbar-right" id="nav">
									<?php 

									$args = array( 'theme_location' => 'primary',
									'container' => 'ul',
									'menu_class' => 'nav navbar-nav' );

									?>
									<?php wp_nav_menu( $args ); ?>
								</div>
							</div>
						</div>
					<!--/Header Nav-->
					</nav>