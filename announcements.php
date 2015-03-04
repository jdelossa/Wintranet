<?php

    $args = array(
        'order' => 'ASC',
        'orderby' => 'id',
        'post_type' => 'post',
        'cat' => '56', //Category ID for 'Announcements' is 56
        'numberposts' => 5
    );

$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- Top Story -->
        <div class="announcements">
            <!-- Meta Data --> 
            <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> 
                <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
                <?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> 
                

           <span class="cat-dept"><?php the_category(', '); ?></span>

           <?php if ( in_category( '56' ) ) : ?>
                <div class="hidden"><?php the_category('56'); ?></div>
            
            <?php endif; ?>
    </p>

            <h3><a href="<?= get_page_link($page->ID)?>"><?= $post->post_content; ?></a></h3>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
