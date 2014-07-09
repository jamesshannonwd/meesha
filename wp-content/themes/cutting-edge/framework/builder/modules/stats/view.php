<?php
if( empty( $stats ) ) return;

if( !empty( $title ) ) echo '<h3 class="sectionTitle">' . $title . '</h3>';

$counter = 100;
echo '<ul class="statGrid clearfix">';
    foreach( $stats as $stat ) {
        
        $content = isset( $stat['content'] ) ? apply_filters( 'the_content', $stat['content'] ) : '';
        echo '
        <li>
            <div class="statItem">
                <div class="statInfo">
                    <h3>' . $stat['count'] . '</h3>
                    <p>' . $stat['label'] . '</p>
                </div>
                <div class="statThumb" style="z-index:' . --$counter . ';background-image: url(' . $stat['picture'] . ');"></div>
            </div>
        </li>';
    }
echo '</ul>';
?>