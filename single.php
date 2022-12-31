<?php get_header() ?>

<?php setPotsViews(get_the_ID()); ?>

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="interna">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <div class="links sidebar">
                        <ul>
                            <li><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>+-+DevBoost+-+<?php the_title(); ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink();?>&Via:=DevBoostbr&lang=pt&related=DevBoostbr" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://t.me/share/url?url={<?php the_permalink(); ?>}&text={<?php the_title(); ?>}" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-11 col-sm-12 conteudo">
                    <img src="<?php the_field('imagem_destaque_do_post') ?>" alt="" class="img-principal">
                    <?php 
                        $category = get_the_category( $post -> ID);

                             if(!empty($category)){
                                foreach($category as $nameCategory){
                                     echo '<div class="titulo mt-3 mb-2">'.$nameCategory -> name.'</div>';
                                }
                            }
                    ?>
                    <h3><?php the_title();?></h3>
                    <div class="descricao">
                        <ul>
                            <li><p>Por <span><?php echo get_the_author_meta('display_name'); ?></span></p></li>
                            <li><i class="fa-regular fa-eye me-2"></i><span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?></span> de leitura</li>
                            <li>Publicado em <?php echo get_the_date(); ?>.</li>
                        </ul>
                    </div>
                    <hr>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php
                        $nome_fonte = get_field('nome_da_fonte');
                        $link_fonte = get_field('link_com_fonte_da_noticia');
                        if (!empty($nome_fonte)) :
                        ?>
                        <?php echo '<h6 class="mt-3">Fonte</h6>' ?>
                        <?php echo '<a href="',$link_fonte,'"><button class="tag fonte">',$nome_fonte,'</button></a>'?>
                    <?php endif; ?>

                    <h6 class="mt-4">Categorias</h6>
                    <?php
                        $category = get_the_category( $post -> ID);

                            if(!empty($category)){
                                foreach($category as $nameCategory){
                                    echo '<span class="tag">'.$nameCategory -> name.'</span>';
                                }
                            }
                    ?>              
                    <hr class="my-5">
                    <div class="autor">
                        <div class="row">
                            <div class="col-lg-2 col-md-12">
                                
                            <img src="',$perfil_bio,'" alt="" class="img-perfil img-fluid">
                            </div>
                            <div class="col-lg-8 col-md-12 infos">
                                <h4><?php the_author(); ?></h4>
                                <?php   
                                    $funcao_bio = get_the_author_meta('funcao'); 
                                    if (!empty($funcao_bio)) :
                                    ?> 
                                    <?php echo '<button class="tag info">',$funcao_bio,'</button>' ?>
                                <?php endif; ?>
                                <?php   
                                    $author_bio = get_the_author_meta('description'); 
                                    if (!empty($author_bio)) :
                                    ?> 
                                    <?php echo '<p>', $author_bio, '</p>'; ?>
                                <?php endif; ?>
                                <div class="links-autor">
                                    <ul>
                                    <?php   
                                        $instagram_bio = get_the_author_meta('instagram'); 
                                        if (!empty($instagram_bio)) :
                                        ?> 
                                        <?php echo '<a href="',$instagram_bio,'" target="_blank"><li><i class="fa-brands fa-instagram fa-lg"></i></li></a>' ?>
                                    <?php endif; ?>
                                    <?php   
                                        $twitter_bio = get_the_author_meta('twitter'); 
                                        if (!empty($twitter_bio)) :
                                        ?> 
                                        <?php echo '<a href="',$twitter_bio,'" target="_blank"><li><i class="fa-brands fa-twitter fa-lg"></i></li></a>' ?>
                                    <?php endif; ?>
                                    <?php   
                                        $youtube_bio = get_the_author_meta('youtube'); 
                                        if (!empty($youtube_bio)) :
                                        ?> 
                                        <?php echo '<a href="',$youtube_bio,'" target="_blank"><li><i class="fa-brands fa-youtube fa-lg"></i></li></a>' ?>
                                    <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                <?php endwhile; endif; wp_reset_query() ?>

                <!-- Sidebar propagandas -->
                <div class="col-lg-3 col-md-1 col-sm-12">
                    <?php get_sidebar() ?>
                </div>
            </div>

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
                                <?php echo do_shortcode('[contact-form-7 id="93" title="Newsletter"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                $categories = get_the_category();
        
                $args = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    'posts_per_page' => 4,
                    'cat' => $categories[0]->cat_ID,
                    'post__not_in' => array(get_the_ID())
                );
                $the_query = new WP_Query($args);
            ?>

            <?php if($the_query->have_posts()) : ?>

            <section class="posts">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <div class="titulo">Postagens semelhantes</div>
                        <h2>Confira nossas ultimas postagens</h2>
                    </div>
                </div>
                <div class="row">
                    <?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                    <?php endwhile; else: endif; ?>
                </div>
            </section>

        <?php endif; ?>

    </div>
</div>

    

<?php get_footer() ?>