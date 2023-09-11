<?php include('includes/variables.php') ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="theme-color" content="#083756" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <!--<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">-->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $titulo_seo; ?>
    </title>
    <meta name="description" content="<?php echo $descripcion_seo; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <link rel="canonical" href="https://www.consex.cl" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS Sitio -->
    <link rel="stylesheet" href="https://www.consex.cl/assets/css/general.css">
    <!-- Font Awesome Icons-->
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">

    <!--ANIMATE AOS-->
    <!--<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
    <!-- Swiper Carousell-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans&display=swap"
        rel="stylesheet">


    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $og_title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $og_url; ?>" />
    <meta property="og:image" content="<?php echo $og_image; ?>" />
    <meta property="og:description" content="<?php echo $og_descripcion; ?>" />
    <meta property="og:site_name" content="<?php echo $og_nombre_sitio; ?>" />
    <meta property="og:image:alt" content="<?php echo $og_image_alt; ?>" />
    <!-- fancybox files -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />-->



<body onLoad="if ('Navigator' == navigator.appName) document.forms[0].reset();">
    <? include('includes/menu.php') ?>
    <div class="container">
        <div class="row content">
            <div class="col-lg-12"></div>
            <div class="col-lg-12">
                <h1>404</h1>
                <h2>Oops, el recurso solicitado no se encuentra disponible.</h2>
                <p>
                    Quieres volver atrás?.
                </p>
                <a href="#" class="back" onclick="history.back(-1)"><span class="btn">Volver atrás</span></a>

            </div>
        </div>
    </div>
    <? include('includes/footer.php') ?>
    <!-- SCRIPTS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>

    <!--<script src="assets/js/randomdivs.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="assets/js/main.js"></script>
-->

</body>

</html>