<?php get_header() ?>

    <section class="ultimas-noticias my-5">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2>Resultado de pesquisa</h2>
                        <p>Palavra pesquisada: <strong><?php echo get_query_var('s') ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <!-- Container de conteúdo --> 
                    <div class="col-lg-12 col-md-12 col-sm-12">

                            <?php
                                global $query_string;
                                $query_args = explode("&", $query_string);
                                $search_query = array();

                                foreach($query_args as $key => $string) {
                                    $query_split = explode("=", $string);
                                    $search_query[$query_split[0]] = urldecode($query_split[1]);
                                }
                                $the_query = new WP_Query($search_query);
                                if ( $the_query->have_posts() ) : 
                            ?>

                        <div class="row">

                            <?php while($the_query->have_posts()) : $the_query->the_post() ?>

                                <div class="col-lg-3 col-md-6 col-sm-12">
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
                            
                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>
                            
                            <?php else : ?>

                                <div class="empty-search">
                                <i class="far fa-sad-tear fa-2xl mb-4"></i>
                                    <h3>Nenhum resultado encontrado</h2>
                                    <p>Não foi encontrado nenhum post com a palavra buscada.</p>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
<?php get_footer() ?>