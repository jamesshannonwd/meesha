<?php
/**
 * Module: Intro Text
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Intro_Text extends SpyropressBuilderModule {

    public function __construct() {
        
        global $spyropress;
        
        // Widget variable settings
        $this->cssclass = '';
        $this->description = __( 'A lightweight component for introduction text.', 'spyropress' );
        $this->idbase = 'spyropress_intro_text';
        $this->name = __( 'Introduction Text', 'spyropress' );
        
        $this->templates['centered'] = array(
            'label' => 'Text Centered',
            'class' => 'twelve columns offset-by-two'
        );
        
        $this->templates['style2'] = array(
            'label' => 'Text Centered 2',
            'class' => 'fourteen columns marginTop offset-by-one'
        );

        // Fields
        $this->fields = array(
            
            array(
                'label' => __( 'Styles', 'spyropress' ),
                'id' => 'template',
                'type' => 'select',
                'options' => $this->get_option_templates()
            ),
            
            array(
                'label' => __('Content', 'spyropress' ),
                'id' => 'content',
                'type' => 'editor'
            )
        );

        $this->create_widget();
    }
    
    function widget( $args, $instance ) {
        
        // extracting info
        extract($args);
        extract( spyropress_clean_array( $instance ) );
        
        // get view to render
        include $this->get_view();
    }
}

spyropress_builder_register_module( 'Spyropress_Module_Intro_Text' );
?>