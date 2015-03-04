<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/library/css/listnav.css">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">

			
				
			<div class="navbar navbar-default navbar-static-top">
			<div class="container">

				<div class="navbar-header">
					<div class="navbar-brand">
						<a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Winthrop University Hospital"/>
						</a>
					</div>

					<div class="navbar-form">
						<?php //if(of_get_option('search_bar', '1')) {?>
							<form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							  <div class="form-group">
							    <div class="input-group">
							      <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search the Intranet ... ','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
									<div class="input-group-addon"><i class="fa fa-search"></i></div>
							    </div>
							  </div>
							</form>
						<?php //} ?>
					</div>

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div>

				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
				</div>

			</div> <!-- end .navbar -->


			
		
		</header> <!-- end header -->
		
		<div class="container">
			<div class="wrapper">
