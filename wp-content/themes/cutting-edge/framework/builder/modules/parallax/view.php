<?php

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
                    <?php echo apply_filters( 'the_content', $content ); ?>
                </div>
            </div>
        </div>
    </div>
</div>