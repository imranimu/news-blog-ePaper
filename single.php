<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ProTechInfinity_News
 */

get_header();	

	while ( have_posts() ) :

		the_post();
?>

	 <div class="site-main-container">
		<!-- Start top-post Area -->
		<section class="top-post-area pt-10">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-12">
						<div class="hero-nav-area">							
							<h1 class="text-white"><?php echo get_the_title();?></h1>
							<p class="text-white link-nav"><a href="<?php echo home_url();?>">Home </a>  
								<span class="lnr lnr-arrow-right"></span>
								<a href="">অনলাইন ডেস্ক</a> 
							</p>
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
					<?php
						/*get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/						
					?>

					<div class="col-lg-8 post-list">
						<!-- Start single-post Area -->
						<div class="single-post-wrap">
							<div class="feature-img-thumb relative">
								<!-- <div class="overlay overlay-bg"></div> -->
								<?php 
						            /* check if the post has a Post Thumbnail assigned to it.*/
						            if ( has_post_thumbnail() ) {
						            ?>
							            <div class="post_image">
							            	<?php	 
								            	the_post_thumbnail();
								            ?>
								        </div>
							        <?php    	 
						            } 
						        ?>
								<!-- <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/f1.jpg" alt=""> -->
							</div>
							<div class="content-wrap">
								
								<ul class="tags mt-10">
									<?php 

										$tags = get_the_tags( get_the_ID()); 

										if ($tags) {
											foreach ($tags as $key => $value) {
												$name = $value->name; 

												echo '<li><a href="#">'.$name.'</a></li>'; 

											}
										}
										/*echo "<pre>";
										print_r($tags); 
										echo "</pre>";*/

									?>
									
								</ul>

								<h3><?php echo get_the_title();?></h3>
								
								<ul class="meta pb-20">
									<li><span class="lnr lnr-user"></span>Jnmobhumi</li>
									<li><span class="lnr lnr-calendar-full"></span><?php echo get_the_time('F j, Y', get_the_ID()); ?></li>
									<?php 
										$comments_count = wp_count_comments(get_the_ID());
									?>
									<li><a href="#"><span class="lnr lnr-bubble"></span><?php echo $comments_count->total_comments; ?> </a></li>
								</ul>

								<div class="social-icons-div social-icons-bottom">
									<ul class="social-icons" style="font-size: 20px;">
										
										<li><span class="fa fa-share-square-o"></span></li>

										<li>
											<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" class="social_share" title="Share on Facebook" target="_blank">
												<span>												
													<i class="fa fa-facebook-square"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/intent/tweet?text=https://samakal.com/whole-country/article/19011867/%E0%A6%86%E0%A6%B8%E0%A6%A8%E0%A7%87-%E0%A6%AD%E0%A7%8B%E0%A6%9F%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%B9%E0%A6%A3-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81" title="Share on Twitter" target="_blank"> 
												<span>
												<i class="fa fa-twitter-square"></i>
											</span>
											</a>
										</li>
										<li>
											<a href="https://plus.google.com/share?text=https://samakal.com/whole-country/article/19011867/%E0%A6%86%E0%A6%B8%E0%A6%A8%E0%A7%87-%E0%A6%AD%E0%A7%8B%E0%A6%9F%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%B9%E0%A6%A3-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81" title="Share on Google Plus" target="_blank"> 
												<span>												 
													<i class="fa fa-google-plus-square"></i>
												</span>
											</a>
										</li>										 								 
									</ul>
								</div>

								<?php 

									get_template_part( 'template-parts/content', get_post_type() );

								?>

							
								<!-- <div class="navigation-wrap justify-content-between d-flex">
									<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
									<a class="next" href="#">পরবর্তী খবর পড়ুন<span class="lnr lnr-arrow-right"></span></a>
								</div> -->
								
							
							
							<!-- <div class="comment-sec-area">
								<div class="container">
									<div class="row flex-column">
										<h6>05 Comments</h6>
										<div class="comment-list">
											<div class="single-comment justify-content-between d-flex">
												<div class="user justify-content-between d-flex">
													<div class="thumb">
														<img src="<?php echo get_template_directory_uri();?>/img/blog/c1.jpg" alt="">
													</div>
													<div class="desc">
														<h5><a href="#">Emilly Blunt</a></h5>
														<p class="date">December 4, 2017 at 3:12 pm </p>
														<p class="comment">
															Never say goodbye till the end comes!
														</p>
													</div>
												</div>
												<div class="reply-btn">
													<a href="" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
										<div class="comment-list left-padding">
											<div class="single-comment justify-content-between d-flex">
												<div class="user justify-content-between d-flex">
													<div class="thumb">
														<img src="<?php echo get_template_directory_uri();?>/img/blog/c2.jpg" alt="">
													</div>
													<div class="desc">
														<h5><a href="#">Emilly Blunt</a></h5>
														<p class="date">December 4, 2017 at 3:12 pm </p>
														<p class="comment">
															Never say goodbye till the end comes!
														</p>
													</div>
												</div>
												<div class="reply-btn">
													<a href="" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
										<div class="comment-list">
											<div class="single-comment justify-content-between d-flex">
												<div class="user justify-content-between d-flex">
													<div class="thumb">
														<img src="<?php echo get_template_directory_uri();?>/img/blog/c3.jpg" alt="">
													</div>
													<div class="desc">
														<h5><a href="#">Emilly Blunt</a></h5>
														<p class="date">December 4, 2017 at 3:12 pm </p>
														<p class="comment">
															Never say goodbye till the end comes!
														</p>
													</div>
												</div>
												<div class="reply-btn">
													<a href="" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
						</div>
						<!-- <div class="comment-form">
							<h4>Post Comment</h4>
							<form>
								<div class="form-group form-inline">
									<div class="form-group col-lg-6 col-md-12 name">
										<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									</div>
									<div class="form-group col-lg-6 col-md-12 email">
										<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
								</div>
								<div class="form-group">
									<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								</div>
								<a href="#" class="primary-btn text-uppercase">Post Comment</a>
							</form>
						</div> -->
					</div>
					<!-- End single-post Area -->
				</div>
				<div class="col-lg-4">
					<?php get_sidebar();  ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
</div>

<?php

	endwhile; // End of the loop.

get_footer();
