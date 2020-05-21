<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Keykal Homepage</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112491838-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112491838-1');
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i|Alegreya+Sans+SC&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->



    <!-- Favicon -->
    <link href="<?php echo get_theme_file_uri('images/logos.png')?>" rel="icon">
    <link href="<?php echo get_theme_file_uri('images/logos.png')?>" rel="apple-touch-icon">



</head>

<body>
<nav id="main-nav">
    <div class="row">
        <div class="container">


            <div class="logo">
                <a href=<?php echo get_home_url();?>><img src="<?php echo get_theme_file_uri('images/logos.png')?>" alt="logo"> KEYKAL</a>
            </div>

            <div class="responsive"><i data-icon="m" class="fa fa-bars"></i></div>
	        <?php
	        wp_nav_menu( array(
		        'theme_location' => 'headerMenuLocation',
		        'menu_class'     => 'nav-menu list-unstyled',
	        ) );


	        ?>


            <!--<ul class="nav-menu list-unstyled">
                <li><a href="indexen.html#about" class="smoothScroll">About</a></li>
                <li><a href="indexen.html#portfolio" class="smoothScroll">Work</a></li>
                <li><a href="indexen.html#journal" class="smoothScroll">Blog</a></li>
                <li><a href="indexen.html#contact" class="smoothScroll">Contact</a></li>
                <li class="smoothScroll">
                    <ul class="list-unstyled">
                        <li><a href="indexen.html" class="smoothScroll">EN</a></li>
                        <li><a href="index.html" class="smoothScroll">FR</a></li>
                    </ul>
                </li>
            </ul>-->

        </div>
    </div>
</nav>
