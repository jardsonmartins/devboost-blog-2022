<?php get_header() ?>

    <section class="main">
        <div class="container">
            <div class="texto">
                <h1>Insights para ajudar você a crescer a sua carreira</h1>
                <p>Seja bem-vindo ao blog da DevBoost. Fique por dentro de tudo o que acontece no mercado que mais cresce no mundo!</p>
                <a href="#newsletter"><div class="btn btn-primary">Inscreva-se na nossa newsletter</div></a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="links-pesquisa">
            <div class="links">
                <a href="<?php echo get_category_link('7') ?>"><?php echo get_cat_name('7')?></a>
                <a href="<?php echo get_category_link('8') ?>"><?php echo get_cat_name('8')?></a>
                <a href="<?php echo get_category_link('9') ?>"><?php echo get_cat_name('9')?></a>
                <a href="<?php echo get_category_link('2') ?>"><?php echo get_cat_name('2')?></a>
                <a href="<?php echo get_category_link('3') ?>"><?php echo get_cat_name('3')?></a>
            </div>
            <form action="<?php echo home_url(); ?>">
                <input type="text" placeholder="Pesquisar" name="s">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

    <section class="mais-vistos">
        <div class="container">
            <div class="row">
                <?php
                    $args = array(
                        'meta_key' => 'post_views_count',
                        'posts_per_page' => 1,
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC'
                    );
                    $top_views_posts = new WP_Query($args);
                ?>
                <?php if(have_posts()) : while ($top_views_posts -> have_posts()) : $top_views_posts -> the_post(); ?>

                <div class="col-lg-7 col-md-12 col-sm-12 bloco-principal">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('imagem_destaque_do_post') ?>" alt="" class="img-principal"></a>
                    <?php 
                        $category = get_the_category( $post -> ID);

                        if(!empty($category)){
                            foreach($category as $nameCategory){
                                echo '<div class="titulo mt-4">'.$nameCategory -> name.'</div>';
                            }
                        }
                    ?>
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                </div>
                
                <?php endwhile; endif; wp_reset_query() ?>

                <div class="col-lg-5 col-md-12 col-sm-12">
                    
                <?php
                    $args = array(
                        'offset' => 1,
                        'meta_key' => 'post_views_count',
                        'posts_per_page' => 3,
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC'
                    );
                    $top_views_posts = new WP_Query($args);
                ?>
                <?php if(have_posts()) : while ($top_views_posts -> have_posts()) : $top_views_posts -> the_post(); ?>
                
                    <div class="row bloco-lateral">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('imagem_destaque_do_post')?>" alt="" class="img-lateral"></a>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">

                            <?php 
                                $category = get_the_category( $post -> ID);

                                if(!empty($category)){
                                    foreach($category as $nameCategory){
                                        echo '<div class="titulo">'.$nameCategory -> name.'</div>';
                                    }
                                }
                            ?>

                            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                        </div>
                    </div>

                <?php endwhile; endif; wp_reset_query() ?>

                </div>


            </div>
            <hr>
        </div>
    </section>

    <section class="ultimas-noticias">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h2>Últimas notícias</h2>
                </div>
            </div>
            <div class="row">
                <!-- Container de conteúdo --> 
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        
                        <?php
                            $config = array (
                                'posts_per_page' => '16',
                                'post_type' => 'post',
                                'order' => 'DESC'
                            );

                            $query_posts = new WP_Query( $config );
                        ?>
                        <?php if(have_posts()) : while ($query_posts -> have_posts()) : $query_posts -> the_post(); ?>

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

                        <?php endwhile; endif; wp_reset_query() ?>

                    </div>
                </div>

                <!-- Sidebar propagandas -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter" id="newsletter">
        <div class="container">
            <div class="bloco-newsletter">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="texto">
                            <h4>Cadastre-se e fique atualizado sobre o mundo da tecnologia</h4>
                            <p>Dicas e novidades direto no seu e-mail.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-1 col-sm-12">
                        <img src=" <?php echo get_template_directory_uri()?>/img/woman.png" alt="" class="woman">
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <form action="form-newslatter">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                            <button class="btn btn-primary">Inscreva-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer()?>