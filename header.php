<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTechInfinity_News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">	

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header> 
		<div class="logo-wrap">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					
					<div style="margin-bottom: 20px; font-size: 20px;" class="col-md-12 under text-center">নির্মানাধীন</div>

					<div class="col-lg-6 col-md-6 col-sm-6 logo-left no-padding">
						<a href="<?php echo home_url(); ?>">
							<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/elogo.png" alt="">
						</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 header_right no-padding">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>							
						</ul>
					</div>					 
				</div>
			</div>
		</div>		 
	</header>
