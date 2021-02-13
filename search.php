<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
							<h1 class="text-white">Archive Posts</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="archive.html">Archive Posts </a></p>
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
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'pro_news' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
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
