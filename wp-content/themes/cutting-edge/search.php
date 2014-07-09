<?php

get_header();

$translate['search-title'] = get_setting( 'translate' ) ? get_setting( 'search-title', 'Search results: <span>%s</span>' ) : __( 'Search results: <span>%s</span>', 'spyropress' );

?>

<?php spyropress_before_main_container(); ?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="row classic-blog">
            <div class="span8 content">
                <?php spyropress_before_loop(); ?>
                <h1 class="page-title"><?php printf( $translate['search-title'], get_search_query() ); ?></h1>
                <div class="divide20"></div>
                <div class="posts">
                <?php
                while( have_posts() ) {
                    the_post();
                    
                    spyropress_before_post();
                ?>
                <div <?php post_class() ?>>
                    <?php get_template_part( 'templates/formats/content', get_post_format() ); ?>
            	</div>
                <?php
                    spyropress_after_post();
                }
                ?>
                </div>
                <div class="pagination">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
            <aside class="span4 sidebar lp30">
                <?php dynamic_sidebar('blog-primary'); ?>
            </aside>
        </div>
    </div>
</div>
<?php spyropress_after_main_container(); ?>

<?php get_footer(); ?>