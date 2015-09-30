<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
	<div class="clearfix row content">

		<div class="col-md-9 clearfix main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
				<header>

					<?php echo do_shortcode('[carousel tag="52"]'); ?>
				
				</header>
				
				<section class="post_content">

					<div class="row">
				
						<div class="col-sm-12">

							<div class="tab-section">
					
								<!-- Nav Tabs -->
								<div role="tabpanel">
									<ul class="nav nav-tabs" role="tablist">

										<li role="presentation" class="active">
											<a href="#top-stories" role="tab" data-toggle="tab">Top Stories</a>
										</li>

										<li role="presentation">
											<a href="#announcements" role="tab" data-toggle="tab">Announcements</a>
										</li>

									</ul>
								</div>

								<!-- Tab Panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane fade in active" id="top-stories">
										<?php get_template_part( 'top-stories' ); // Top Stories ?>

										<a class="top-links" href="<?= get_page_link(410); ?>">View All Top Stories</a>
									</div>

									<div role="tabpanel" class="tab-pane fade" id="announcements">
										<?php get_template_part( 'announcements' ); // Announcements ?>
									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-sm-6"> 

							<div class="content-block">
								<h4><?php $post = get_post(150); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
								<div class="links">
									<a href="http://localhost:8888/intranet/#">Your 403(b) Plan</a>
									<a href="http://localhost:8888/intranet/#">Your Health Care Benefits</a>
									<a href="http://localhost:8888/intranet/#">Scheduled Days Off</a>
								</div>
							</div>

						</div>

						<div class="col-sm-6"> 

							<div class="content-block">
								<h4><?php $post = get_post(152); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
								<div class="links">
									<?= types_render_field("dept-links", array('raw' => 'true')); ?>
								</div>
							</div>

						</div>

					</div>

					<div class="row">

						<div class="image-center">

							<div class="col-sm-6">

								<figure>
									<img class="main-image" src="<?php bloginfo('template_directory'); ?>/library/img/2.jpg">
									<figcaption>
										Need Tech Support? Call the Help Desk at<br><b>x4357 (H-E-L-P)</b> or <b>516-663-3940</b>
										from outside the hospital.
									</figcaption>
								</figure>

							</div>

							<div class="col-sm-6">

								<figure>
									<img class="main-image" src="<?php bloginfo('template_directory'); ?>/library/img/1.jpg">
									<figcaption>
										Television or Phone Issues? Call TeleHealth at<br><b>x2457</b> during the day or <b>x3940</b> at night.
									</figcaption>
								</figure>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="image-center">
							<div class="col-sm-6">
								<figure>
									<img class="main-image" src="<?php bloginfo('template_directory'); ?>/library/img/3.jpg">
									<figcaption>
										Issues with medical equipment?<br> Contact Biomed at <b>x2664</b>.
									</figcaption>
								</figure>
							</div>
							
							<div class="col-sm-6">
								<figure>
									<img class="main-image" src="<?php bloginfo('template_directory'); ?>/library/img/4.jpg">
									<figcaption>
										To report a concern, unsafe condition or an idea on<br> 
										how we can improve safety call <b>x2510</b> or click here.
									</figcaption>
								</figure>
							</div>

						</div>

					</div>

					
											
				</section> <!-- end article header -->
				
				<footer>

					<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
					
				</footer> <!-- end article footer -->
			
			</article> <!-- end article -->
			
			<?php 
				// No comments on homepage
				//comments_template();
			?>
			
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

		<div class="col-md-3">

			<?php get_sidebar('sidebar3'); // sidebar 3 ?>

		</div>	

	</div> <!-- end #content -->

<?php get_footer(); ?>