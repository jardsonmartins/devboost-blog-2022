<footer>
        <div class="container">
            <div class="assine">
                <div class="texto">
                    <h3>Torne-se Membro da DevBoost</h3>
                    <p>Matricule-se e tenha acesso a todos os cursos e aos próximos lançamentos</p>
                </div>
                <div class="btn">
                    <a href="https://devboost.com.br/"><button class="btn btn-primary">Fazer minha matrícula</button></a> 
                </div>
            </div>
            <hr>
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 bloco-logo">
                        <a href="<?php echo get_home_url(); ?>"><img src=" <?php echo get_template_directory_uri(  )?>/img/logo-footer.svg" alt="Logo DevBoost" ></a>
                        <div class="linha my-3"></div>
                        <p>Aqui você dá um boost<br>na sua carreira.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6 class="transparencia">Transparência</h6>
                        <ul>
                            <li><a href="https://devboost.com.br/TermosDeUso.html" target="_blank">Termos de uso</a></li>
                            <li><a href="https://devboost.com.br/PoliticaDePrivacidade.html" target="_blank">Política de privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6 class="fale-conosco">Fale conosco</h6>
                        <ul>
                            <li><a href="https://api.whatsapp.com/send?phone=5585992364455&text=Ol%C3%A1%2C%20tenho%20d%C3%BAvida%20sobre" target="_blank"><i class="fa-brands fa-whatsapp me-2"></i>Whatsapp</a></li>
                            <li><a href="mailto:contato@devboost.com.br" target="_blank"><i class="fa-regular fa-envelope me-2"></i>Suporte@devboost.com.br</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h6 class="categorias">Categorias</h6>
                        <ul>
                            <li><a href="<?php echo get_category_link('7') ?>"><?php echo get_cat_name('7')?></a></li>
                            <li><a href="<?php echo get_category_link('8') ?>"><?php echo get_cat_name('8')?></a></li>
                            <li><a href="<?php echo get_category_link('9') ?>"><?php echo get_cat_name('9')?></a></li>
                            <li><a href="<?php echo get_category_link('2') ?>"><?php echo get_cat_name('2')?></a></li>
                            <li><a href="<?php echo get_category_link('3') ?>"><?php echo get_cat_name('3')?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="texto">
                    <p>2022 © DevBoost - Todos os direitos reservados. </p>
                </div>
                <div class="icons">
                    <ul>
                        <li><a href="https://www.youtube.com/@dev_boost" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/dev_boost/" target="_blank"><i class="fa-brands fa-instagram ms-3"></i></a></li>
                        <li><a href="https://www.facebook.com/devboostbr" target="_blank"><i class="fa-brands fa-facebook-f ms-3"></i></a></li>
                        <li><a href="https://t.me/devboost" target="_blank"><i class="fa-brands fa-telegram ms-3"></i></a></li>
                        <li><a href="https://www.tiktok.com/@devboost" target="_blank"><i class="fa-brands fa-tiktok ms-3"></i></a></li>
                        <li><a href="https://open.spotify.com/playlist/3MpdyNRrzipeAh9vgweDQO?si=b394114a619844cc&utm_medium=share&utm_source=linktree&nd=1" target="_blank"><i class="fa-brands fa-spotify ms-3"></i></a></li>
                        <li><a href="https://twitter.com/DevBoostbr" target="_blank"><i class="fa-brands fa-twitter ms-3"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/dev-boost/" target="_blank"><i class="fa-brands fa-linkedin-in ms-3"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="<?php echo get_template_directory_uri(  )?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(  )?>/node_modules/@popperjs/core/dist/umd/popper.js"></script>

    <?php wp_footer() ?>
</body>
</html>