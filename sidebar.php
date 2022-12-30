<?php
    $args = array(
        'post_type' => 'propaganda',
        'status' => 'publish',
        'order' => 'DESC'
    );
    $query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="sidebar">
        <a href="<?php the_field('link_propaganda')?>"><img src="<?php the_field('imagem_propaganda')?>" alt="" class="banner-sidebar"></a>
    </div>
<?php endwhile;endif; wp_reset_query();