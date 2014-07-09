<?php

if( empty( $clip_img ) ) return;

global $parallax_counter;
$parallax_counter++;

$pid = 'parallax-' . $parallax_counter;

$js = '
    if ( !isMobile ) $("#' . $pid . '").parallax();
';
add_window_load( $js );
?>
<div id="<?php echo $pid; ?>" class="parallax fixed" style="background-image: url(<?php echo $image; ?>);">
    <div class="quoteWrap">
        <div class="quote">
            <div class="container">
                <div class="sixteen columns">
                    <div class="imageClip2">
                        <img alt="" src="<?php echo $clip_img; ?>" class="scale-with-grid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="imageClip"></div>
</div>