<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTechInfinity_News
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	
?>

<aside id="secondary" class="widget-area">
	<div class="sidebars-area">		 

		<div class="single-sidebar-widget editors-pick-widget">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>

		<div class="single-sidebar-widget ads-widget">
			<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/sidebar-ads.jpg" alt="">
		</div>

		<div class="sidebars-area">
			<div class="single-sidebar-widget newsletter-widget">
				<h6 class="title">নিউজলেটার</h6>
				<p>
					Here, I focus on a range of items
					andfeatures that we use in life without
					giving them a second thought.
				</p>
				<div class="form-group d-flex flex-row">
					<div class="col-autos">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
						</div>
					</div>
					<a href="#" class="bbtns">Subcribe</a>
				</div>
				<p>
					You can unsubscribe us at any time
				</p>
			</div>	 
			
		</div>
	</div>

</aside><!-- #secondary -->
