<?php

/**
 * Module: Our Team
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Img_list extends SpyropressBuilderModule {

    /**
     * Constructor
     */
    public function __construct() {
        
        // Widget variable settings
        $this->cssclass = '';
        $this->description = __( 'Display a list of images', 'spyropress' );
        $this->id_base = 'spyropress_img_list';
        $this->name = __( 'Image List', 'spyropress' );

        // Fields
        $this->fields = array (

            array(
                'label' => __( 'Images', 'spyropress' ),
                'id' => 'images',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'label' => __( 'Upload Picture', 'spyropress' ),
                        'id' => 'picture',
                        'type' => 'upload'
                    )
                )
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args ); extract( $instance );
        include $this->get_view();
    }

}

spyropress_builder_register_module( 'Spyropress_Module_Img_list' );
?>