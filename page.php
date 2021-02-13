<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
				<div class="row">
					<div class="col-lg-12">
						<div class="hero-nav-area">
							<h1 class="text-white"><?php echo get_the_title(); ?></h1>
							<p class="text-white link-nav"><a href="<?php echo home_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span> <?php echo get_the_title(); ?> </p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="news-tracker-wrap">
							<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
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
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>							
						 
						<!-- End latest-post Area -->
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
