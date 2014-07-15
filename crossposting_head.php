	<head>
		<link rel='stylesheet' href='http://www.citynews.ca/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load=admin-bar,wp-jquery-ui-dialog,buttons,media-views,wp-admin,wp-auth-check&amp;ver=3.6.1' type='text/css' media='all' />
		<link rel='stylesheet' id='livestream-admin-css-css'  href='http://www.citynews.ca/wp-content/plugins/livestream-video-config-json/css/main.css?ver=3.6.1' type='text/css' media='all' />
		<link rel='stylesheet' id='debug-bar-css'  href='http://www.citynews.ca/wp-content/plugins/debug-bar/css/debug-bar.css?ver=20111209' type='text/css' media='all' />
		<link rel='stylesheet' id='wpized-ui-css'  href='http://www.citynews.ca/wp-content/includes/wpized_base/plugins/css/wpized-ui.css?ver=3.6.1' type='text/css' media='all' />
		<link rel='stylesheet' id='thickbox-css'  href='http://www.citynews.ca/wp-includes/js/thickbox/thickbox.css?ver=20121105' type='text/css' media='all' />
		<link rel='stylesheet' id='colors-css'  href='http://www.citynews.ca/wp-admin/css/colors-fresh.min.css?ver=3.6.1' type='text/css' media='all' />
		<!--[if lte IE 7]>
		<link rel='stylesheet' id='ie-css'  href='http://www.citynews.ca/wp-admin/css/ie.min.css?ver=3.6.1' type='text/css' media='all' />
		<![endif]-->
		<link rel='stylesheet' id='akismet.css-css'  href='http://www.citynews.ca/wp-content/plugins/akismet/akismet.css?ver=2.5.4.4' type='text/css' media='all' />
		<link rel='stylesheet' id='cs_style-css'  href='http://www.citynews.ca/wp-content/plugins/custom-sidebars/cs_style.css?ver=3.6.1' type='text/css' media='all' />
		<link rel='stylesheet' id='timepicker-css'  href='http://www.citynews.ca/wp-content/includes/rogers_common/css/jquery.ui.timepicker.addon.css?ver=1369273794' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-ui-smoothness-css'  href='http://www.citynews.ca/wp-content/includes/rogers_common/css/jquery-ui-smoothness/jquery-ui-1.10.2.custom.min.css?ver=1369273794' type='text/css' media='all' />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('#custom-fields-div').dialog({ autoOpen: false, modal: true, title: "Custom fields while cross posting", width: 800, resizable: false });
			    $('#rogers_cross_posting_checkall').bind( "click", function() {
			    	if($(this).prop( "checked" )){
		    			$('.rogers_cross_posting_checkbox').prop('checked', true);
		    			$('.sync-controller').show();
		    		}else{
		    			$('.rogers_cross_posting_checkbox').prop('checked', false);
		    			$('.sync-controller').hide();
		    		}
			    });
			    
			    $('.rogers_cross_posting_checkbox').bind( "click", function() {
			    	$('#rogers_cross_posting_checkall').prop('checked', false);
			    	var blog_id = $(this).val();
			    	if($(this).prop( "checked" )){
		    			$(".sync-controller[data-blog-id*='"+blog_id+"']").show();
		    			if($(".rogers_cross_posting_action_select[data-blog-id*='"+blog_id+"']").val() == 'schedule' ){
		    				$(".rogers_cross_posting_schedule_time[data-blog-id*='"+blog_id+"']").show();
		    			}else{
				    		$(".rogers_cross_posting_schedule_time[data-blog-id*='"+blog_id+"']").hide();
				    	}
		    		}else{
		    			$(".sync-controller[data-blog-id*='"+blog_id+"']").hide();
		    			$(".rogers_cross_posting_schedule_time[data-blog-id*='"+blog_id+"']").hide();
		    		}
			    	
			    });
			    
			    $('.rogers_cross_posting_action_select').on( "change", function() {
			    	var blog_id = $(this).attr('data-blog-id');
			    	if($(this).val() == 'schedule' && $(".rogers_cross_posting_checkbox[value*='"+blog_id+"']").prop('checked')){
			    		$(".rogers_cross_posting_schedule_time[data-blog-id*='"+blog_id+"']").show();
			    	}else{
			    		$(".rogers_cross_posting_schedule_time[data-blog-id*='"+blog_id+"']").hide();
			    	}
			    });
			    
			    $(".rogers_cross_posting_synchronize").on('change', function(){
			    	var blog_id = $(this).attr('data-blog-id');
			    	if(!$(this).prop('checked')){
			    		$(".custom-switch[data-blog-id*='"+blog_id+"']").show();
			    	}else{
			    		$(".custom-switch[data-blog-id*='"+blog_id+"']").hide();
			    	}
			    });
			    
			    $(".customize").click(function(){
			    	$('#custom-fields-div').dialog('open');
			    	$('.ui-widget-overlay').css('z-index',100);
			    });
			    
			});
		</script>
		<?php require('crossposting_style.php');?>
	</head>