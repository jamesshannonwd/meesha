<?php

/**
 * Module: Heading
 * Add headings into the page layout wherever needed.
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Heading extends SpyropressBuilderModule {

    public function __construct() {

        $this->path = dirname(__FILE__);
        // Widget variable settings
        $this->cssclass = 'module-heading';
        $this->description = __( 'Add headings into the page layout wherever needed.', 'spyropress' );
        $this->id_base = 'spyropress_heading';
        $this->name = __( 'Heading', 'spyropress' );

        // Fields
        $this->fields = array(

            array(
                'label' => __( 'Heading Text', 'spyropress' ),
                'id' => 'heading',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Sub Heading', 'spyropress' ),
                'id' => 'sub_heading',
                'type' => 'text',
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        $heading = $sub_heading = '';
        extract( $args ); extract( $instance );

        // get view to render
        if( $heading ) echo '<h1>' . $heading . '</h1>';
        if( $sub_heading ) echo '<h3>' . $sub_heading . '</h2>';
    }
}

spyropress_builder_register_module( 'Spyropress_Module_Heading' );

?>