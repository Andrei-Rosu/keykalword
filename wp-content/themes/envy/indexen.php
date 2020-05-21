<?php /* Template Name: Home english */ ?>

<?php get_header();?>



<!-- start section header -->
<div id="header" class="home">

	<div class="container">
		<div class="header-content">
			<h1><?php echo do_shortcode( '[typedjs startdelay="800" backdelay="1002" backspeed="1" loop="true"]Jext Line 1 + Jext Line 2 + Text line 3[/typedjs]' ); ?></h1>
			<h3>We are Keykal</h3>

			<ul class="list-unstyled list-social">
				<li><a href="https://www.facebook.com/Keykal-101290874684989/?__tn__=%2Cd%2CP-R&eid=ARDmK98vjpywzLg3pDcFxYisvt3Ns7cYRabNqGdTqfHmBoNEjU5u8YiMkE5gWxZrK2IGHBjrUap2jxA-"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/Keykal1"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/keykal_web/"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/company/keykal/?viewAsMember=true"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- End section header -->


<!-- start section about us -->
<div id="about" class="paddsection">
	<div class="container">
		<div class="section-title text-center">
			<h2>Qui sommes-nous?</h2>
			<p>Né de notre passion commune pour le web, le design et… pour la vie!
				Keykal est le creuset de tous nos projets : on y retranscrit le fruit de nos échanges
				passionnés (toutes langues mélangées), en quelque chose de fonctionnel, utile, vrai, prêt à vous
				simplifier le quotidien. De nos projets les plus sérieux à nos idées les plus folles!
			</p>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between pb-5">

			<div class="col-lg-4 ">
				<div class="div-img-bg">
					<div class="about-img">
						<img src="<?php echo get_theme_file_uri('images/Juliette.png')?>" class="img-responsive" alt="Juliette">
					</div>
				</div>
			</div>

			<div class="col-lg-7">
				<div class="about-descr">

					<p class="p-heading">Qui est Juliette ?</p>
					<p class="separator">Elle s’occupe de raisonner, de canaliser et d’évaluer toutes les petites perles d’Andrei
						: une vraie petite fourmi. Juliette prend les décisions graphiques et esthétiques,
						elle s’occupe de la communication, et sait aussi y laisser s’exprimer son petit grain de folie.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between pt-5">
			<div class="col-lg-7">
				<div class="about-descr">

					<p class="p-heading">Et Andrei alors? </p>
					<p class="separator">The mastermind. Avec Andrei, les idées fusent à l’état brut, sans jamais s’arrêter
						(même à trois heures du mat’), à condition qu’on veille à son taux de caféine.
						C’est lui qui fait le gros du travail, codant comme un forcené du matin au soir (ou du soir au matin…)</p>

				</div>
			</div>
			<div class="col-lg-4 ">
				<div class="div-img-bgs">
					<div class="about-imgs">
						<img src="<?php echo get_theme_file_uri('images/Andrei.png')?>" class="img-responsive" alt="Andrei">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section about us -->


<!-- start section services -->
<!--<div id="services">
  <div class="container">

	  <div class="services-carousel owl-theme">

		<div class="services-block">

		  <i class="ion-ios-browsers-outline"></i>
		  <span>UI/UX DESIGN</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

		<div class="services-block">

		  <i class="ion-ios-lightbulb-outline"></i>
		  <span>BRAND IDENTITY</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

		<div class="services-block">

		  <i class="ion-ios-color-wand-outline"></i>
		  <span>WEB DESIGN</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

		<div class="services-block">

		  <i class="ion-social-android-outline"></i>
		  <span>MOBILE APPS</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

		<div class="services-block">

		  <i class="ion-ios-analytics-outline"></i>
		  <span>Analytics</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

		<div class="services-block">

		  <i class="ion-ios-camera-outline"></i>
		  <span>PHOTOGRAPHY</span>
		  <p class="separator">To an English person, it will seem like simplified English,told me what </p>

		</div>

	  </div>

  </div>

</div>-->
<!-- end section services -->


<!-- start section portfolio -->
<div id="portfolio" class="text-center paddsection">

	<div class="container">
		<div class="section-title text-center">
			<h2>Nos Réalisations</h2>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="portfolio-list">

					<ul class="nav list-unstyled" id="portfolio-flters">
						<li class="filter filter-active" data-filter=".all">all</li>
						<li class="filter" data-filter=".branding">branding</li>
						<li class="filter" data-filter=".mockups">mockups</li>
						<li class="filter" data-filter=".uikits">ui kits</li>
						<li class="filter" data-filter=".webdesign">web design</li>
						<li class="filter" data-filter=".photography">photography</li>
					</ul>

				</div>

				<div class="portfolio-container">



					<div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
						<a href="http://zodiac.keykal.com/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/zodiacshcr.png')?>"  alt="zodiac website">
						</a>
						<p><a href="http://zodiac.keykal.com/">École du zodiaque</a></p>
						<p class="comment">Site dynamique - PHP, en cours</p>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesign photographyn">
						<a href="http://bagneuxenvironnement.keykal.com/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/bagenshcr.png')?>" alt="Bagneux Environnement site">
						</a>
						<p><a href="http://bagneuxenvironnement.keykal.com/">Bagneux Environnement</a></p>
						<p class="comment">Wordpress - thème personnalisé, en cours</p>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
						<a href="http://montimagenew.keykal.com/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/montimageshcr.png')?>" alt="Montimage website">
						</a>
						<p><a href="http://montimagenew.keykal.com/">Montimage</a></p>
						<p class="comment">Site dynamique - PHP, dernières retouches</p>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
						<a href="http://placebo.keykal.com/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/placeboshcr.png')?>" alt="Placebo website">
						</a>
						<p><a href="http://placebo.keykal.com/">PlaceBo</a></p>
						<p class="comment">Site vitrine une page</p>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
						<a href="http://yendo.keykal.com/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/yendoshcr.png')?>" alt="Yendo website">
						</a>
						<p><a href="http://yendo.keykal.com/">Yendo</a></p>
						<p class="comment">Dernier défi - à suivre</p>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
						<a href="http://possessive-loss.surge.sh/">
							<img src="<?php echo get_theme_file_uri('images/portfolio/artisteshcr.png')?>" alt="Café des artistes website">
						</a>
						<p><a href="http://possessive-loss.surge.sh/">Café des artistes</a></p>
						<p class="comment">Premiers pas en React</p>
					</div>

				</div>
			</div>
		</div>
	</div>

</div>
<!-- End section portfolio -->


<!-- start section journal -->
<div id="journal" class="text-left paddsection">

	<div class="container">
		<div class="section-title text-center">
			<h2>journal</h2>
		</div>
	</div>

	<div class="container">
		<div class="journal-block">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="journal-info">

						<a href="blog-single.html"><img src="<?php echo get_theme_file_uri('images/planting.jpg')?>" class="img-responsive" alt="img"></a>

						<div class="journal-txt">

							<h4><a href="blog-single.html">Keykal s’investit dans le vert et le local avec le nouveau projet !</a></h4>
							<p class="separator">Comme quoi allier convictions, plaisir et boulot, c’est toujours possible quand on est prêt à y mettre du sien…
							</p>

						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="journal-info">

						<a href="blog-single-2.html"><img src="<?php echo get_theme_file_uri('images/portfolio/yendoshcr.png')?>" class="img-responsive" alt="capture d'ecran Yendo"></a>

						<div class="journal-txt">

							<h4><a href="blog-single-2.html"> En cours… Notre plus grand challenge!</a></h4>
							<p class="separator">
								Parce qu’on essaie sans cesse de se réinventer et de se dépasser…
							</p>

						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="journal-info">

						<a href="blog-single-3.html"><img src="<?php echo get_theme_file_uri('images/montimagecrop.png')?>" class="img-responsive" alt="capture d'ecran Montimage"></a>

						<div class="journal-txt">

							<h4><a href="blog-single-3.html">Avant tout, la sécurité</a></h4>
							<p class="separator">
								On n’est jamais trop prudent…
							</p>

						</div>

					</div>
				</div>



			</div>
		</div>
	</div>

</div>

<!-- End section journal -->

<?php get_footer();?>
