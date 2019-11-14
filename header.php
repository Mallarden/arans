<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<!-- header -->
		<header class="container clear" role="banner">
			<div class="d-flex">
				<!-- logo -->
				<div class="col">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/AransLogo_clean_brun-1024x350.png"
								type='image/png' class="" />
						</a>
						<!-- /logo -->
					</div>
				</div>
				<div class="col">
					<!-- nav -->
					<nav class="nav header-menu fatface" role="navigation">
						<?php wp_nav_menu(); ?>
					</nav>
					<!-- /nav -->
				</div>
			</div>
		</header>
		<!-- /header -->
		<hr class="header-hr"/>