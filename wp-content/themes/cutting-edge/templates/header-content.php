<?php
if( is_front_page() ) {

$slides = get_setting_array( 'home_slides' );
if( !empty( $slides ) ) {
    $images = '';
    foreach( $slides as $slide ) {
        $images .= '{ image : \'' . $slide['image'] . '\', title : \'' . wptexturize( $slide['caption'] ) . '\', thumb : \'\', url : \'\' },';
    }
    $js = '
    jQuery(function($){
        $.supersized({
    		transition:	2,
    		transition_speed: 600,							
    		slide_links: "blank",
    		thumb_links: 0,
    		thumbnail_navigation:   0,
            progress_bar: 0,							
    		mouse_scrub: 0,
    		slides:	[ ' . $images . ']
    	});
    });';
    
    add_jquery_ready( $js );
?>
<div id="homepage" class="homepage section">
    <div class="container">
        <?php spyropress_logo( 'container_class=sixteen columns'); ?>
                
        <div class="slider-text">
            <div class="thirteen columns alpha">
                <div id="slidecaption"></div>
            </div>
			<div class="three columns omega">
				<a id="prevslide" class="load-item"></a>
				<a id="nextslide" class="load-item"></a>
			</div>
		</div>	
	</div>
</div>
<?php
}

}

$translate['nav-menu'] = get_setting( 'translate' ) ? get_setting( 'nav-menu', 'Menu' ) : __( 'Menu', 'spyropress' );
?>
<nav>
    <div class="container">
        <div class="sixteen columns alpha omega">
			<!-- Start Nav Menu -->
            <?php
                $menu = spyropress_get_nav_menu( array(
                    'container' => false,
                    'menu_class' => 'menu',
                    'menu_id' => 'nav',
                    'echo' => false
                ) );
                $url = is_front_page() ? '#' : home_url('/#');
                echo str_replace( '#HOME_URL#', $url, $menu );
            ?>
			<!-- End Nav Menu -->
            <!-- Start Dropmenu for mobile -->		
			<select class="dropmenu" id="dropmenu" data-target="#nav">
                <option value="" selected="selected"><?php echo $translate['nav-menu'] ?></option>
			</select>
			<!-- End Dropmenu for mobile -->
        </div>
   </div>
</nav>