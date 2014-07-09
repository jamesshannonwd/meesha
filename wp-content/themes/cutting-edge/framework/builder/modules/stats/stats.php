<?php

/**
 * Module: Stats
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Stats extends SpyropressBuilderModule {

    /**
     * Constructor
     */
    public function __construct() {

        // Widget variable settings
        $this->cssclass = 'module-stats';
        $this->description = __( 'Display your stats', 'spyropress' );
        $this->id_base = 'spyropress_stats';
        $this->name = __( 'Stats', 'spyropress' );
        
        // Fields
        $this->fields = array (
        
            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text'
            ),
            
            array(
                'label' => __( 'Stats', 'spyropress' ),
                'id' => 'stats',
                'type' => 'repeater',
                'item_title' => 'count',
                'fields' => array(
                    
                    array(
                        'label' => __( 'Label', 'spyropress' ),
                        'id' => 'label',
                        'type' => 'text'
                    ),
                    
                    array(
                        'label' => __( 'Count', 'spyropress' ),
                        'id' => 'count',
                        'type' => 'text'
                    ),

                    array(
                        'label' => __( 'Upload Image', 'spyropress' ),
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

spyropress_builder_register_module( 'Spyropress_Module_Stats' );

?>