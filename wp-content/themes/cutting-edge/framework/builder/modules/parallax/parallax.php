<?php

/**
 * Module: Parallax
 *
 * @author 		SpyroSol
 * @category 	SpyropressBuilderModules
 * @package 	Spyropress
 */

global $parallax_counter;
$parallax_speed = 0;

class Spyropress_Module_Parallax extends SpyropressBuilderModule {

    public function __construct() {
        
        $this->path = dirname( __FILE__ );

        // Widget variable settings
        $this->description = __( 'Create parallax in differnet style', 'spyropress' );
        $this->id_base = 'parallax';
        $this->name = __( 'Parallax Area', 'spyropress' );
        
        // Templates        
        $this->templates['twitter'] = array(
            'label' => 'Twitter',
            'view' => 'twitter.php'
        );
        
        $this->templates['image'] = array(
            'label' => 'Image',
            'view' => 'image.php'
        );
        
        // Fields
        $this->fields = array(
            
            array(
                'label' => 'Style',
                'id' => 'style',
                'type' => 'select',
                'class' => 'enable_changer section-full',
                'options' => $this->get_option_templates()
            ),
            
            array(
                'label' => __( 'Image', 'spyropress' ),
                'id' => 'clip_img',
                'class' => 'style section-full image',
                'type' => 'upload'
            ),
            
            array(
                'label' => __( 'Content', 'spyropress' ),
                'id' => 'content',
                'type' => 'editor',
                'rows' => 6
            ),
            
            array(
                'label' => __( 'Background', 'spyropress' ),
                'id' => 'image',
                'type' => 'upload'
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {
        
        // extracting info
        $style = '';
        extract( $args ); extract( $instance );
        // get view to render
        include $this->get_view( $style );
    }

}
spyropress_builder_register_module( 'Spyropress_Module_Parallax' );

?>