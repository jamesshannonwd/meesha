<?php

/**
 * Module: Our Team
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Our_Team extends SpyropressBuilderModule {

    /**
     * Constructor
     */
    public function __construct() {
        
        // Widget variable settings
        $this->cssclass = 'module-our-team';
        $this->description = __( 'Display a list of team.', 'spyropress' );
        $this->id_base = 'spyropress_our_team';
        $this->name = __( 'Our Team', 'spyropress' );

        // Fields
        $this->fields = array (

            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text'
            ),

            array(
                'label' => __( 'Mate', 'spyropress' ),
                'id' => 'mates',
                'type' => 'repeater',
                'item_title' => 'name',
                'fields' => array(
                    array(
                        'label' => __( 'Full Name', 'spyropress' ),
                        'id' => 'name',
                        'type' => 'text'
                    ),

                    array(
                        'label' => __( 'Upload Picture', 'spyropress' ),
                        'id' => 'picture',
                        'type' => 'upload'
                    ),

                    array(
                        'label' => __( 'About', 'spyropress' ),
                        'id' => 'content',
                        'type' => 'textarea',
                        'rows' => 6
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

spyropress_builder_register_module( 'Spyropress_Module_Our_Team' );
?>