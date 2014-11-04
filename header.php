<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

		<!-- Unterstützung für Media Queries und HTML5-Elemente im Internet Explorer über HTML5 shim und Respond.js -->
		<!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h1><a href="/">blog.nerdpol.io</a></h1>
					</div>
					<div class="col-md-5">
						<?php wp_nav_menu(array('theme_location' => 'header-nav', 'container_class' => 'clearfix')) ?>
					</div>
				</div>
			</div>
		</header>
		<div id="subheader">
			<div class="container">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="container">
