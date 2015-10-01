		</div> <!-- end .wrapper -->

	</div> <!-- end #container -->

	<footer role="contentinfo" class="footer">

		<div id="inner-footer" class="clearfix">

			<div class="container">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
                <?php endif; ?>

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
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/libs/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery-listnav.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.menu-aim.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/menu.js"></script>
		<script>
            $('.menu-button').click(function(){
                $('.mega-menu').css('display', 'block');
            });
			$('#clinical-resources').listnav({
				filterSelector: '.page-header',
				includeNums: false
			});
		</script>

	</body>
</html>