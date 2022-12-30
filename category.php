<?php get_header() ?>

    <section class="ultimas-noticias my-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2>Artigos sobre <?php echo single_cat_title(); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Container de conteúdo --> 
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                            
                            <?php
                                $category = get_queried_object();
                                $args = array(
                                    'post_type' => 'post',
                                    'order' => 'DESC',
                                    'cat' => $category->term_id,
                                );
                                $the_query = new WP_Query($args);
                            ?>
                            <?php if(have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('imagem_destaque_do_post')?>" alt="" class="card-top"></a>
                                    <div class="card-bottom">
                                        <?php 
                                            $category = get_the_category( $post -> ID);

                                            if(!empty($category)){
                                                foreach($category as $nameCategory){
                                                    echo '<span class="tag">'.$nameCategory -> name.'</span>';
                                                }
                                            }
                                        ?>
                                        
                                        <a href="<?php the_permalink(); ?>"><h4 class="mt-3"><?php the_title(); ?></h3></a>
                                        <a href="<?php the_permalink(); ?>"><p><?php short_content(110);?></p></a>
                                        <a href="<?php the_permalink(); ?>">Saiba mais</a>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; else: endif; ?>

                        </div>
                    </div>

                    <!-- Sidebar propagandas -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <?php get_sidebar() ?>
                    </div>
                </div>
            </div>
    </section>
    
<?php get_footer() ?>