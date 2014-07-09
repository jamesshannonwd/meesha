<?php

/**
 * Module: Service Header
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Service_Header extends SpyropressBuilderModule {

    public function __construct() {

        $this->path = dirname(__FILE__);
        // Widget variable settings
        $this->cssclass = 'module-heading';
        $this->description = __( 'Service headings for service tables', 'spyropress' );
        $this->id_base = 'service_header';
        $this->name = __( 'Service Header', 'spyropress' );

        // Fields
        $this->fields = array(

            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Sub-Title', 'spyropress' ),
                'id' => 'sub_title',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Image', 'spyropress' ),
                'id' => 'bg',
                'type' => 'upload',
            ),
            
            array(
                'label' => __( 'Description', 'spyropress' ),
                'id' => 'desc',
                'type' => 'textarea',
                'rows' => 5
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args ); extract( $instance );

        // get view to render
        printf(
            '<h2>%1$s</h2><div class="serviceImage" style="background-image: url(%3$s)"><h4>%2$s</h4></div><p class="description">%4$s</p>',
            $title, $sub_title, $bg, do_shortcode( $desc )
        );
    }
}

spyropress_builder_register_module( 'Spyropress_Module_Service_Header' );

?>