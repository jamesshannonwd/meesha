<?php

if( empty( $awards ) ) return;

echo $before_widget;
    if( !empty( $title ) ) echo '<h2>' . $title . '</h2>'; 
    
    foreach( $awards as $award ) {
        
        $listing = '';
        if( isset( $award['listing'] ) && !empty( $award['listing'] ) ) {
            $listing .= '<ul>';
            
            foreach( $award['listing'] as $item ) {
                $listing .= '<li><span>' . $item['title'] . '</span></li>';
            }
            
            $listing .= '</ul>';
        }
        
        echo '<h3>' . $award['title'] . '</h3>' . $listing;
    }
echo $after_widget;
?>