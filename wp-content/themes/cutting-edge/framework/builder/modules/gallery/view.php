<?php

if( empty( $photos ) ) return;

echo '<div class="da-thumbs">';

    foreach( $photos as $item ) {
        echo '<article class="one-fifth column">
                <a class="thumbLink" href="' . $item['thumb'] . '" rel="prettyPhoto[gallery1]" title="' . esc_attr( $item['title'] ) . '">
					<section class="thumbImage">
                        <div><span class="iconWrapper iconLink"></span></div>
                    	<img src="' . $item['large'] . '" alt="" class="scale-with-grid" />
                    </section>
                </a>
			</article>';
    }
    
echo '</div>';
?>