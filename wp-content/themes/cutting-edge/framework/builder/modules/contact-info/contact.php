<?php

/**
 * Contact Info
 * Quickly add contact info to your sidebar e.g. address, phone, email.
 *
 * @package		SpyroPress
 * @category	Modules
 * @author		SpyroSol
 */

class SpyroPress_Module_Contact extends SpyropressBuilderModule {

    private static $counter = 1;

    /**
     * Constructor
     */
    function __construct() {

        // Widget variable settings.
        $this->cssclass = 'contact-info';
        $this->description = __( 'Quickly add contact info', 'spyropress' );
        $this->id_base = 'spyropress_contact';
        $this->name = __( 'Contact Info', 'spyropress' );

        $this->fields = array(
            
            array(
                'label' => __( 'Address', 'spyropress' ),
                'type' => 'toggle',
            ),
            
                array(
                    'label' => __( 'Street', 'spyropress' ),
                    'id' => 'street',
                    'type' => 'text',
                ),
                array(
                    'label' => __( 'City', 'spyropress' ),
                    'id' => 'city',
                    'type' => 'text',
                ),
                array(
                    'label' => __( 'Country', 'spyropress' ),
                    'id' => 'country',
                    'type' => 'text',
                ),
                array(
                    'label' => __( 'ZipCode', 'spyropress' ),
                    'id' => 'zipcode',
                    'type' => 'text',
                ),
            
            array(
                'type' => 'toggle_end',
            ),
            
            array(
                'label' => __( 'Contact Details', 'spyropress' ),
                'type' => 'toggle',
            ),
            
                array(
                    'label' => __( 'Email', 'spyropress' ),
                    'id' => 'email',
                    'type' => 'text',
                ),
                array(
                    'label' => __( 'Phone', 'spyropress' ),
                    'id' => 'phone',
                    'type' => 'text',
                ),
                array(
                    'label' => __( 'Skype', 'spyropress' ),
                    'id' => 'skype',
                    'type' => 'text',
                ),
            
            array(
                'type' => 'toggle_end',
            ),
            
            array(
                'label' => __( 'Timing', 'spyropress' ),
                'type' => 'toggle',
            ),
            
                array(
                    'label' => __( 'Mon-Fri', 'spyropress' ),
                    'id' => 'mf',
                    'type' => 'text',
                    'desc' => __( 'Seperate start and end time with comma', 'spyropress' )
                ),
                array(
                    'label' => __( 'Sat', 'spyropress' ),
                    'id' => 'sat',
                    'type' => 'text',
                    'desc' => __( 'Seperate start and end time with comma', 'spyropress' )
                ),
                array(
                    'label' => __( 'Sunday', 'spyropress' ),
                    'id' => 'sunday',
                    'type' => 'text',
                ),
            
            array(
                'type' => 'toggle_end',
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        $instance = spyropress_clean_array( $instance );
        extract( $args ); extract( $instance );

        // get view to render
        include $this->get_view();
    }
} // class SpyroPress_Widget_Contact

spyropress_builder_register_module( 'SpyroPress_Module_Contact' );
?>