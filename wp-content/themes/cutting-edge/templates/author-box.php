<?php if( !get_setting( 'meta_authorbox' ) ) return; ?>
<div class="post-block post-author clearfix">
    <h3><?php get_setting_e( 'authorbox_title' ); ?> <strong class="name"><?php the_author_meta( 'display_name' ) ?></strong></h3>
    <div class="thumbnail">
        <?php echo get_avatar( get_the_author_meta( 'email' ), '80' ); ?>
    </div>
    <div class="author-body">
        <?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
    </div>
</div>