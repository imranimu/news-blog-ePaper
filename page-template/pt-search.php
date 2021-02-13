<?php
/*
	Template Name: Search Page
*/

get_header();

	if (isset($_GET['a'])) {
		$day = $_GET['a']; 
	}

	if (isset($_GET['b'])) {
		$month = $_GET['b']; 
	}

	if (isset($_GET['c'])) {
		$year = $_GET['c']; 
	}

	$search_date = $month.'/'.$day.'/'.$year; 

	$titleDate = date("d M Y", strtotime($search_date));

	$pagination_url = 'archive/?a='.$day.'&b='.$month.'&c='.$year; 

?>
	
	<div class="page_wrap contact-page-area">
		<div class="container">
			<div class="row contact-wrap">
				<div class="col-md-8">
					<div class="ePaper_wrap">						
						<div class="row ">							
							<div class="paper_pagination">
								<h2><?php echo $titleDate;?></h2>
							</div>								

							<?php

								$args=array(
			                    	'post_type' =>'epapers' ,
			                    	'posts_per_page' => -1,
			                    	'post_status' => 'Publish',
			                    	'meta_query' => array(
									    array(
									       'key' => 'news_date',
									       'value' => $search_date,
									       'compare' => 'LIKE'
									    )
								   	)
			                	);
			                
			                	query_posts( $args );
			                
				                if(have_posts()){ 

				                	$get_link = get_the_permalink(); 

				                	?>

				                	<div id="ePaper">							  			
					                	<?php

					                    while (have_posts()): the_post();
					                    	$page_one 			= get_post_meta(get_the_ID(), 'page_one', true );
					                    	$page_two 			= get_post_meta(get_the_ID(), 'page_two', true );
					                    	$page_three 		= get_post_meta(get_the_ID(), 'page_three', true );
					                    	$page_four 			= get_post_meta(get_the_ID(), 'page_four', true );
					                    	$page_five          = get_post_meta(get_the_ID(), 'page_five', true );
                                            $page_six           = get_post_meta(get_the_ID(), 'page_six', true );
                                            $page_seven         = get_post_meta(get_the_ID(), 'page_seven', true );
                                            $page_eight         = get_post_meta(get_the_ID(), 'page_eight', true );
					                    	$post_id 			= get_the_ID(); 

					                    	if ($_GET['page'] == 'page2') {	

												if ($page_two) {
						                    		$page2_image_title 		= get_post_meta($post_id, 'page2_image_title', true );
													$page2_coords_code 		= get_post_meta($post_id, 'page2_coords_code', true );
													$page2_image_link 		= get_post_meta($post_id, 'page2_image_link', true );    	
													$page2_type_nb 			= get_post_meta($post_id, 'page2_type_nb', true );
						                    		?>
													<div class="carousel-item ePaper_online active">
														
														<img src="<?php echo $page_two;?>" class="map2" usemap="#image-map2">

														<map id="imageMap2" name="image-map2">
															<?php 
																if ($page2_coords_code) {
																	echo '<area target="" alt="'.$page2_image_title.'" title="" href="'.$page2_image_link.'" coords="'.$page2_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter2 = 1; $counter2 <= $page2_type_nb; $counter2++) {

																	${'page2_image_title'.$counter2} = get_post_meta($post_id, 'page2_image_title'.$counter2.'', true ); 
																	${'page2_coords_code'.$counter2} = get_post_meta($post_id, 'page2_coords_code'.$counter2.'', true ); 
																	${'page2_image_link'.$counter2} = get_post_meta($post_id, 'page2_image_link'.$counter2.'', true );

																	echo '<area target="" alt="'.${'page2_image_title'.$counter2}.'" title="" href="'.${'page2_image_link'.$counter2}.'" coords="'.${'page2_coords_code'.$counter2}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>												 
													</div>

													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page1" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page3" class="next"></a> 
													</div>
													
						                    		<?php
						                    	}

											}elseif($_GET['page'] == 'page3'){
												 
												if ($page_three) {

						                    		$page3_image_title 		= get_post_meta($post_id, 'page3_image_title', true );
													$page3_coords_code 		= get_post_meta($post_id, 'page3_coords_code', true );
													$page3_image_link 		= get_post_meta($post_id, 'page3_image_link', true );    	
													$page3_type_nb 			= get_post_meta($post_id, 'page3_type_nb', true );

						                    		?>						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_three;?>" class="map3" usemap="#image-map3">

														<map id="imageMap3" name="image-map3">
															<?php 
																if ($page3_coords_code) {
																	echo '<area target="" alt="'.$page3_image_title.'" title="" href="'.$page3_image_link.'" coords="'.$page3_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter3 = 1; $counter3 <= $page3_type_nb; $counter3++) {

																	${'page3_image_title'.$counter3} = get_post_meta($post_id, 'page3_image_title'.$counter3.'', true ); 
																	${'page3_coords_code'.$counter3} = get_post_meta($post_id, 'page3_coords_code'.$counter3.'', true ); 
																	${'page3_image_link'.$counter3} = get_post_meta($post_id, 'page3_image_link'.$counter3.'', true );

																	echo '<area target="" alt="'.${'page3_image_title'.$counter3}.'" title="" href="'.${'page3_image_link'.$counter3}.'" coords="'.${'page3_coords_code'.$counter3}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>

													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page2" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page4" class="next"></a> 
													</div>
						                    		<?php
						                    	}
											}elseif($_GET['page'] == 'page4'){
												 
												if ($page_four) {
						                    		$page4_image_title 		= get_post_meta($post_id, 'page4_image_title', true );
													$page4_coords_code 		= get_post_meta($post_id, 'page4_coords_code', true );
													$page4_image_link 		= get_post_meta($post_id, 'page4_image_link', true );    	
													$page4_type_nb 			= get_post_meta($post_id, 'page4_type_nb', true );

						                    		?>
						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_four;?>" class="map4" usemap="#image-map4">

														<map id="imageMap4" name="image-map4">
															<?php 
																if ($page4_coords_code) {
																	echo '<area target="" alt="'.$page4_image_title.'" title="" href="'.$page4_image_link.'" coords="'.$page4_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter4 = 1; $counter4 <= $page4_type_nb; $counter4++) {

																	${'page4_image_title'.$counter4} = get_post_meta($post_id, 'page4_image_title'.$counter4.'', true ); 
																	${'page4_coords_code'.$counter4} = get_post_meta($post_id, 'page4_coords_code'.$counter4.'', true ); 
																	${'page4_image_link'.$counter4} = get_post_meta($post_id, 'page4_image_link'.$counter4.'', true );

																	echo '<area target="" alt="'.${'page4_image_title'.$counter4}.'" title="" href="'.${'page4_image_link'.$counter4}.'" coords="'.${'page4_coords_code'.$counter4}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>
													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page3" class="pre"></a>
														<?php 
                                                            if ($page_five) {
                                                                ?>
                                                                <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page5" class="next"></a> 
                                                                <?php        
                                                            }else{
                                                                ?>
                                                                <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page1" class="next"></a>  
                                                                <?php        
                                                            }
                                                        ?>
													</div>
						                    		<?php				                    		 
						                    	}
											}elseif($_GET['page'] == 'page5'){
												 
												if ($page_five) {
						                    		$page5_image_title 		= get_post_meta($post_id, 'page5_image_title', true );
													$page5_coords_code 		= get_post_meta($post_id, 'page5_coords_code', true );
													$page5_image_link 		= get_post_meta($post_id, 'page5_image_link', true );    	
													$page5_type_nb 			= get_post_meta($post_id, 'page5_type_nb', true );

						                    		?>
						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_five;?>" class="map5" usemap="#image-map5">

														<map id="imageMap5" name="image-map5">
															<?php 
																if ($page5_coords_code) {
																	echo '<area target="" alt="'.$page5_image_title.'" title="" href="'.$page5_image_link.'" coords="'.$page5_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter5 = 1; $counter5 <= $page5_type_nb; $counter5++) {

																	${'page5_image_title'.$counter5} = get_post_meta($post_id, 'page5_image_title'.$counter5.'', true ); 
																	${'page5_coords_code'.$counter5} = get_post_meta($post_id, 'page5_coords_code'.$counter5.'', true ); 
																	${'page5_image_link'.$counter5} = get_post_meta($post_id, 'page5_image_link'.$counter5.'', true );

																	echo '<area target="" alt="'.${'page5_image_title'.$counter5}.'" title="" href="'.${'page5_image_link'.$counter5}.'" coords="'.${'page5_coords_code'.$counter5}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>
													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page4" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page6" class="next"></a> 
													</div>
						                    		<?php				                    		 
						                    	}
											}elseif($_GET['page'] == 'page6'){
												 
												if ($page_six) {
						                    		$page6_image_title 		= get_post_meta($post_id, 'page6_image_title', true );
													$page6_coords_code 		= get_post_meta($post_id, 'page6_coords_code', true );
													$page6_image_link 		= get_post_meta($post_id, 'page6_image_link', true );    	
													$page6_type_nb 			= get_post_meta($post_id, 'page6_type_nb', true );

						                    		?>
						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_six;?>" class="map6" usemap="#image-map6">

														<map id="imageMap6" name="image-map6">
															<?php 
																if ($page6_coords_code) {
																	echo '<area target="" alt="'.$page6_image_title.'" title="" href="'.$page6_image_link.'" coords="'.$page6_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter6 = 1; $counter6 <= $page6_type_nb; $counter6++) {

																	${'page6_image_title'.$counter6} = get_post_meta($post_id, 'page6_image_title'.$counter6.'', true ); 
																	${'page6_coords_code'.$counter6} = get_post_meta($post_id, 'page6_coords_code'.$counter6.'', true ); 
																	${'page6_image_link'.$counter6} = get_post_meta($post_id, 'page6_image_link'.$counter6.'', true );

																	echo '<area target="" alt="'.${'page6_image_title'.$counter6}.'" title="" href="'.${'page6_image_link'.$counter6}.'" coords="'.${'page6_coords_code'.$counter6}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>
													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page5" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page7" class="next"></a> 
													</div>
						                    		<?php				                    		 
						                    	}
											}elseif($_GET['page'] == 'page7'){
												 
												if ($page_seven) {
						                    		$page7_image_title 		= get_post_meta($post_id, 'page7_image_title', true );
													$page7_coords_code 		= get_post_meta($post_id, 'page7_coords_code', true );
													$page7_image_link 		= get_post_meta($post_id, 'page7_image_link', true );    	
													$page7_type_nb 			= get_post_meta($post_id, 'page7_type_nb', true );

						                    		?>
						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_seven;?>" class="map7" usemap="#image-map7">

														<map id="imageMap7" name="image-map7">
															<?php 
																if ($page7_coords_code) {
																	echo '<area target="" alt="'.$page7_image_title.'" title="" href="'.$page7_image_link.'" coords="'.$page7_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter7 = 1; $counter7 <= $page7_type_nb; $counter7++) {

																	${'page7_image_title'.$counter7} = get_post_meta($post_id, 'page7_image_title'.$counter7.'', true ); 
																	${'page7_coords_code'.$counter7} = get_post_meta($post_id, 'page7_coords_code'.$counter7.'', true ); 
																	${'page7_image_link'.$counter7} = get_post_meta($post_id, 'page7_image_link'.$counter7.'', true );

																	echo '<area target="" alt="'.${'page7_image_title'.$counter7}.'" title="" href="'.${'page7_image_link'.$counter7}.'" coords="'.${'page7_coords_code'.$counter7}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>
													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page6" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page8" class="next"></a> 
													</div>
						                    		<?php				                    		 
						                    	}
											}elseif($_GET['page'] == 'page8'){
												 
												if ($page_eight) {
						                    		$page8_image_title 		= get_post_meta($post_id, 'page8_image_title', true );
													$page8_coords_code 		= get_post_meta($post_id, 'page8_coords_code', true );
													$page8_image_link 		= get_post_meta($post_id, 'page8_image_link', true );    	
													$page8_type_nb 			= get_post_meta($post_id, 'page8_type_nb', true );

						                    		?>
						                    		 
						                    		<div class="carousel-item ePaper_online active">
														<img src="<?php echo $page_eight;?>" class="map8" usemap="#image-map8">

														<map id="imageMap8" name="image-map8">
															<?php 
																if ($page8_coords_code) {
																	echo '<area target="" alt="'.$page8_image_title.'" title="" href="'.$page8_image_link.'" coords="'.$page8_coords_code.'" shape="rect" data-fancybox="images">'; 	
																}														

																for ($counter8 = 1; $counter8 <= $page8_type_nb; $counter8++) {

																	${'page8_image_title'.$counter8} = get_post_meta($post_id, 'page8_image_title'.$counter8.'', true ); 
																	${'page8_coords_code'.$counter8} = get_post_meta($post_id, 'page8_coords_code'.$counter8.'', true ); 
																	${'page8_image_link'.$counter8} = get_post_meta($post_id, 'page8_image_link'.$counter8.'', true );

																	echo '<area target="" alt="'.${'page8_image_title'.$counter8}.'" title="" href="'.${'page8_image_link'.$counter8}.'" coords="'.${'page8_coords_code'.$counter8}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>
													</div>
													<div class="slider_pagination">
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page7" class="pre"></a>
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page1" class="next"></a> 
													</div>
						                    		<?php				                    		 
						                    	}
											}else{												 

												if ($page_one) {

						                    		$image_title 		= get_post_meta($post_id, 'image_title', true );
													$coords_code 		= get_post_meta($post_id, 'coords_code', true );
													$image_link 		= get_post_meta($post_id, 'image_link', true );    	
													$type_nb 			= get_post_meta($post_id, 'type_nb', true );
						                    		?>	
													<div class="carousel-item active ePaper_online">
														
														<img src="<?php echo $page_one;?>" class="map" usemap="#image-map">

														<map id="imageMap" name="image-map">
															<?php 

																if ($coords_code) {
																	echo '<area target="" alt="'.$image_title.'" title="বিস্তারিত দেখুন" href="'.$image_link.'" coords="'.$coords_code.'" shape="rect" data-fancybox="images">';	
																}													 

																for ($counter = 1; $counter <= $type_nb; $counter++) {

																	${'image_title'.$counter} = get_post_meta($post_id, 'image_title'.$counter.'', true ); 
																	${'coords_code'.$counter} = get_post_meta($post_id, 'coords_code'.$counter.'', true ); 
																	${'image_link'.$counter} = get_post_meta($post_id, 'image_link'.$counter.'', true );

																	echo '<area target="" alt="'.${'image_title'.$counter}.'" title="বিস্তারিত দেখুন" href="'.${'image_link'.$counter}.'" coords="'.${'coords_code'.$counter}.'" shape="rect" data-fancybox="images">'; 
																}
															?>	
														</map>

													</div>

													<div class="slider_pagination">														
														<a href="<?php echo home_url().'/'.$pagination_url;?>&page=page2" class="next"></a> 
													</div>
						                    		<?php
						                    	}						                    	
											}
				                    	endwhile;
				                    	?>
					                </div>
			                    	<?php
			                	}else{
			                		echo '<h1 style="font-family: SolaimanLipi">খুঁজে পাওয়া যায়নি</h1>'; 
			                	}
			                ?>
						</div>
					</div>					
				</div>

				<div class="col-md-4">
					
					<div class="sidebars-area">		 
						<div class="single-sidebar-widget editors-pick-widget">

							<div class="allnews">

								<h6 class="title">সকল পাতা</h6>

								<div class="allnews_image">
                                    <?php if ($page_one): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page1' || !isset($_GET['page']) ) { echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page1" title="Page 1">
                                                <img src="<?php echo $page_one;?>" alt="">
                                            </a>
                                        </div>    
                                    <?php endif ?>
                                    <?php if ($page_two): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page2') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page2" title="Page 2">
                                                <img src="<?php echo $page_two;?>" alt="">
                                            </a>
                                        </div>                                        
                                    <?php endif ?>                                    
                                    <?php if ($page_three): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page3') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page3" title="Page 3">
                                                <img src="<?php echo $page_three;?>" alt="">
                                            </a>
                                        </div>    
                                    <?php endif ?>
                                    <?php if ($page_four): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page4') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page4" title="Page 4">
                                                <img src="<?php echo $page_four;?>" alt="">
                                            </a>
                                        </div>                                            
                                    <?php endif ?>
                                    <?php if ($page_five): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page5') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page5" title="Page 5">
                                                <img src="<?php echo $page_five;?>" alt="">
                                            </a>
                                        </div>                                            
                                    <?php endif ?>
                                    <?php if ($page_six): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page6') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page6" title="Page 6">
                                                <img src="<?php echo $page_six;?>" alt="">
                                            </a>
                                        </div>                                            
                                    <?php endif ?>
                                    <?php if ($page_seven): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page7') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page7" title="Page 7">
                                                <img src="<?php echo $page_seven;?>" alt="">
                                            </a>
                                        </div>                                            
                                    <?php endif ?>
                                    <?php if ($page_eight): ?>
                                        <div class="image_wrap <?php if ($_GET['page'] == 'page8') {echo 'active'; }?>">
                                            <a href="<?php echo home_url().'/'.$pagination_url;?>&page=page8" title="Page 8">
                                                <img src="<?php echo $page_eight;?>" alt="">
                                            </a>
                                        </div>                                            
                                    <?php endif ?>                                                                        
                                </div>
							</div>

							<div class="news_archives">				
								<h6 class="title">পুরনো সংখ্যা</h6>			

								<?php
									if (isset($_GET['a'])) {
										$today_day = $_GET['a']; 
									}else{
										$today_day 		= date('d');
									}
									if (isset($_GET['b'])) {
										$today_month = $_GET['b']; 
									}else{
										$today_month 	= date('m');
									}

									if (isset($_GET['c'])) {
										$today_year = $_GET['c']; 
									}else{
										$today_year 	= date('Y');	
									}					
								?>
								<form method="get" action="<?php echo home_url();?>/archive/">
									<div class="form-group"> 
									    <select class="d form-control" name="a" required="required"><option value="">Day</option>
									    	<option <?php if ($today_day == '01') { echo "selected"; } ?> value="01">1st</option>
									    	<option <?php if ($today_day == '02') { echo "selected"; } ?> value="02">2nd</option>
									    	<option <?php if ($today_day == '03') { echo "selected"; } ?> value="03">3rd</option>
									    	<option <?php if ($today_day == '04') { echo "selected"; } ?> value="04">4th</option>
									    	<option <?php if ($today_day == '05') { echo "selected"; } ?> value="05">5th</option>
									    	<option <?php if ($today_day == '06') { echo "selected"; } ?> value="06">6th</option>
									    	<option <?php if ($today_day == '07') { echo "selected"; } ?> value="07">7th</option>
									    	<option <?php if ($today_day == '08') { echo "selected"; } ?> value="08">8th</option>
									    	<option <?php if ($today_day == '09') { echo "selected"; } ?> value="09">9th</option>
									    	<option <?php if ($today_day == '10') { echo "selected"; } ?> value="10">10th</option>
									    	<option <?php if ($today_day == '11') { echo "selected"; } ?> value="11">11th</option>
									    	<option <?php if ($today_day == '12') { echo "selected"; } ?> value="12">12th</option>
									    	<option <?php if ($today_day == '13') { echo "selected"; } ?> value="13">13th</option>
									    	<option <?php if ($today_day == '14') { echo "selected"; } ?> value="14">14th</option>
									    	<option <?php if ($today_day == '15') { echo "selected"; } ?> value="15">15th</option>
									    	<option <?php if ($today_day == '16') { echo "selected"; } ?> value="16">16th</option>
									    	<option <?php if ($today_day == '17') { echo "selected"; } ?> value="17">17th</option>
									    	<option <?php if ($today_day == '18') { echo "selected"; } ?> value="18">18th</option>
									    	<option <?php if ($today_day == '19') { echo "selected"; } ?> value="19">19th</option>
									    	<option <?php if ($today_day == '20') { echo "selected"; } ?> value="20">20th</option>
									    	<option <?php if ($today_day == '21') { echo "selected"; } ?> value="21">21st</option>
									    	<option <?php if ($today_day == '22') { echo "selected"; } ?> value="22">22nd</option>
									    	<option <?php if ($today_day == '23') { echo "selected"; } ?> value="23">23rd</option>
									    	<option <?php if ($today_day == '24') { echo "selected"; } ?> value="24">24th</option>
									    	<option <?php if ($today_day == '25') { echo "selected"; } ?> value="25">25th</option>
									    	<option <?php if ($today_day == '26') { echo "selected"; } ?> value="26">26th</option>
									    	<option <?php if ($today_day == '27') { echo "selected"; } ?> value="27">27th</option>
									    	<option <?php if ($today_day == '28') { echo "selected"; } ?> value="28">28th</option>
									    	<option <?php if ($today_day == '29') { echo "selected"; } ?> value="29">29th</option>
									    	<option <?php if ($today_day == '30') { echo "selected"; } ?> value="30">30th</option>
									    	<option <?php if ($today_day == '31') { echo "selected"; } ?> value="31">31st</option>
									    </select>
									</div>
									<div class="form-group"> 
									    <select class="month form-control" name="b" required="required">
									    	<option value="">Month</option>
									    	<option <?php if ($today_month == '01') { echo "selected"; } ?> value="01">Jan</option>
									    	<option <?php if ($today_month == '02') { echo "selected"; } ?> value="02">Feb</option>
									    	<option <?php if ($today_month == '03') { echo "selected"; } ?> value="03">Mar</option>
									    	<option <?php if ($today_month == '04') { echo "selected"; } ?> value="04">Apr</option>
									    	<option <?php if ($today_month == '05') { echo "selected"; } ?> value="05">May</option>
									    	<option <?php if ($today_month == '06') { echo "selected"; } ?> value="06">Jun</option>
									    	<option <?php if ($today_month == '07') { echo "selected"; } ?> value="07">Jul</option>
									    	<option <?php if ($today_month == '08') { echo "selected"; } ?> value="08">Aug</option>
									    	<option <?php if ($today_month == '09') { echo "selected"; } ?> value="09">Sep</option>
									    	<option <?php if ($today_month == '10') { echo "selected"; } ?> value="10">Oct</option>
									    	<option <?php if ($today_month == '11') { echo "selected"; } ?> value="11">Nov</option>
									    	<option <?php if ($today_month == '12') { echo "selected"; } ?> value="12">Dec</option>
									    </select>
									</div>
									<div class="form-group">
									    <select class="year form-control" name="c" required="required"><option value="">Year</option>
									    	<option <?php if ($today_year == '2019') { echo "selected"; } ?> value="2019">2019</option>
									    	<option <?php if ($today_year == '2018') { echo "selected"; } ?> value="2018">2018</option> 
									    </select>
									</div>
									<button class="bbtns">Go</button>
								</form>
							</div>

							<div style="margin-top: 20px;" class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/sidebar-ads.jpg" alt="">
							</div>

						</div>
					</div>
					<?php // get_sidebar(); ?>				 	
				</div><!-- /.col-md-4 -->				 
			</div>
		</div>
	</div> 
<?php

get_footer();