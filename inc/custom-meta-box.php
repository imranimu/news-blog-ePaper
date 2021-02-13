<?php 

/*
## Add custom Meta box
## Post Type: Posts
## Upload Page Image for Slider
***************************************************/
function janmobhumi_page_options( $meta_boxes ) {
    $prefix = '_cmb_'; // Prefix for all fields
    $meta_boxes['janmobhumi_page_options'] = array(
        'id' => 'janmobhumi_page_options',
        'title' => 'Page Optoins',
        'pages' => array('epapers'), // post type
        'fields' => array(	   

        	array(
        		'name' => 'News Date',
				'id'   => 'news_date',
				'type' => 'text_date',
				'date_format' => 'l jS \of F Y',
        	),     	 
				
			array(
				'name'         => __( 'Page 1', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 1 Image', 'janmobhumi' ),
				'id'           => 'page_one',
				'type'         => 'file'	
			), 

			array(
				'name'         => __( 'Page 2', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 2 Image', 'janmobhumi' ),
				'id'           => 'page_two',
				'type'         => 'file'	
			),		 

			array(
				'name'         => __( 'Page 3', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 3 Image', 'janmobhumi' ),
				'id'           => 'page_three',
				'type'         => 'file'	
			), 

			array(
				'name'         => __( 'Page 4', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 4 Image', 'janmobhumi' ),
				'id'           => 'page_four',
				'type'         => 'file'	
			),

			array(
				'name'         => __( 'Page 5', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 5 Image', 'janmobhumi' ),
				'id'           => 'page_five',
				'type'         => 'file'	
			),

			array(
				'name'         => __( 'Page 6', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 6 Image', 'janmobhumi' ),
				'id'           => 'page_six',
				'type'         => 'file'	
			),

			array(
				'name'         => __( 'Page 7', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 7 Image', 'janmobhumi' ),
				'id'           => 'page_seven',
				'type'         => 'file'	
			),

			array(
				'name'         => __( 'Page 8', 'janmobhumi' ),
				'desc'         => __( 'Upload your Page 8 Image', 'janmobhumi' ),
				'id'           => 'page_eight',
				'type'         => 'file'	
			)
	    ),
	);
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'janmobhumi_page_options' );

/*
## Custom Meta box
## Post Type: All Post Types 
## Initialize the metabox class
*************************************/
add_action( 'init', 'janmobhumi_listing_meta_boxes', 9999 );
function janmobhumi_listing_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
}

/*
## Ajax Function
## Function: certificates_type_ajax
## Meta fileds append
*********************************************/
add_action( 'wp_ajax_nopriv_certificates_type_ajax', 'certificates_type_ajax' );
add_action( 'wp_ajax_certificates_type_ajax', 'certificates_type_ajax' );

if( !function_exists('certificates_type_ajax') ): 

function certificates_type_ajax() { 

	$type_nb = $_REQUEST['type_nb'];  

	$page_nb = $_REQUEST['page_nb']; 

    $form_counter = $type_nb + 1;
    
    if ($page_nb == 'page1') {
		$dynamic = '';     	
    }else if($page_nb == 'page2'){
    	$dynamic = 'page2_';
    }else if($page_nb == 'page3'){
    	$dynamic = 'page3_';
    }else if($page_nb == 'page4'){
    	$dynamic = 'page4_';
    }else if($page_nb == 'page5'){
    	$dynamic = 'page5_';
    }else if($page_nb == 'page6'){
    	$dynamic = 'page6_';
    }else if($page_nb == 'page7'){
    	$dynamic = 'page7_';
    }else if($page_nb == 'page8'){
    	$dynamic = 'page8_';
    }

	$output .= '<div class="contact_wrap" id="field_'.$form_counter.'">
					
					<a href="#" class="removeField" page="'.$page_nb.'" field-id="'.$form_counter.'">X</a>

					<h1>Layer '.$form_counter.'</h1>

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image Title</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="'.$dynamic.'image_title'.$form_counter.'" size="57" placeholder="Input Image Title" value="" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				    <div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Coords Code</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    	
					    	<input name="'.$dynamic.'coords_code'.$form_counter.'" size="57" placeholder="Input Coords Code" value="" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>	

					<div class="filed_wrap">	    	
				    	<span class="field_label">	    	     			 
				    		<label>Input Image link</label>	    		 
				    	</span>
				    	<span class="input_field">     		    						    					
					    	<input name="'.$dynamic.'image_link'.$form_counter.'" size="57" placeholder="Input Image Link" value="" type="text">
						</span>	
						<p style="clear:left"></p>		
					</div>

				</div>';

	
	$return_string = array('msg' => $output, 'count_form' => $form_counter);

    $data['result'] = $return_string;
    
    echo json_encode($data);

die(); 

}

endif;