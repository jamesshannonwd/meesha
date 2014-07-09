<?php

// chcek
if ( empty( $accordions ) ) return;

foreach( $accordions as $item ) {
    
    $sub = $promo = '';
    if( isset( $item['image'] ) && $item['image'] ) {
        $promo = '<div class="accImage"><div class="accImageInner"><img src="' . $item['image'] . '" alt="" class="scale-with-grid" /></div></div>';
    }
    
    if( isset( $item['sub_title'] ) && $item['sub_title'] ) {
        $sub = '<h2>' . $item['sub_title'] . '</h2>';
    }
    
    echo '
    <span class="accTrigger question"><a href="#">' . $item['header_title'] . '</a></span>
    <div class="accContainer">
        <div class="accContent">
            ' . $promo . '
            <div class="accTitle">
                ' . $sub . '
                <h3>' . $item['title'] . '</h3>
            </div>
            <div class="accText">
                ' . apply_filters( 'the_content', $item['content'] ) . '
            </div>
        </div>
    </div>';
}
?>