<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordAppjqmobile
 */


$data = (array)get_option( 'WordApp_options' );
$varSlideshow = (array)get_option( 'WordApp_slideshow' );
    
		if(!isset($data['style'])) $data['style']='';
		if(!isset($data['theme'])) $data['theme']='';
		if(!isset($varSlideshow['onoff'])) $varSlideshow['onoff']='';
		if(!isset($varSlideshow['one'])) $varSlideshow['one']='';
		if(!isset($varSlideshow['two'])) $varSlideshow['two']='';
		if(!isset($varSlideshow['three'])) $varSlideshow['three']='';
		if(!isset($varSlideshow['four'])) $varSlideshow['four']='';
		if(!isset($varSlideshow['five'])) $varSlideshow['five']='';
		
		

		$pieces ='';
	
			
			$pieces = explode("|", $data['theme']);
			
			if($varSlideshow['onoff'] == ''){
			if($varSlideshow['one'] == '') $varSlideshow['one'] = get_template_directory_uri().'/images/photos/'.$pieces[1].'/1.jpg';
			if($varSlideshow['two'] == '') $varSlideshow['two'] = get_template_directory_uri().'/images/photos/'.$pieces[1].'/2.jpg';
			if($varSlideshow['three'] == '') $varSlideshow['three'] = get_template_directory_uri().'/images/photos/'.$pieces[1].'/3.jpg';
			if($varSlideshow['four'] == '') $varSlideshow['four'] = get_template_directory_uri().'/images/photos/'.$pieces[1].'/4.jpg';
			if($varSlideshow['five'] == '') $varSlideshow['five'] = get_template_directory_uri().'/images/photos/'.$pieces[1].'/5.jpg';
			}

			$varSlideshow['onoff'] ="on";
 
	if($data['style'] == "page" && is_home()){
		//echo "hello";
		if($_GET['WordApp_demo'] == '1'){
			$extra ="?WordApp_demo=1";
		}
			
		wp_redirect( get_permalink( $data['page_id']  ).''.$extra); 
		exit;  
	}
get_header(); ?>

    
			<div class="home-content">
					<span id="Logo" class="svg">
						<?php
if($data['logo'] == ""){
?>
				<img src="<?php echo  get_template_directory_uri() ?>/img/logoHere.png"  style="max-width:90%" />
<?php
}else{
echo '<img src="'.esc_url($data['logo']).'" style="max-width:90%">';
}
?>
						
					</span>
				</div>
				
				<div class="fluid_container">
					<div class="camera_wrap camera_black_skin camera_emboss pattern_1" id="camera_wrap">
						
						
						
						
						<?php if($varSlideshow['one'] !== ''): ?>
						<div data-thumb="<?php echo  $varSlideshow['one']; ?>" data-src="<?php echo  $varSlideshow['one']; ?>">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									
									<p><?php echo get_bloginfo( 'description' ); ?></p>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if($varSlideshow['two'] !== ''): ?>
						<div data-thumb="<?php echo  $varSlideshow['two']; ?>" data-src="<?php echo  $varSlideshow['two']; ?>">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									
									<p><?php echo get_bloginfo( 'description' ); ?></p>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						
						<?php if($varSlideshow['three'] !== ''): ?>
						<div data-thumb="<?php echo  $varSlideshow['three']; ?>" data-src="<?php echo  $varSlideshow['three']; ?>">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									
									<p><?php echo get_bloginfo( 'description' ); ?></p>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if($varSlideshow['four'] !== ''): ?>
						<div data-thumb="<?php echo  $varSlideshow['four']; ?>" data-src="<?php echo  $varSlideshow['four']; ?>">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									
									<p><?php echo get_bloginfo( 'description' ); ?></p>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						
						<?php if($varSlideshow['five'] !== ''): ?>
						<div data-thumb="<?php echo  $varSlideshow['five']; ?>" data-src="<?php echo  $varSlideshow['five']; ?>">
							<div class="bannerContent fadeFromBottom">
								<div class="b-c-textpane">
									
									<p><?php echo get_bloginfo( 'description' ); ?></p>
								</div>
							</div>
						</div>
						<?php endif; ?>
					
					</div><!-- #camera_wrap_3 -->

				
    </div>
  
 <?php /*
		
	if($varSlideshow['onoff'] =="on"){
	  ?>
     <div class="slider images" style="margin: 0 auto; max-width: 740px">
		 
	<?php	  
		  
  if(isset($varSlideshow['one']) && $varSlideshow['one'] !== "") {
	  
	  echo '<div><div class="image"><img data-lazy="'.$varSlideshow["one"].'"/></div></div>';
  }	
	if(isset($varSlideshow['two']) && $varSlideshow['two'] !== "") {
	  
	  echo '<div><div class="image"><img data-lazy="'.$varSlideshow['two'].'"/></div></div>';
  }	
	if(isset($varSlideshow['three']) && $varSlideshow['three'] !== "") {
	  
	  echo '<div><div class="image"><img data-lazy="'.$varSlideshow['three'].'"/></div></div>';
  }	
	if(isset($varSlideshow['four']) && $varSlideshow['four'] !== "") {
	  
	  echo '<div><div class="image"><img data-lazy="'.$varSlideshow['four'].'"/></div></div>';
  }	
	if(isset($varSlideshow['five']) && $varSlideshow['five'] !== "") {
	  
	  echo '<div><div class="image"><img data-lazy="'.$varSlideshow['five'].'"/></div></div>';
  }	
		 ?>
          
        </div>
    
    
<?php 
		  }

*/
?>
		
	<style>

		

.topHeader{
	background: transparent;
    border-color: transparent;
    color: #fff;
z-index:9999!important;
		min-height:47px;
		color:white;
		
		background: transparent!important;
    	border-color: transparent!important;
    width: 100%;
  
    background-size: 100% !important;
    height: 76px;
    position: fixed;
  
}
	.home-content {
    position: absolute;
    z-index: 2;
    top: 41%;
    left: 25%;
    display: inline-block;
    text-align: center;
    width: 50%;
}  	
</style>	
<?php get_footer(); ?>
