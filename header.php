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
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
				
        <div class="navbar navbar-fixed-top">
			<div class="container">

                <div class="col-sm-3">
                    <div class="navbar-header">
                        <a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
                            <img src="<?php bloginfo('template_directory'); ?>/library/img/logo.png" alt="Winthrop University Hospital" class="logo"/>
                        </a>
                    </div>
                </div>

				<div class="col-md-3 col-sm-9">
                    <div class="menu-button">
                        <button class="btn btn-menu dropdown-toggle" type="button" id="mainMenu" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-chevron-down"></i></button>
                    </div>
                </div>

                <div class="col-sm-6">
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
                </div>
			</div>

            <div class="mega-menu" style="display: none">
                <div class="navbar-form mobile">
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
                <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
            </div>

        </div> <!-- end .navbar -->

		</header> <!-- end header -->
		
		<div class="container">
			<div class="wrapper">
