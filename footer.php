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
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.menu-aim.js"></script>
		<script>
			$('#clinical-resources').listnav({
				filterSelector: '.page-header',
				includeNums: false
			});

			$(document).ready(function() {
			    $('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
			});
		</script>

        <script>

            var $menu = $(".dropdown-menu");

            // jQuery-menu-aim: <meaningful part of the example>
            // Hook up events to be fired on menu row activation.
            $menu.menuAim({
                activate: activateSubmenu,
                deactivate: deactivateSubmenu
            });
            // jQuery-menu-aim: </meaningful part of the example>

            // jQuery-menu-aim: the following JS is used to show and hide the submenu
            // contents. Again, this can be done in any number of ways. jQuery-menu-aim
            // doesn't care how you do this, it just fires the activate and deactivate
            // events at the right times so you know when to show and hide your submenus.
            function activateSubmenu(row) {
                var $row = $(row),
                    submenuId = $row.data("submenuId"),
                    $submenu = $("#" + submenuId),
                    height = $menu.outerHeight(),
                    width = $menu.outerWidth();

                // Show the submenu
                $submenu.css({
                    display: "block",
                    top: -1,
                    left: width - 3,  // main should overlay submenu
                    height: height - 4  // padding for main dropdown's arrow
                });

                // Keep the currently activated row's highlighted look
                $row.find("a").addClass("maintainHover");
            }

            function deactivateSubmenu(row) {
                var $row = $(row),
                    submenuId = $row.data("submenuId"),
                    $submenu = $("#" + submenuId);

                // Hide the submenu and remove the row's highlighted look
                $submenu.css("display", "none");
                $row.find("a").removeClass("maintainHover");
            }

            // Bootstrap's dropdown menus immediately close on document click.
            // Don't let this event close the menu if a submenu is being clicked.
            // This event propagation control doesn't belong in the menu-aim plugin
            // itself because the plugin is agnostic to bootstrap.
            $(".dropdown-menu li").click(function(e) {
                e.stopPropagation();
            });

            $(document).click(function() {
                // Simply hide the submenu on any click. Again, this is just a hacked
                // together menu/submenu structure to show the use of jQuery-menu-aim.
                $(".popover").css("display", "none");
                $("a.maintainHover").removeClass("maintainHover");
            });

        </script>
	</body>
</html>