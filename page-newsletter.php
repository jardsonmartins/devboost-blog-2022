<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri( )?>/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri( )?>/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri( )?>/img/logo-icon.svg">
    <title><?php bloginfo('name')?> <?php wp_title('-') ?></title>
</head>
<body>
    <div class="page-newsletter">
        <div class="container">
            <div class="news">
                <h2>Toda segunda-feira um conteúdo exclusivo sobre tecnologia!</h2>
                <p>Junte-se a nossa comunidade com mais de 1000 leitores:</p>
                <form action="form-newslatter">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                        <button class="btn btn-primary">Inscreva-se</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>