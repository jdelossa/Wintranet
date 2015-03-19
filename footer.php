		</div> <!-- end .wrapper -->
		
	</div> <!-- end #container -->

	<footer role="contentinfo" class="footer">
	
		<div id="inner-footer" class="clearfix">

			<div class="container">

		       <!--    <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div> -->
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"><a href="#">Contact IT Support</a><a href="#">Suggestions</a></p>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->

			</div>
		
	</footer> <!-- end footer -->

		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery-listnav.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/tooltip.js"></script>
		<script>
			$(document).ready(function() {
				$('#clinical-resources').listnav({
					filterSelector: '.page-header',
					includeNums: false 
				});
			});

			$(document).ready(function() {
			    $('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
			});

		   $(document).ready(function(){
			   $(window).bind('scroll', function() {
			   var navHeight = $( '.navbar-static-top' ).height();
					 if ($(window).scrollTop() > navHeight - 50) {
						 $('.navbar-collapse').addClass('fixed');
					 }
					 else {
						 $('.navbar-collapse').removeClass('fixed');
					 }
				});
			});

		   // $('.carousel').carousel()

		</script>
	</body>
</html>