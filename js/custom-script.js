(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	jQuery(document).ready(function(jQuery) {

		//alert('Loaded....'); 

		/*
		## Page 1 jQurey 
		**********************/
		jQuery('.addmore_type').click(function(){

	        var type_nb = jQuery("#type_nb").val();

	        var page_nb = jQuery("#page_nb").val(); 	                

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : type_nb,
                    'page_nb'   : page_nb
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#type_nb').val(form_count);

	                jQuery('.more_add').append(form_content);	                

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            }); 
	        return false; 		        
	    });

	    /*
		## Page 2 jQurey 
		**********************/
		jQuery('.addmore_type2').click(function(){			

	        var page2_type_nb = jQuery("#page2_type_nb").val(); 	  

	        var page_nb2 = jQuery("#page_nb2").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page2_type_nb,
                    'page_nb'   : page_nb2               
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page2_type_nb').val(form_count);

	                jQuery('.more_add2').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 3 jQurey 
		**********************/
		jQuery('.addmore_type3').click(function(){			

	        var page3_type_nb = jQuery("#page3_type_nb").val(); 	

	        var page_nb3 = jQuery("#page_nb3").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page3_type_nb,
                    'page_nb'   : page_nb3
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page3_type_nb').val(form_count);

	                jQuery('.more_add3').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 4 jQurey 
		**********************/
		jQuery('.addmore_type4').click(function(){			

	        var page4_type_nb = jQuery("#page4_type_nb").val(); 	

	        var page_nb4 = jQuery("#page_nb4").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page4_type_nb,
                    'page_nb'   : page_nb4
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page4_type_nb').val(form_count);

	                jQuery('.more_add4').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 5 jQurey 
		**********************/
		jQuery('.addmore_type5').click(function(){			

	        var page5_type_nb = jQuery("#page5_type_nb").val(); 	

	        var page_nb5 = jQuery("#page_nb5").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page5_type_nb,
                    'page_nb'   : page_nb5
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page5_type_nb').val(form_count);

	                jQuery('.more_add5').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 6 jQurey 
		**********************/
		jQuery('.addmore_type6').click(function(){			

	        var page6_type_nb = jQuery("#page6_type_nb").val(); 	

	        var page_nb6 = jQuery("#page_nb6").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page6_type_nb,
                    'page_nb'   : page_nb6
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page6_type_nb').val(form_count);

	                jQuery('.more_add6').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 7 jQurey 
		**********************/
		jQuery('.addmore_type7').click(function(){			

	        var page7_type_nb = jQuery("#page7_type_nb").val(); 	

	        var page_nb7 = jQuery("#page_nb7").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page7_type_nb,
                    'page_nb'   : page_nb7
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page7_type_nb').val(form_count);

	                jQuery('.more_add7').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

	    /*
		## Page 8 jQurey 
		**********************/
		jQuery('.addmore_type8').click(function(){			

	        var page8_type_nb = jQuery("#page8_type_nb").val(); 	

	        var page_nb8 = jQuery("#page_nb8").val(); 	        

	        jQuery.ajax({
                type: 'POST',                
                url: ajaxurl,
                data: {
                    'action'    : 'certificates_type_ajax',
                    'type_nb'   : page8_type_nb,
                    'page_nb'   : page_nb8
                },

                success: function(msg) { 

                    var res = $.parseJSON(msg);

	                var form_content = res.result.msg;	

	                var form_count = res.result.count_form;

	                jQuery('#page8_type_nb').val(form_count);

	                jQuery('.more_add8').append(form_content);

                },

                error: function(errorThrown) {
                    alert('error');                     
                }

            });  
	        return false;		        
	    });

		/*
		## Remove Filed jQurey
		***************************************/
	    jQuery(document).on('click', '.removeField', function(e){
	    	
	    	var field_id = jQuery(this).attr('field-id');

	    	var page =  jQuery(this).attr('page');	    	

	    	if (page == 'page1') {
	    		
	    		var type_nb = jQuery("#type_nb").val();

		    	jQuery('.more_add #field_'+field_id).remove();

		    	jQuery("#type_nb").val( type_nb - 1);
	    			
	    	}else if(page == 'page2'){

	    		var page2_type_nb = jQuery("#page2_type_nb").val();

		    	jQuery('.more_add2 #field_'+field_id).remove();

		    	jQuery("#page2_type_nb").val( page2_type_nb - 1);

	    	}else if(page == 'page3'){

	    		var page3_type_nb = jQuery("#page3_type_nb").val();

		    	jQuery('.more_add3 #field_'+field_id).remove();

		    	jQuery("#page3_type_nb").val( page3_type_nb - 1);

	    	}else if(page == 'page4'){
	    		
	    		var page4_type_nb = jQuery("#page4_type_nb").val();

		    	jQuery('.more_add4 #field_'+field_id).remove();

		    	jQuery("#page4_type_nb").val( page4_type_nb - 1);

	    	}

	    	/*var type_nb = jQuery("#type_nb").val();

	    	jQuery('#field_'+field_id).remove();

	    	jQuery("#type_nb").val( type_nb - 1);*/

	    	return false; 
	    });


	});

})( jQuery );
