<?php get_header(); ?> <!-- Default Page -->
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-9 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<div class="content-block">
								<?php the_content(); ?>
							</div>
					
						</section> <!-- end article section -->

						<!-- <div class="row">
						<div class="col-sm-6">

						<div class="content-block">
						
							<div class="links">
								<?php if (types_render_field("clinical-pages", array('raw' => 'true'))) { ?>
									<h4>Clinical Resource Pages</h4>
								<?php } ?>

								<?php if (types_render_field("clinical-pages", array('raw' => 'true'))) { ?>
									<p><?= types_render_field("clinical-pages", array('raw' => 'true')); ?></p>
								<?php } ?>
							</div>
						</div>
						
						</div>
						</div> -->
						<footer>
			
							<!--<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>-->
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					
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

				<div class="col-sm-3">
    
					<?php get_sidebar('sidebar3'); // sidebar 3 ?>

				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>