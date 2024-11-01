

<div data-role="panel" id="mypanelRight" data-position-fixed="false" data-position="right" data-display="reveal">
<div  class="widget-area" role="complementary">	<?php
	
 	dynamic_sidebar( 'wordapp-mobile-sidebar-right' ); 
	

	$varGA = (array)get_option( 'WordApp_ga' );
			if(!isset($_GET['WordApp_demo'])) $_GET['WordApp_demo'] = "";
			if(!isset($varGA['powered'])) $varGA['powered'] ='';


	if($_GET['WordApp_demo'] != '1' && $varGA['powered'] != 'off'){
	?>
	<hr>
	<center><a href="https://wordpress.org/plugins/wordapp-mobile-app/" target="_blank" class="poweredBy">WordApp </a><a href="http://app-developers.biz/" target="_blank" class="poweredBy">convert wordpress to mobile app & site</a>
	</center>
	<?php
	}
	?>
</div>
</div>
