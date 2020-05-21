
<?php /* Template Name: article
 /* Template Post Type: post, page, product
 */ ?>
<?php get_header();?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="col-lg-12 main-content paddsection blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="container-main single-main">
                        <div class="col-md-12">
                            <div class="block-main mb-30">
                                <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" class="img-responsive img-fluid" alt="montimage screenshot">
                                <div class="content-main single-post padDiv">
                                    <div class="journal-txt">
                                        <h4><a href="#"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                                <div class="post-meta">
                                                    <ul class="list-unstyled mt-4">
                                                        <li class="author">   &nbsp;&nbsp;<?php the_author_posts_link();?></li>
                                                        <li class="date">  &nbsp;&nbsp; <?php the_time('j M. Y')?></li>
                                                        <!--<li class="author">   &nbsp;&nbsp;<?php echo get_the_category_list(', ')?></li>-->

                                                        <!--<li class="commont"><i class="ion-ios-heart-outline"></i><a href="#">3 Comments</a></li>-->
                                                    </ul>
                                                </div>

                                                <p class="mb-30">
	                                                <?php the_content();?>
                                                </p>

                                    </div>
                                </div>
                            </div>
                            <!-- Comments -->
                            <!--<div class="col-md-12">
							  <div class="comments text-left padDiv mb-30">
								<div class="entry-comments">
								  <h6 class="mb-30">4 comments</h6>
								  <ul class="entry-comments-list list-unstyled">
									<li>
									  <div class="entry-comments-item">
										<img src="images/avatar.jpg" class="entry-comments-avatar" alt="">
										<div class="entry-comments-body">
										  <span class="entry-comments-author">Sommer Christian</span>
										  <span><a href="#">fev 14, 2018 at 12:48 pm</a></span>
										  <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam justo, ullamcorper tincidunt pellentesque in, condimentum ut enim. Aenean at pharetra diam, quis vulputate urna. </p>
										  <a class="rep" href="#">Reply</a>
										</div>
									  </div>
									  <ul class="entry-comments-reply list-unstyled">
										<li>
										  <div class="entry-comments-item">
											<img src="images/avatar.jpg" class="entry-comments-avatar" alt="">
											<div class="entry-comments-body">
											  <span class="entry-comments-author">Sara Smith</span>
											  <span><a href="#">fev 14, 2018 at 12:51 pm</a></span>
											  <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam justo, ullamcorper tincidunt pellentesque in, condimentum ut enim. Aenean at pharetra diam, quis vulputate urna.</p>
											  <a class="rep" href="#">Reply</a>
											</div>
										  </div>
										</li>
									  </ul>
									</li>
									<li>
									  <div class="entry-comments-item">
										<img src="images/avatar.jpg" class="entry-comments-avatar" alt="">
										<div class="entry-comments-body">
										  <span class="entry-comments-author">Andrew Lupkin</span>
										  <span><a href="#">fev 14, 2018 at 12:55 pm</a></span>
										  <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam justo, ullamcorper tincidunt pellentesque in, condimentum ut enim. Aenean at pharetra diam, quis vulputate urna. </p>
										  <a class="rep" href="#">Reply</a>
										</div>
									  </div>
									</li>
								  </ul>
								</div>
							  </div>
							</div>-->
                            <!--<div class="col-lg-12">
							  <div class="cmt padDiv">
								<form id="comment-form" method="post" action="" role="form">
								  <div class="row">
									  <div class="col-lg-6">
										<div class="form-group">
										  <input id="form_name" type="text" name="name" class="form-control" placeholder="Name *" required="required">
										</div>
									  </div>
									  <div class="col-lg-6">
										<div class="form-group">
										  <input id="form_email" type="email" name="email" class="form-control" placeholder="email *" required="required">
										</div>
									  </div>
									  <div class="col-md-12">
										<div class="form-group">
										  <input id="form_name" type="text" name="website" class="form-control" placeholder="Website">
										</div>
									  </div>
									  <div class="col-lg-12">
										<div class="form-group">
										  <textarea id="form_message" name="message" class="form-control" placeholder="Message *" style="height: 200px;" required="required"></textarea>
										</div>
									  </div>
									  <div class="col-lg-12">
										<input type="submit" class="btn btn-defeault btn-send" value="Send message">
									  </div>
								  </div>
								</form>
							  </div>
							</div>-->
                            <!-- #comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  </div> -->
    <!-- start section main content -->

    <!-- start section footer -->







<?php endwhile;
endif; ?>

<?php get_footer();?>
