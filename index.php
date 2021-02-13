<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProTechInfinity_News
 */

get_header();
?>

	<div class="site-main-container">
		<!-- Start top-post Area -->
		<section class="top-post-area pt-10">
			<div class="container no-padding">
				<div class="row small-gutters">	

					<div class="col-lg-8 top-post-left">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/top-post1.jpg" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="#">Food Habit</a></li>
							</ul>
							<a href="image-post.html">
								<h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
								<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 top-post-right">
						<div class="single-top-post">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/top-post2.jpg" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#">Food Habit</a></li>
								</ul>
								<a href="image-post.html">
									<h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
								</ul>
							</div>
						</div>
						<div class="single-top-post mt-10">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/top-post3.jpg" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#">Food Habit</a></li>
								</ul>
								<a href="image-post.html">
									<h4>A Discount Toner Cartridge Is Better</h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
								</ul>
							</div>
						</div>
					</div>	

				</div>
			</div>
		</section>
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area pb-120">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-8 post-list">
						<!-- Start latest-post Area -->
						<div class="latest-post-wrap">
							
							<h4 class="cat-title">Latest News</h4>
							
							<?php 
								while ( have_posts() ) :
									the_post();

									the_title(); 

								endwhile; // End of the loop.

							?>
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/l1.jpg" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">Lifestyle</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="image-post.html">
										<h4>A Discount Toner Cartridge Is
										Better Than Ever.</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
									<p class="excert">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
									</p>
								</div>
							</div>
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/l2.jpg" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">Science</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="image-post.html">
										<h4>A Discount Toner Cartridge Is
										Better Than Ever.</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
									</p>
								</div>
							</div>
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/l3.jpg" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">Travel</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="image-post.html">
										<h4>A Discount Toner Cartridge Is
										Better Than Ever.</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
									</p>
								</div>
							</div>
							<div class="single-latest-post row align-items-center">
								<div class="col-lg-5 post-left">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/l4.jpg" alt="">
									</div>
									<ul class="tags">
										<li><a href="#">Fashion</a></li>
									</ul>
								</div>
								<div class="col-lg-7 post-right">
									<a href="image-post.html">
										<h4>A Discount Toner Cartridge Is
										Better Than Ever.</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
									</p>
								</div>
							</div>
						</div>
						<!-- End latest-post Area -->
						
						<!-- Start banner-ads Area -->
						<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
							<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/banner-ad.jpg" alt="">
						</div>
						<!-- End banner-ads Area -->
						<!-- Start popular-post Area -->
						<div class="popular-post-wrap">
							<h4 class="title">Popular Posts</h4>
							<div class="feature-post relative">
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/f1.jpg" alt="">
								</div>
								<div class="details">
									<ul class="tags">
										<li><a href="#">Food Habit</a></li>
									</ul>
									<a href="image-post.html">
										<h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>
								</div>
							</div>
							<div class="row mt-20 medium-gutters">
								<div class="col-lg-6 single-popular-post">
									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/f2.jpg" alt="">
										</div>
										<ul class="tags">
											<li><a href="#">Travel</a></li>
										</ul>
									</div>
									<div class="details">
										<a href="image-post.html">
											<h4>A Discount Toner Cartridge Is
											Better Than Ever.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
										</ul>
										<p class="excert">
											Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
										</p>
									</div>
								</div>
								<div class="col-lg-6 single-popular-post">
									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/f3.jpg" alt="">
										</div>
										<ul class="tags">
											<li><a href="#">Travel</a></li>
										</ul>
									</div>
									<div class="details">
										<a href="image-post.html">
											<h4>A Discount Toner Cartridge Is
											Better Than Ever.</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
										</ul>
										<p class="excert">
											Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End popular-post Area -->						 
					</div>
					
					<div class="col-lg-4">
						<?php get_sidebar(); ?>						
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>

<?php
get_footer();
