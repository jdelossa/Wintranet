<?php 
// the query

$args = array(
        'order' => 'ASC',
        'orderby' => 'id',
        'post_type' => 'post',
        'post__not_in' => array( 410 ),
        'cat' => '50', //Category ID for 'Top Stories' is 50
        'numberposts' => 5
    );

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <!-- Top Story -->
        <div class="top-stories">
            <h4><i class="fa fa-link"></i> <a href="<?= get_page_link($page->ID); ?>"><?= $post->post_title; ?></a></h4>
        </div>

    <?php //var_dump($the_query); 
    endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
