<?php get_header(); ?>

<?php spyropress_before_main_container(); ?>
<div class="container">
    <?php get_template_part( 'templates/archive', 'title' ); ?>
    <div class="eleven columns">
    <?php spyropress_before_loop(); ?>
    <?php 
        while( have_posts() ) {
            the_post();
            
            spyropress_before_post();
    ?>
        <div <?php post_class( 'post-single' ) ?>>
            <?php get_template_part( 'templates/formats/content', get_post_format() ); ?>
        </div>
    <?php
            spyropress_after_post();
        }
        
        wp_pagenavi();
    ?>
    <?php spyropress_after_loop(); ?>
    </div>
    <div class="four columns offset-by-one">
        <div class="sidebar">
            <?php dynamic_sidebar( 'primary' ); ?>
        </div>
    </div>
</div>
<?php spyropress_after_main_container(); ?>

<?php get_footer(); ?>