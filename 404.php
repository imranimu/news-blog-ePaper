<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
							<h1 class="text-white">404 Page</h1>
							<p class="text-white link-nav"><a href="<?php echo home_url();?>">Home </a>  <span class="lnr lnr-arrow-right"></span>404 Page</p>
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
						<section class="error-404 not-found">

							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pro_news' ); ?></h1>
							</header><!-- .page-header -->	

						</section><!-- .error-404 -->						
						 
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
