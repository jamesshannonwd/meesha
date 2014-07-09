<?php

global $parallax_counter;
$parallax_counter++;

$pid = 'parallax-' . $parallax_counter;

$js = 'if ( !isMobile ) $("#' . $pid . '").parallax();';
add_window_load( $js );

$url = admin_url( 'admin-ajax.php?action=spyropress_twitter_tweets&post_count=1' );

$js = 'var $twitter = $("#twitter");$.getJSON( $twitter.data("url"), function (feeds) { $twitter.html(tz_format_twitter(feeds)); });';

add_jquery_ready( $js );
?>
<div id="<?php echo $pid; ?>" class="parallax fixed" style="background-image: url(<?php echo $image; ?>);">
    <div class="quoteWrap">
        <div class="quote">
            <div class="container">
                <div class="sixteen columns"> 
                    <ul id="twitter" data-url="<?php echo $url; ?>"></ul>
                </div>
            </div>
        </div>
    </div>
</div>