<?php 
	
/*****************************************************
## Post Type: Daily News 
*****************************************************/

add_action('init', 'janmobhumi_ePaper');

function janmobhumi_ePaper() {
	register_post_type(
		'epapers',
		array(
			'labels' => array(
			'name' => 'ePapers',			
			'all_items' => 'All ePapers',
			'singular_name' => 'ePaper',
			'add_new_item'=>'Add New ePaper'

			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'epapers'),
			'supports' => array('title', 'thumbnail' ),
			'can_export' => true,
			'hierachical' => true,
					
		)
	);
	
}


