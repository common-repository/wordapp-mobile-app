<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordAppjqmobile
 */

		$data = (array)get_option( 'WordApp_options' );
    	$varColor = (array)get_option( 'WordApp_options' );
    	$varGA = (array)get_option( 'WordApp_ga' ); // Settings page
     	$varMenu = (array)get_option( 'WordApp_menu' );
     	$varStructure = (array)get_option( 'WordApp_structure' );
	  	$varSlideshow = (array)get_option( 'WordApp_slideshow' );
     
 
	include( dirname( __FILE__ ) . '/inc/config.php' );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1.0, user-scalable=0" />
	<?php if (is_search()): ?><meta name="robots" content="noindex, nofollow" /><?php endif; ?>
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<script type="text/javascript">
		var ui_widget_content = '<?php echo jqmobile_get_ui('widget_content'); ?>';
		var ui_form_comment = '<?php echo jqmobile_get_ui('form_comment'); ?>';
	</script>
	<?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() ?>/css/jquery.mobile.flatui.css" />
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  	<link type="text/css" rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/css/jquery.mmenu.all.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo  get_template_directory_uri() ?>/css/style.css" />
	<link rel='stylesheet' id='camera-css'  href='<?php echo  get_template_directory_uri() ?>/css/camera.css' type='text/css' media='all'> 
		
	
	
   <style>
		html,body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			background: rgba(255,255,255,.9);
			clear: both;
			display: block;
			height: 40px;
			line-height: 40px;
			padding: 20px;
			position: relative;
			z-index: 1;
		}
		.fluid_container {
			bottom: 0;
			height: 100%;
			left: 0;
			position: fixed;
			right: 0;
			top: 0;
			z-index: 0;
		}
		#camera_wrap {
			bottom: 0;
			height: 100%;
			left: 0;
			margin-bottom: 0!important;
			position: fixed;
			right: 0;
			top: 0;
		}
		.camera_bar {
			z-index: 2;
		}
		.camera_thumbs {
			margin-top: -100px;
			position: relative;
			z-index: 1;
		}
		.camera_thumbs_cont {
			border-radius: 0;
			-moz-border-radius: 0;
			-webkit-border-radius: 0;
		}
		.camera_overlayer {
			opacity: .1;
		}
	   .headerTxt{
font-family: 'Pacifico', cursive;
color:#fff;
font-size:1.7em!important;
margin:0 13%!important;
text-shadow:1px 1px #000;
}
		 
	</style>

  
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" />
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() ?>/css/jquery.mobile.flatui.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	
	<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
jQuery("a[href^='http']:not([href*='" + document.domain + "'])").each(function () {
	jQuery(this).attr("target", "_blank");
});
	</script>	
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">

		$(window).bind('beforeunload', function(){
   
    var interval = setInterval(function(){
        $.mobile.loading('show');
        clearInterval(interval);
    },1);    
});

$(document).on('pageshow', '[data-role="page"]', function(){  
    var interval = setInterval(function(){
        $.mobile.loading('hide');
        clearInterval(interval);
    },1);      
});
</script>

	<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri() ?>/slick/slick.css" />
    <script src="<?php echo  get_template_directory_uri() ?>/slick/slick.min.js"></script>

		<script type='text/javascript' src='<?php echo  get_template_directory_uri() ?>/js/jquery.easing.1.3.js'></script> 
		<script type='text/javascript' src='<?php echo  get_template_directory_uri() ?>/js/camera.min.js'></script> 
		<script>
			jQuery(function(){
				
				jQuery('#camera_wrap').camera({
					height: 'auto',
					loader: 'bar',
					pagination: false,
					thumbnails: false,
					hover: false,
					opacityOnGrid: false,
					playPause:false,
					navigation:false,
					pauseOnClick:false
				});
				

			});
		</script>
	
</head>

<body <?php body_class(); ?>>
	<div data-role="page" id="" <?php jqmobileWordApp('body');?>>
		<div data-role="header"<?php jqmobileWordApp('header');?> data-position="fixed" <?php if(is_home()) { echo 'data-fullscreen="true" class="ios7 topHeader"';  } else{ echo 'class="ios7 topHeaderColored"'; } ?> data-tap-toggle="false">
		<?php 
			if($varMenu['side'] == "on"){ 
		?>
				<a data-iconpos="notext" href="#mypanel" data-role="button" data-icon="bars" class="ios7-header-button topBtn"></a>
		<?php
			}
		?>
			
			<h1 role="heading" class="headerTxt topText"><?php
if($data['logo'] == ""){
echo get_bloginfo('name'); 
}else{
echo get_bloginfo('name');
}
?></h1>
			<a data-iconpos="notext" href="#mypanelRight" data-role="button" data-icon="grid" title="widgets"  class="ios7-header-button topBtn"></a>
		
		
		
		<?php

    if($varMenu['menuTop'] !== "" && $varMenu['top'] == "on" ) {
    echo ' <div data-role="navbar"><ul>';
		
		
		$menu_items = wp_get_nav_menu_items($varMenu['menuTop']);

	$menu_list ='';
	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
	    $url = $menu_item->url;
	    $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
	}
	echo $menu_list;
		
		
    echo "</ul></div>";
    }
   ?>
		
		</div>
 
	<?php 
		if($varMenu['side'] == "on"){
			include 'leftsidebar.php';
			//get_sidebar(); 
		}
		get_sidebar(); 
	?>		
		
		<div data-role="content">
