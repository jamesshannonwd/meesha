<div class="inner-spacer-right-lrg">
	<div class="post-title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>    
		<div class="post-meta">
            <?php printf( __( 'By %s in %s', 'spyropress' ), get_the_author(), get_the_category_list( ', ' ) ) ?>
            <div class="dateWrap">
                <div class="date-day"><?php echo get_the_date( 'j' ) ?></div>
                <div class="date-month"><?php echo get_the_date( 'M' ) ?></div>
                <div class="date-year"><?php echo get_the_date( 'Y' ); ?></div>
            </div>					
        </div>
	</div>
    <?php
    $image = get_image( array(
        'width' => 999,
        'class' => 'scale-with-grid',
        'responsive' => true,
        'before' => '<div class="post-media">',
        'after' => '</div>'
    ));
    ?>
</div>
<div class="post-body">
<?php
    if( is_single() )
        the_content();
    else
        echo spyropress_get_excerpt();
?>
</div>
<?php the_tags( '<div class="tags">', ' ', '</div>' ); ?>