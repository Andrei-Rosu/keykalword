<?php get_header();?>
<?php
while(have_posts()){
	the_post();?>
	<section class="property-grid grid">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-box-a card-shadow">
						<div class="img-box-a">
							<img src="img/property-1.jpg" alt="" class="img-a img-fluid">
						</div>
						<div class="card-overlay">
							<div class="card-overlay-a-content">
								<div class="card-header-a">
									<h2 class="card-title-a">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h2>
								</div>
								<div class="card-body-a">
									<div class="price-box d-flex">
										<span class="price-a">rent | $ 12.000</span>
									</div>
									<a href="property-single.html" class="link-a">Click here to view
										<span class="ion-ios-arrow-forward"></span>
									</a>
								</div>
								<div class="card-footer-a">
									<ul class="card-info d-flex justify-content-around">
										<li>
											<h4 class="card-info-title">Area</h4>
											<span>340m
                        <sup>2</sup>
                      </span>
										</li>
										<li>
											<h4 class="card-info-title">Beds</h4>
											<span>2</span>
										</li>
										<li>
											<h4 class="card-info-title">Baths</h4>
											<span>4</span>
										</li>
										<li>
											<h4 class="card-info-title">Garages</h4>
											<span>1</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-sm-12">
					<nav class="pagination-a">
						<ul class="pagination justify-content-end">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">
									<span class="ion-ios-arrow-back"></span>
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item next">
								<a class="page-link" href="#">
									<span class="ion-ios-arrow-forward"></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<?php
}
?>
<?php get_footer();?>