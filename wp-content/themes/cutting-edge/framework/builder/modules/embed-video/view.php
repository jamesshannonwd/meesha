<?php

echo $before_widget;
    echo wp_oembed_get( $video_url, array( 'width' => '1280', 'height' => '720' ) );
echo $after_widget;
?>