<?php
echo $before_widget;
    echo '<div class="introtext">';
        echo apply_filters( 'the_content', $content );
    echo '</div>';
echo $after_widget;
echo '<div class="clearfix"></div>';
?>