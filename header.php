<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content='Warren "Outte" McCoy Jr'>
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--Primary Container-->
		<div id="main-container">
			<!--Header Nav-->
			<div id="header-nav">
				<nav class="navbar navbar-inverse">
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
								<ul class="nav navbar-nav">
									<li>
										<a href="#">About Us</a>
									</li>
									<li>
										<a href="blog.html">Tutorials</a>
									</li>
									<li>
										<a href="product.html">Products</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
				<!--/Header Nav-->
			</div>