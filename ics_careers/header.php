<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<!-- Main navbar -->

<nav class="navbar navbar-default navbar-fixed-top sticky_nav">
    <div class="container">
        <div class="navbar-header">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				<img class="logo_full" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="INTECH DYNAMICS logo">
				<img class="logo_top" src="<?php bloginfo('template_url'); ?>/images/logo_top.png" alt="INTECH DYNAMICS logo">
			</a>
        </div>

		<?php if (has_nav_menu('primary')) { ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<?php wp_nav_menu( array('items_wrap' => '%3$s', 'theme_location' => 'primary', 'container' => 'false')); ?>
            </ul>
        </div>
		<?php } ?>
    </div>
</nav>

<div id="wrapper">
