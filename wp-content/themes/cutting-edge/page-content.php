<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
    <?php if( !is_front_page() && !is_home() ) { ?>
    <header class="container">
        <div class="sixteen columns blogTitlePost">
            <?php spyropress_before_post_title(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php spyropress_after_post_title(); ?>
        </div>
    </header>
    <?php } // end_if ?>
    <?php
        spyropress_before_post_content();
        spyropress_the_content();
        wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'spyropress' ), 'after' => '</div>' ) );
        spyropress_after_post_content();
    ?>
</div>