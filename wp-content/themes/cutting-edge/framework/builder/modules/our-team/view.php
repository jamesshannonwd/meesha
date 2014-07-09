<?php

if( empty( $mates ) ) return;

if( !empty( $title ) ) echo '<h2>' . $title . '</h2>';

$counter = 0;
echo '<div class="our-mates">';
    foreach( $mates as $mate ) {
        
        $counter++;
        $cssclass = ( $counter == 1 || $counter % 4 == 0) ? ' offset-by-two' : '';

        $content = isset( $mate['content'] ) ? apply_filters( 'the_content', $mate['content'] ) : '';
        echo '
        <div class="four columns' . $cssclass . '">
            <div class="teamOverlay"></div>
            <div class="teamImage"><img src="' . $mate['picture'] . '" alt="" class="scale-with-grid" /></div>
            <h4>' . $mate['name'] . '</h4>
            ' . $content . '
        </div>';
    }
echo '</div>';
echo '<div class="clearfix"></div>';
?>