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

    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1694146880931516');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1694146880931516&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VNM6MWNL2F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VNM6MWNL2F');
    </script>

    <!-- Hotjar Tracking Code for https://devboost.com.br/ -->
    <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:3195214,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg my-2">
                <div class="container-fluid">
                  <a class="navbar-brand" href="<?php echo get_home_url()?>"><img src=" <?php echo get_template_directory_uri( )?>/img/logo.svg" alt="logo devboost"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="https://devboost.com.br/">Home</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="https://devboost.com.br/#plano">Plano</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="https://devboost.com.br/">Assine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url()?>">Blog</a>
                      </li>
                    </ul>
                    <div class="btns">
                        <a href="https://devboost.com.br/"><button class="btn btn-primary btn-menu ms-3">Fazer matrícula</button></a>
                        <a href="https://dashboard.kiwify.com.br/course/premium/ebfa8b14-edd3-46f6-869b-fcebc9ae9340"><button class="btn btn-outline-primary btn-menu ms-3">Login</button></a>
                    </div>
                  </div>
                </div>
            </nav>
        </div>
    </header>