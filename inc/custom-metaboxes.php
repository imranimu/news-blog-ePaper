<?php 
/*
## Add Custom Metaboxes
## Post type: epapers
*********************************/
function certificates_type_metaboxes( ) {
   
   global $wp_meta_boxes;

   add_meta_box('postfunctiondiv', __('Page 1'), 'certificates_type_functions', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs', __('Page 2'), 'ePaperpage2', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs3', __('Page 3'), 'ePaperpage3', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs4', __('Page 4'), 'ePaperpage4', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs5', __('Page 5'), 'ePaperpage5', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs6', __('Page 6'), 'ePaperpage6', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs7', __('Page 7'), 'ePaperpage7', 'epapers', 'normal', 'high');

   add_meta_box('postfunctiondivs8', __('Page 8'), 'ePaperpage8', 'epapers', 'normal', 'high');

}
add_action( 'add_meta_boxes_epapers', 'certificates_type_metaboxes' );

/*
## Function : certificates_type_functions
## Custom Metaboxes Fields
## Post type: epapers
***********************************************/
function certificates_type_functions(){  

	global $post;   

	$post_id 			= $post->ID; 
	$image_title 		= get_post_meta($post_id, 'image_title', true );
	$coords_code 		= get_post_meta($post_id, 'coords_code', true );
	$image_link 		= get_post_meta($post_id, 'image_link', true );    	
	$type_nb 			= get_post_meta($post_id, 'type_nb', true );	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/			 
    ?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>
		
		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="image_title" size="60" placeholder="Input Image Title" value="<?php echo $image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="image_link" size="60" placeholder="Input Image Link" value="<?php echo $image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add">
		<?php 
			for ($counter = 1; $counter <= $type_nb; $counter++) {

				${'image_title'.$counter} = get_post_meta($post_id, 'image_title'.$counter.'', true ); 
				${'coords_code'.$counter} = get_post_meta($post_id, 'coords_code'.$counter.'', true ); 
				${'image_link'.$counter} = get_post_meta($post_id, 'image_link'.$counter.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter;?>">
					
					<a href="#" class="removeField" page="page1" field-id="<?php echo $counter;?>">X</a>

					<h1>Layer <?php echo $counter;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="image_title<?php echo $counter;?>" size="57" placeholder="Input Image Title" value="<?php echo ${'image_title'.$counter};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="coords_code<?php echo $counter;?>" size="57" placeholder="Input Coords Code" value="<?php echo ${'coords_code'.$counter};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="image_link<?php echo $counter;?>" size="57" placeholder="Input Image Link" value="<?php echo ${'image_link'.$counter};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="type_nb" id="type_nb" value="<?php if($type_nb){ echo $type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb" id="page_nb" value="page1">

		<a class="addmore_type button button-primary button-large" href="#">Add More</a>

	</div>

<?php

}

/*
## Page 2
******************/
function ePaperpage2(){
	global $post;   

	$post_id 				= $post->ID; 
	$page2_image_title 		= get_post_meta($post_id, 'page2_image_title', true );
	$page2_coords_code 		= get_post_meta($post_id, 'page2_coords_code', true );
	$page2_image_link 		= get_post_meta($post_id, 'page2_image_link', true );    	
	$page2_type_nb 			= get_post_meta($post_id, 'page2_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page2_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page2_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page2_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page2_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page2_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page2_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add2">
		<?php 
			for ($counter2 = 1; $counter2 <= $page2_type_nb; $counter2++) {

				${'page2_image_title'.$counter2} = get_post_meta($post_id, 'page2_image_title'.$counter2.'', true ); 
				${'page2_coords_code'.$counter2} = get_post_meta($post_id, 'page2_coords_code'.$counter2.'', true ); 
				${'page2_image_link'.$counter2} = get_post_meta($post_id, 'page2_image_link'.$counter2.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter2;?>">
					
					<a href="#" class="removeField" page="page2" field-id="<?php echo $counter2;?>">X</a>

					<h1>Layer <?php echo $counter2;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page2_image_title<?php echo $counter2;?>" size="57" placeholder="Input Image Title" value="<?php echo ${'page2_image_title'.$counter2};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page2_coords_code<?php echo $counter2;?>" size="57" placeholder="Input Coords Code" value="<?php echo ${'page2_coords_code'.$counter2};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page2_image_link<?php echo $counter2;?>" size="57" placeholder="Input Image Link" value="<?php echo ${'page2_image_link'.$counter2};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page2_type_nb" id="page2_type_nb" value="<?php if($page2_type_nb){ echo $page2_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb2" id="page_nb2" value="page2">

		<a class="addmore_type2 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 3
******************/
function ePaperpage3(){
	global $post;   

	$post_id 				= $post->ID; 
	$page3_image_title 		= get_post_meta($post_id, 'page3_image_title', true );
	$page3_coords_code 		= get_post_meta($post_id, 'page3_coords_code', true );
	$page3_image_link 		= get_post_meta($post_id, 'page3_image_link', true );    	
	$page3_type_nb 			= get_post_meta($post_id, 'page3_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page3_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page3_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page3_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page3_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page3_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page3_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add3">
		<?php 
			for ($counter3 = 1; $counter3 <= $page3_type_nb; $counter3++) {

				${'page3_image_title'.$counter3} = get_post_meta($post_id, 'page3_image_title'.$counter3.'', true ); 
				${'page3_coords_code'.$counter3} = get_post_meta($post_id, 'page3_coords_code'.$counter3.'', true ); 
				${'page3_image_link'.$counter3} = get_post_meta($post_id, 'page3_image_link'.$counter3.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter3;?>">
					
					<a href="#" class="removeField" page="page3" field-id="<?php echo $counter3;?>">X</a>

					<h1>Layer <?php echo $counter3;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page3_image_title<?php echo $counter3;?>" size="57" placeholder="Input Image Title" value="<?php echo ${'page3_image_title'.$counter3};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page3_coords_code<?php echo $counter3;?>" size="57" placeholder="Input Coords Code" value="<?php echo ${'page3_coords_code'.$counter3};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page3_image_link<?php echo $counter3;?>" size="57" placeholder="Input Image Link" value="<?php echo ${'page3_image_link'.$counter3};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page3_type_nb" id="page3_type_nb" value="<?php if($page3_type_nb){ echo $page3_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb3" id="page_nb3" value="page3">

		<a class="addmore_type3 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 4
******************/
function ePaperpage4(){
	global $post;   

	$post_id 				= $post->ID; 
	$page4_image_title 		= get_post_meta($post_id, 'page4_image_title', true); 
	$page4_coords_code 		= get_post_meta($post_id, 'page4_coords_code', true );
	$page4_image_link 		= get_post_meta($post_id, 'page4_image_link', true );    	
	$page4_type_nb 			= get_post_meta($post_id, 'page4_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page4_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page4_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page4_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page4_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page4_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page4_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add4">
		<?php 
			for ($counter4 = 1; $counter4 <= $page4_type_nb; $counter4++) {

				${'page4_image_title'.$counter4} = get_post_meta($post_id, 'page4_image_title'.$counter4.'', true ); 
				${'page4_coords_code'.$counter4} = get_post_meta($post_id, 'page4_coords_code'.$counter4.'', true ); 
				${'page4_image_link'.$counter4} = get_post_meta($post_id, 'page4_image_link'.$counter4.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter4;?>">
					
					<a href="#" class="removeField" page="page4" field-id="<?php echo $counter4;?>">X</a>

					<h1>Layer <?php echo $counter4;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page4_image_title<?php echo $counter4;?>" size="57" placeholder="Input Image Title" value="<?php echo ${'page4_image_title'.$counter4};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page4_coords_code<?php echo $counter4;?>" size="57" placeholder="Input Coords Code" value="<?php echo ${'page4_coords_code'.$counter4};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page4_image_link<?php echo $counter4;?>" size="57" placeholder="Input Image Link" value="<?php echo ${'page4_image_link'.$counter4};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page4_type_nb" id="page4_type_nb" value="<?php if($page4_type_nb){ echo $page4_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb4" id="page_nb4" value="page4">

		<a class="addmore_type4 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 5
******************/
function ePaperpage5(){
	global $post;   

	$post_id 				= $post->ID; 
	$page5_image_title 		= get_post_meta($post_id, 'page5_image_title', true); 
	$page5_coords_code 		= get_post_meta($post_id, 'page5_coords_code', true );
	$page5_image_link 		= get_post_meta($post_id, 'page5_image_link', true );    	
	$page5_type_nb 			= get_post_meta($post_id, 'page5_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page5_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page5_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page5_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page5_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page5_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page5_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add5">
		<?php 
			for ($counter5 = 1; $counter5 <= $page5_type_nb; $counter5++) {

				${'page5_image_title'.$counter5} = get_post_meta($post_id, 'page5_image_title'.$counter5.'', true ); 
				${'page5_coords_code'.$counter5} = get_post_meta($post_id, 'page5_coords_code'.$counter5.'', true ); 
				${'page5_image_link'.$counter5} = get_post_meta($post_id, 'page5_image_link'.$counter5.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter5;?>">
					
					<a href="#" class="removeField" page="page5" field-id="<?php echo $counter5;?>">X</a>

					<h1>Layer <?php echo $counter5;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page5_image_title<?php echo $counter5;?>" size="57" placeholder="Input Image Title" value="<?php echo ${'page5_image_title'.$counter5};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page5_coords_code<?php echo $counter5;?>" size="57" placeholder="Input Coords Code" value="<?php echo ${'page5_coords_code'.$counter5};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page5_image_link<?php echo $counter5;?>" size="57" placeholder="Input Image Link" value="<?php echo ${'page5_image_link'.$counter5};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page5_type_nb" id="page5_type_nb" value="<?php if($page5_type_nb){ echo $page5_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb5" id="page_nb5" value="page5">

		<a class="addmore_type5 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 6
******************/
function ePaperpage6(){
	global $post;   

	$post_id 				= $post->ID; 
	$page6_image_title 		= get_post_meta($post_id, 'page6_image_title', true); 
	$page6_coords_code 		= get_post_meta($post_id, 'page6_coords_code', true );
	$page6_image_link 		= get_post_meta($post_id, 'page6_image_link', true );    	
	$page6_type_nb 			= get_post_meta($post_id, 'page6_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page6_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page6_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page6_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page6_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page6_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page6_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add6">
		<?php 
			for ($counter6 = 1; $counter6 <= $page6_type_nb; $counter6++) {

				${'page6_image_title'.$counter6} = get_post_meta($post_id, 'page6_image_title'.$counter6.'', true ); 
				${'page6_coords_code'.$counter6} = get_post_meta($post_id, 'page6_coords_code'.$counter6.'', true ); 
				${'page6_image_link'.$counter6} = get_post_meta($post_id, 'page6_image_link'.$counter6.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter6;?>">
					
					<a href="#" class="removeField" page="page6" field-id="<?php echo $counter6;?>">X</a>

					<h1>Layer <?php echo $counter6;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page6_image_title<?php echo $counter6;?>" size="67" placeholder="Input Image Title" value="<?php echo ${'page6_image_title'.$counter6};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page6_coords_code<?php echo $counter6;?>" size="67" placeholder="Input Coords Code" value="<?php echo ${'page6_coords_code'.$counter6};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page6_image_link<?php echo $counter6;?>" size="67" placeholder="Input Image Link" value="<?php echo ${'page6_image_link'.$counter6};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page6_type_nb" id="page6_type_nb" value="<?php if($page6_type_nb){ echo $page6_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb6" id="page_nb6" value="page6">

		<a class="addmore_type6 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 7
******************/
function ePaperpage7(){
	global $post;   

	$post_id 				= $post->ID; 
	$page7_image_title 		= get_post_meta($post_id, 'page7_image_title', true); 
	$page7_coords_code 		= get_post_meta($post_id, 'page7_coords_code', true );
	$page7_image_link 		= get_post_meta($post_id, 'page7_image_link', true );    	
	$page7_type_nb 			= get_post_meta($post_id, 'page7_type_nb', true );   	

	/*$post_meta = get_post_meta($post->ID); 
   	echo '<pre>';
		print_r($post_meta); 
	echo '</pre>';*/

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page7_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page7_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page7_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page7_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page7_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page7_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add7">
		<?php 
			for ($counter7 = 1; $counter7 <= $page7_type_nb; $counter7++) {

				${'page7_image_title'.$counter7} = get_post_meta($post_id, 'page7_image_title'.$counter7.'', true ); 
				${'page7_coords_code'.$counter7} = get_post_meta($post_id, 'page7_coords_code'.$counter7.'', true ); 
				${'page7_image_link'.$counter7} = get_post_meta($post_id, 'page7_image_link'.$counter7.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter7;?>">
					
					<a href="#" class="removeField" page="page7" field-id="<?php echo $counter7;?>">X</a>

					<h1>Layer <?php echo $counter7;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page7_image_title<?php echo $counter7;?>" size="77" placeholder="Input Image Title" value="<?php echo ${'page7_image_title'.$counter7};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page7_coords_code<?php echo $counter7;?>" size="77" placeholder="Input Coords Code" value="<?php echo ${'page7_coords_code'.$counter7};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page7_image_link<?php echo $counter7;?>" size="77" placeholder="Input Image Link" value="<?php echo ${'page7_image_link'.$counter7};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page7_type_nb" id="page7_type_nb" value="<?php if($page7_type_nb){ echo $page7_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb7" id="page_nb7" value="page7">

		<a class="addmore_type7 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Page 8
******************/
function ePaperpage8(){
	global $post;   

	$post_id 				= $post->ID; 
	$page8_image_title 		= get_post_meta($post_id, 'page8_image_title', true); 
	$page8_coords_code 		= get_post_meta($post_id, 'page8_coords_code', true );
	$page8_image_link 		= get_post_meta($post_id, 'page8_image_link', true );    	
	$page8_type_nb 			= get_post_meta($post_id, 'page8_type_nb', true );   		 

	?>   	
	<div class="contact_wrap">

		<h1>Layer</h1>

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image title</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page8_image_title" size="60" placeholder="Input Image Title" value="<?php echo $page8_image_title;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>

	    <div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Coords Code</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page8_coords_code" size="60" placeholder="Input Coords Code" value="<?php echo $page8_coords_code;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>	

		<div class="filed_wrap">	    	
	    	<span class="field_label">	    	     			 
	    		<label>Input Image link</label>	    		 
	    	</span>
	    	<span class="input_field">     		    	
		    	<input name="page8_image_link" size="60" placeholder="Input Image Link" value="<?php echo $page8_image_link;?>" type="text">				
			</span>	
			<p style="clear:left"></p>		
		</div>		 
	</div>

	<div class="more_add8">
		<?php 
			for ($counter8 = 1; $counter8 <= $page8_type_nb; $counter8++) {

				${'page8_image_title'.$counter8} = get_post_meta($post_id, 'page8_image_title'.$counter8.'', true ); 
				${'page8_coords_code'.$counter8} = get_post_meta($post_id, 'page8_coords_code'.$counter8.'', true ); 
				${'page8_image_link'.$counter8} = get_post_meta($post_id, 'page8_image_link'.$counter8.'', true ); 
				
				?>
				<div class="contact_wrap" id="field_<?php echo $counter8;?>">
					
					<a href="#" class="removeField" page="page8" field-id="<?php echo $counter8;?>">X</a>

					<h1>Layer <?php echo $counter8;?></h1>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page8_image_title<?php echo $counter8;?>" size="87" placeholder="Input Image Title" value="<?php echo ${'page8_image_title'.$counter8};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="page8_coords_code<?php echo $counter8;?>" size="87" placeholder="Input Coords Code" value="<?php echo ${'page8_coords_code'.$counter8};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="page8_image_link<?php echo $counter8;?>" size="87" placeholder="Input Image Link" value="<?php echo ${'page8_image_link'.$counter8};?>" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

				</div>
				<?php
			}
		?>
	</div>

	<div class="add_more">

		<input type="hidden" name="page8_type_nb" id="page8_type_nb" value="<?php if($page8_type_nb){ echo $page8_type_nb;}else{echo 0;} ?>">

		<input type="hidden" name="page_nb8" id="page_nb8" value="page8">

		<a class="addmore_type8 button button-primary button-large" href="#">Add More</a>

	</div>

	<?php
}

/*
## Save Custom metabox data
## Post Type : epapers
## Save dynamic field data 
*********************************/
function certificates_type_save_post()
{
    if(empty($_POST)) return;

    global $post;        

    /*
	## Page 1
    **************************/
    update_post_meta($post->ID, "image_title", $_POST["image_title"]);
    update_post_meta($post->ID, "coords_code", $_POST["coords_code"]);
    update_post_meta($post->ID, "image_link", $_POST["image_link"]);   
    update_post_meta($post->ID, "type_nb", $_POST["type_nb"]);      

    for ($count = 1; $count <= $_POST["type_nb"]; $count++) {
		
		${'image_title'.$count} = $_POST['image_title'.$count.''];
		${'coords_code'.$count} = $_POST['coords_code'.$count.''];
		${'image_link'.$count} = $_POST['image_link'.$count.''];
		
		update_post_meta($post->ID, 'image_title'.$count.'', ${'image_title'.$count});
		update_post_meta($post->ID, 'coords_code'.$count.'', ${'coords_code'.$count});
		update_post_meta($post->ID, 'image_link'.$count.'', ${'image_link'.$count});
		
	}

	/*
	## Page 2
	********************/	
	update_post_meta($post->ID, "page2_image_title", $_POST["page2_image_title"]);
    update_post_meta($post->ID, "page2_coords_code", $_POST["page2_coords_code"]);
    update_post_meta($post->ID, "page2_image_link", $_POST["page2_image_link"]);     
    update_post_meta($post->ID, "page2_type_nb", $_POST["page2_type_nb"]);    

    for ($count2 = 1; $count2 <= $_POST["page2_type_nb"]; $count2++) {
		
		${'page2_image_title'.$count2} = $_POST['page2_image_title'.$count2.''];
		${'page2_coords_code'.$count2} = $_POST['page2_coords_code'.$count2.''];
		${'page2_image_link'.$count2} = $_POST['page2_image_link'.$count2.''];
		
		update_post_meta($post->ID, 'page2_image_title'.$count2.'', ${'page2_image_title'.$count2});
		update_post_meta($post->ID, 'page2_coords_code'.$count2.'', ${'page2_coords_code'.$count2});
		update_post_meta($post->ID, 'page2_image_link'.$count2.'', ${'page2_image_link'.$count2});
		
	}

	/*
	## Page 3
	********************/	
	update_post_meta($post->ID, "page3_image_title", $_POST["page3_image_title"]);
    update_post_meta($post->ID, "page3_coords_code", $_POST["page3_coords_code"]);
    update_post_meta($post->ID, "page3_image_link", $_POST["page3_image_link"]);     
    update_post_meta($post->ID, "page3_type_nb", $_POST["page3_type_nb"]);    

    for ($count3 = 1; $count3 <= $_POST["page3_type_nb"]; $count3++) {
		
		${'page3_image_title'.$count3} = $_POST['page3_image_title'.$count3.''];
		${'page3_coords_code'.$count3} = $_POST['page3_coords_code'.$count3.''];
		${'page3_image_link'.$count3} = $_POST['page3_image_link'.$count3.''];
		
		update_post_meta($post->ID, 'page3_image_title'.$count3.'', ${'page3_image_title'.$count3});
		update_post_meta($post->ID, 'page3_coords_code'.$count3.'', ${'page3_coords_code'.$count3});
		update_post_meta($post->ID, 'page3_image_link'.$count3.'', ${'page3_image_link'.$count3});
		
	}

	/*
	## Page 4
	********************/	
	update_post_meta($post->ID, "page4_image_title", $_POST["page4_image_title"]);
    update_post_meta($post->ID, "page4_coords_code", $_POST["page4_coords_code"]);
    update_post_meta($post->ID, "page4_image_link", $_POST["page4_image_link"]);     
    update_post_meta($post->ID, "page4_type_nb", $_POST["page4_type_nb"]);    

    for ($count4 = 1; $count4 <= $_POST["page4_type_nb"]; $count4++) {
		
		${'page4_image_title'.$count4} = $_POST['page4_image_title'.$count4.''];
		${'page4_coords_code'.$count4} = $_POST['page4_coords_code'.$count4.''];
		${'page4_image_link'.$count4} = $_POST['page4_image_link'.$count4.''];
		
		update_post_meta($post->ID, 'page4_image_title'.$count4.'', ${'page4_image_title'.$count4});
		update_post_meta($post->ID, 'page4_coords_code'.$count4.'', ${'page4_coords_code'.$count4});
		update_post_meta($post->ID, 'page4_image_link'.$count4.'', ${'page4_image_link'.$count4});
		
	}

	/*
	## Page 5
	********************/	
	update_post_meta($post->ID, "page5_image_title", $_POST["page5_image_title"]);
    update_post_meta($post->ID, "page5_coords_code", $_POST["page5_coords_code"]);
    update_post_meta($post->ID, "page5_image_link", $_POST["page5_image_link"]);     
    update_post_meta($post->ID, "page5_type_nb", $_POST["page5_type_nb"]);    

    for ($count5 = 1; $count5 <= $_POST["page5_type_nb"]; $count5++) {
		
		${'page5_image_title'.$count5} = $_POST['page5_image_title'.$count5.''];
		${'page5_coords_code'.$count5} = $_POST['page5_coords_code'.$count5.''];
		${'page5_image_link'.$count5} = $_POST['page5_image_link'.$count5.''];
		
		update_post_meta($post->ID, 'page5_image_title'.$count5.'', ${'page5_image_title'.$count5});
		update_post_meta($post->ID, 'page5_coords_code'.$count5.'', ${'page5_coords_code'.$count5});
		update_post_meta($post->ID, 'page5_image_link'.$count5.'', ${'page5_image_link'.$count5});
		
	}

	/*
	## Page 6
	********************/	
	update_post_meta($post->ID, "page6_image_title", $_POST["page6_image_title"]);
    update_post_meta($post->ID, "page6_coords_code", $_POST["page6_coords_code"]);
    update_post_meta($post->ID, "page6_image_link", $_POST["page6_image_link"]);     
    update_post_meta($post->ID, "page6_type_nb", $_POST["page6_type_nb"]);    

    for ($count6 = 1; $count6 <= $_POST["page6_type_nb"]; $count6++) {
		
		${'page6_image_title'.$count6} = $_POST['page6_image_title'.$count6.''];
		${'page6_coords_code'.$count6} = $_POST['page6_coords_code'.$count6.''];
		${'page6_image_link'.$count6} = $_POST['page6_image_link'.$count6.''];
		
		update_post_meta($post->ID, 'page6_image_title'.$count6.'', ${'page6_image_title'.$count6});
		update_post_meta($post->ID, 'page6_coords_code'.$count6.'', ${'page6_coords_code'.$count6});
		update_post_meta($post->ID, 'page6_image_link'.$count6.'', ${'page6_image_link'.$count6});
		
	}

	/*
	## Page 7
	********************/	
	update_post_meta($post->ID, "page7_image_title", $_POST["page7_image_title"]);
    update_post_meta($post->ID, "page7_coords_code", $_POST["page7_coords_code"]);
    update_post_meta($post->ID, "page7_image_link", $_POST["page7_image_link"]);     
    update_post_meta($post->ID, "page7_type_nb", $_POST["page7_type_nb"]);    

    for ($count7 = 1; $count7 <= $_POST["page7_type_nb"]; $count7++) {
		
		${'page7_image_title'.$count7} = $_POST['page7_image_title'.$count7.''];
		${'page7_coords_code'.$count7} = $_POST['page7_coords_code'.$count7.''];
		${'page7_image_link'.$count7} = $_POST['page7_image_link'.$count7.''];
		
		update_post_meta($post->ID, 'page7_image_title'.$count7.'', ${'page7_image_title'.$count7});
		update_post_meta($post->ID, 'page7_coords_code'.$count7.'', ${'page7_coords_code'.$count7});
		update_post_meta($post->ID, 'page7_image_link'.$count7.'', ${'page7_image_link'.$count7});
		
	}

	/*
	## Page 8
	********************/	
	update_post_meta($post->ID, "page8_image_title", $_POST["page8_image_title"]);
    update_post_meta($post->ID, "page8_coords_code", $_POST["page8_coords_code"]);
    update_post_meta($post->ID, "page8_image_link", $_POST["page8_image_link"]);     
    update_post_meta($post->ID, "page8_type_nb", $_POST["page8_type_nb"]);    

    for ($count8 = 1; $count8 <= $_POST["page8_type_nb"]; $count8++) {
		
		${'page8_image_title'.$count8} = $_POST['page8_image_title'.$count8.''];
		${'page8_coords_code'.$count8} = $_POST['page8_coords_code'.$count8.''];
		${'page8_image_link'.$count8} = $_POST['page8_image_link'.$count8.''];
		
		update_post_meta($post->ID, 'page8_image_title'.$count8.'', ${'page8_image_title'.$count8});
		update_post_meta($post->ID, 'page8_coords_code'.$count8.'', ${'page8_coords_code'.$count8});
		update_post_meta($post->ID, 'page8_image_link'.$count8.'', ${'page8_image_link'.$count8});
		
	}

}   

add_action( 'save_post_epapers', 'certificates_type_save_post' );   