<div class="inner-spacer-right-lrg">
	<div class="post-title">     
		<div class="post-meta">
            <div class="dateWrap">
                <div class="date-day"><?php echo get_the_date( 'j' ) ?></div>
                <div class="date-month"><?php echo get_the_date( 'M' ) ?></div>
                <div class="date-year"><?php echo get_the_date( 'Y' ); ?></div>
            </div>					
        </div>
	</div>
</div>
<div class="post-body">
    <blockquote>
        <?php
            the_content();
            
            $url = get_post_meta( get_the_ID(), '_format_quote_source_url', true );
            $url = ( $url ) ? $url : '#';
        ?>
        <cite><a target="_blank" href="<?php echo $url; ?>"><?php echo get_post_meta( get_the_ID(), '_format_quote_source_name', true ); ?></a></cite>
    </blockquote>
</div>