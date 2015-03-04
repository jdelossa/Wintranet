<?php
/*
Template Name: Departments Page
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="clearfix row">
	
		<div id="main" class="col col-md-9 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				
				<header>
					
					<div id="dept" class="page-header"><span class="dept-title">Department of <?php the_title(); ?></span>

					<div class="contact-information">

						<!-- ADD ALL LABELS FOR THIS SECTION-->

						<?php if (types_render_field("dept-email", array('raw' => 'true'))) { ?>
							<span class="label label-primary">
								<a href="mailto:<?= types_render_field("dept-email", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Email: <?= types_render_field("dept-email", array('raw' => 'true')); ?>">
									<i class="fa fa-envelope"></i>
								</a>
							</span>
						<?php } ?>

						<?php if (types_render_field("dept-phone", array('raw' => 'true'))) { ?>
							<span class="label label-success">
								<a href="tel:<?= types_render_field("dept-phone", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Phone: <?= types_render_field("dept-phone", array('raw' => 'true')); ?>">
									<i class="fa fa-phone"></i>
								</a>
							</span>
						<?php } ?>

						<?php if (types_render_field("dept-fax", array('raw' => 'true'))) { ?>
							<span class="label label-info">
								<a href="fax:<?= types_render_field("dept-fax", array('raw' => 'true')); ?>" data-toggle="tooltip" title="Fax: <?= types_render_field("dept-fax", array('raw' => 'true')); ?>">
									<i class="fa fa-fax"></i>
								</a>
							</span>
						<?php } ?>

						<?php if (types_render_field("dept-hours", array('raw' => 'true'))) { ?>
							<span class="label label-warning">
								<a href="#" data-toggle="tooltip" title="<?= types_render_field("dept-hours", array('raw' => 'true')); ?>">
									<i class="fa fa-clock-o"></i>
								</a>
							</span>
						<?php } ?>

						<?php if (types_render_field("dept-location", array('raw' => 'true'))) { ?>
							<span class="label label-danger">
								<a href="#" data-toggle="tooltip" title="<?= types_render_field("dept-location", array('raw' => 'true')); ?>">
									<i class="fa fa-location-arrow"></i>
								</a>
							</span>
						<?php } ?>

					</div>
					</div>
				
				</header> <!-- end article header -->
			
				<section class="post_content">

					<div class="content-block">
						<div class="department-info">
							<?php the_content(); ?>
						</div>
					</div>

					<!-- Departmental Announcements -->

					<?php if (types_render_field("dept-announcements", array('raw' => 'true'))) { ?>
						<div class="tab-section">
				
							<!-- Nav Tabs -->
							<div role="tabpanel">
								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
										<a href="#announcements" role="tab" data-toggle="tab">Announcements</a>
									</li>

								</ul>
							</div>

							<!-- Tab Panes -->
							<div class="tab-content">

								<div role="tabpanel" class="tab-pane active" id="announcements">
									<div class="announcements">
										<h3><?= types_render_field("dept-announcements", array('raw' => 'true')); ?></h3>
									</div>
								</div>

							</div>

						</div>
					<?php } ?>

					
				<!--<section class="post_content">
					// Nursing Department Pages
					<?php if (types_render_field("dept-info-links", array('raw' => 'true'))) { ?>
						<h4>Baby Friendly Journey</h4>
					<?php } ?>
					<div class="col-md-5">
						<?php if (types_render_field("baby-image", array('raw' => 'true'))) { ?>
							<img src="<?= types_render_field("baby-image", array('raw' => 'true')); ?>">
						<?php } ?>
					</div>
					<div class="col-md-7">
						<?php if (types_render_field("baby-links", array('raw' => 'true'))) { ?>
							<ul>	
								<?= types_render_field("baby-links", array('raw' => 'true')); ?>
							</ul>
						<?php } ?>
					</div>

				</section>-->
			
				</section> <!-- end article section -->

				<section class ="post_content">

					<div class="row">

						<?php if (types_render_field("dept-links", array('raw' => 'true'))) { ?>
							<div class="col-sm-6">
								<div class="content-block">
									<!-- Departmental Links -->
									<div class="links">
										<?php if (types_render_field("dept-links", array('raw' => 'true'))) { ?>
											<h4>Departmental Links</h4>
										<?php } ?>
										<?php if (types_render_field("dept-links", array('raw' => 'true'))) { ?>
											<p><?= types_render_field("dept-links", array('raw' => 'true')); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php if (types_render_field("dept-pages", array('raw' => 'true'))) { ?>
							<div class="col-sm-6">
								<div class="content-block">
									<div class="links">
										<!-- Departmental Pages -->
										<?php if (types_render_field("dept-pages", array('raw' => 'true'))) { ?>
											<h4>Departmental Pages</h4>
										<?php } ?>
										<?php if (types_render_field("dept-pages", array('raw' => 'true'))) { ?>
											<p><?= types_render_field("dept-pages", array('raw' => 'true')); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php if (types_render_field("eh-flow-sheets", array('raw' => 'true'))) { ?>
							<div class="col-sm-6">
								<div class="content-block">
									<div class="links">
										<!-- Employee Health Flow Sheets -->
										<?php if (types_render_field("eh-flow-sheets", array('raw' => 'true'))) { ?>
											<h4>Flow Sheets</h4>
										<?php } ?>
										<?php if (types_render_field("eh-flow-sheets", array('raw' => 'true'))) { ?>
											<p><?= types_render_field("eh-flow-sheets", array('raw' => 'true')); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>

				</section>
				
				<footer>
	
					<!--<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>-->
					
				</footer> <!-- end article footer -->
			
			</article> <!-- end article -->
			
			<?php comments_template(); ?>
			
			<?php endwhile; ?>	
			
			<?php else : ?>
			
			<article id="post-not-found">
			    <header>
			    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
			    </header>
			    <section class="post_content">
			    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
			    </section>
			    <footer>
			    </footer>
			</article>
			
			<?php endif; ?>
	
		</div> <!-- end #main -->

		<div class="col-md-3 clearfix">
			
			<?php get_sidebar('sidebar3'); // get sidebar 3 ?>

		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>