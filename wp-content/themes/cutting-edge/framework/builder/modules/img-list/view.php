<?php

if( empty( $images ) ) return;

$counter = 0;

foreach( $images as $image ) {
    
    $counter++;
    $cssclass = ( $counter == 1 || $counter % 4 == 0) ? ' offset-by-two' : '';

    echo '
    <div class="four columns' . $cssclass . '">
        <div class="teamOverlay"></div>
        <div class="teamImage"><img src="' . $image['picture'] . '" alt="" class="scale-with-grid" /></div>
    </div>';
}
echo '<div class="clearfix"></div>';
?>