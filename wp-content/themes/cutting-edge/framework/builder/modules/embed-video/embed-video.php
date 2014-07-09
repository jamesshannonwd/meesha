<?php
/**
 * Module: HTML
 * Add raw HTML or JavaScript or you can apply Standard WordPress formatting. 
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Embed_Video extends SpyropressBuilderModule {
    
	public function __construct() {
	   
       // Widget variable settings.
       $this->cssclass = 'video-container';
       $this->description = __( 'Add video url to embed them', 'spyropress' );
       $this->idbase = 'spyropress_embed';
       $this->name = __( 'Embed Videos', 'spyropress' );
       
       // Fields
       $this->fields = array(
            
            array(
                'id'        => 'video_url',
                'type'      => 'text',
                'label'     => 'Video URL'
            )
       );
       
       $this->create_widget();
	}
    
    function widget( $args, $instance ) {
		
        // extracting info
        extract($args); extract($instance);
        // get view to render
        include $this->get_view();
	}

}

spyropress_builder_register_module( 'Spyropress_Module_Embed_Video' );
?>