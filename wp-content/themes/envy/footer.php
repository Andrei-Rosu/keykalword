<!-- start sectoion contact -->
<div id="contact" class="paddsection">
    <div class="container">
        <div class="contact-block1">
            <div class="row">
	            <?php if (pll_current_language()==='en'){
		            echo '<div class="col-lg-6">
                    <div class="contact-contact">

                        <h2 class="mb-30">Leave us a word</h2>

                        <ul class="contact-details">
                            <li><span>+33 (0)6 81 50 18 62</span></li>
                            <li><span>andreitiberiurosu@icloud.com</span></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="row">

                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your e-mail" data-rule="email" data-msg="Please enter a valid e-mail" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="The subject of your message" data-rule="minlen:8" data-msg="Please enter at least 8 characters" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Your idea is too basic, please develop" placeholder="How can we do things better?"></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-defeault btn-send" value="Send us your thoughts">
                            </div>

                        </div>
                    </form>
                </div>';

	            }
                elseif(pll_current_language()==='fr'){
		            echo '<div class="col-lg-6">
                    <div class="contact-contact">

                        <h2 class="mb-30">Des idées à nous suggérer ?<br>
                            On est preneurs.</h2>

                        <ul class="contact-details">
                            <li><span>+33 (0)6 81 50 18 62</span></li>
                            <li><span>andreitiberiurosu@icloud.com</span></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="row">

                            <div id="sendmessage">Votre message à été envoyé, merci beaucoup ! </div>
                            <div id="errormessage"></div>

                            <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères s\'il vous plaît" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre courriel" data-rule="email" data-msg="Veuillez entrer un courriel valide s\'il vous plaît" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Le sujet de votre message" data-rule="minlen:8" data-msg="Veuillez entrer au moins 8 caractères s\'il vous plaît" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Votre idée est trop basique :) Tapez un texte un peu plus long" placeholder="Vos idées ..."></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-defeault btn-send" value="Faire passer le message">
                            </div>

                        </div>
                    </form>
                </div>';

	            }?>

            </div>
        </div>
    </div>
</div>
<!-- start section contact -->


<!-- start section footer -->
<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">

            <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/Keykal-101290874684989/?__tn__=%2Cd%2CP-R&eid=ARDmK98vjpywzLg3pDcFxYisvt3Ns7cYRabNqGdTqfHmBoNEjU5u8YiMkE5gWxZrK2IGHBjrUap2jxA-"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/Keykal1"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/keykal_web/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/keykal/?viewAsMember=true"><i class="fa fa-linkedin"></i></a></li>
            </ul>

        </div>

        <p><?php pll_e('code')?></p>



    </div>
</div>
<!-- End section footer -->



<?php wp_footer();?>


</body>
</html>