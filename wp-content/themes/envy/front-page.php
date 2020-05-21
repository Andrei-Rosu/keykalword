<?php get_header();?>



    <!-- start section header -->
    <div id="header" class="home">

        <div class="container">
            <div class="header-content">


                <h1><?php pll_e('We')?><?php if (pll_current_language()==='en'){
						echo do_shortcode( '[typedjs]are Andrei and Juliette+love what we do+are Keykal[/typedjs]' );

					}
                    elseif(pll_current_language()==='fr'){
						echo do_shortcode( '[typedjs]sommes Andrei et Juliette+aimons ce que nous faisons+sommes Keykal[/typedjs]' );

					}?></h1>
                <h3><?php pll_e('Web unscripted')?></h3>

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
                <h2><?php pll_e('Who are we?')?></h2>
                <p> <?php pll_e('born')?></p>
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

                        <p class="p-heading"><?php pll_e('jul')?></p>
                        <p class="separator"><?php pll_e('juldes')?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between pt-5">
                <div class="col-lg-7">
                    <div class="about-descr">

                        <p class="p-heading"><?php pll_e('and')?></p>
                        <p class="separator"><?php pll_e('andes')?></p>

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
                <h2><?php pll_e('work')?></h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="portfolio-list">

                        <ul class="nav list-unstyled" id="portfolio-flters">
                            <li class="filter filter-active" data-filter=".all"><?php pll_e('all')?></li>
                            <li class="filter" data-filter=".branding"><?php pll_e('branding')?></li>
                            <li class="filter" data-filter=".mockups"><?php pll_e('mockups')?></li>
                            <li class="filter" data-filter=".uikits">ui kits</li>
                            <li class="filter" data-filter=".webdesign"><?php pll_e('web design')?></li>
                            <li class="filter" data-filter=".photography"><?php pll_e('photography')?></li>
                        </ul>

                    </div>

                    <div class="portfolio-container">



                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
                            <a href="http://zodiac.keykal.com/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/zodiacshcr.png')?>"  alt="zodiac website">
                            </a>
                            <p><a href="http://zodiac.keykal.com/">École du zodiaque</a></p>
                            <p class="comment"><?php pll_e('zodes')?></p>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding webdesign photographyn">
                            <a href="http://bagneuxenvironnement.keykal.com/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/bagenshcr.png')?>" alt="Bagneux Environnement site">
                            </a>
                            <p><a href="http://bagneuxenvironnement.keykal.com/">Bagneux Environnement</a></p>
                            <p class="comment"><?php pll_e('bades')?></p>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
                            <a href="http://montimagenew.keykal.com/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/montimageshcr.png')?>" alt="Montimage website">
                            </a>
                            <p><a href="http://montimagenew.keykal.com/">Montimage</a></p>
                            <p class="comment"><?php pll_e('modes')?></p>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
                            <a href="http://placebo.keykal.com/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/placeboshcr.png')?>" alt="Placebo website">
                            </a>
                            <p><a href="http://placebo.keykal.com/">PlaceBo</a></p>
                            <p class="comment"><?php pll_e('plades')?></p>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
                            <a href="http://yendo.keykal.com/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/yendoshcr.png')?>" alt="Yendo website">
                            </a>
                            <p><a href="http://yendo.keykal.com/">Yendo</a></p>
                            <p class="comment"><?php pll_e('yendes')?></p>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits webdesign">
                            <a href="http://possessive-loss.surge.sh/">
                                <img src="<?php echo get_theme_file_uri('images/portfolio/artisteshcr.png')?>" alt="Café des artistes website">
                            </a>
                            <p><a href="http://possessive-loss.surge.sh/">Café des artistes</a></p>
                            <p class="comment"><?php pll_e('cafedes')?></p>
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
                <h2><?php pll_e('blog')?></h2>
            </div>
        </div>

        <div class="container">
            <div class="journal-block">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="journal-info journal-txt">
                            <?php
                            if (pll_current_language()==='en'){
                            echo do_shortcode("[frontpage_news widget=\"63\" name=\"\"]");

                            }
                            elseif(pll_current_language()==='fr'){
                            echo do_shortcode("[frontpage_news widget=\"56\" name=\"\"]");

                            }?>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    </div>

    <!-- End section journal -->

<?php get_footer();?>