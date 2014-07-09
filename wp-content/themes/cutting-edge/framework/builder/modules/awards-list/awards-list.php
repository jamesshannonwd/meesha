<?php

/**
 * Module: Awards List
 *
 * @author 		SpyroSol
 * @category 	SpyropressBuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Awards_List extends SpyropressBuilderModule {

    public function __construct() {

        // Widget variable settings

        $this->cssclass = 'awardsListing';
        $this->description = __( 'List your awards beautifully', 'spyropress' );
        $this->id_base = 'awards_listing';
        $this->name = __( 'Awards listing', 'spyropress' );
        
        // Fields
        $this->fields = array(
            
            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Awards', 'spyropress' ),
                'id' => 'awards',
                'type' => 'repeater',
                'item_title' => 'title',
                'fields' => array(
                    array(
                        'label' => __( 'Heading', 'spyropress' ),
                        'id' => 'title',
                        'type' => 'text'
                    ),
                    
                    array(
                        'label' => __( 'Listing', 'spyropress' ),
                        'id' => 'listing',
                        'type' => 'repeater',
                        'item_title' => 'title',
                        'fields' => array(
                            array(
                                'label' => __( 'Listing', 'spyropress' ),
                                'id' => 'title',
                                'type' => 'text'
                            ),
                        )
                    )
                )
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args ); extract( $instance );
        // get view to render
        include $this->get_view();
    }

}
spyropress_builder_register_module( 'Spyropress_Module_Awards_List' );

?>