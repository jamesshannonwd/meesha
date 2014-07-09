<?php

/**
 * Init Theme Related Settings
 */

/** Internal Settings **/
require_once 'version.php';

/**
 * Required and Recommended Plugins
 */
function spyropress_register_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // Wordpress SEO
        array(
            'name'      => 'WordPress SEO by Yoast',
            'slug'      => 'wordpress-seo',
            'required'  => false,
        ),

        // Contact Form 7
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
        
        array(
            'name'      => 'CF Post Formats',
            'slug'      => 'wp-post-formats-develop',
            'required'  => true,
            'source'    => get_stylesheet_directory() . '/includes/plugins/wp-post-formats-develop.zip'
        ),
        
        array(
            'name'      => 'Newsletter',
            'slug'      => 'newsletter',
            'required'  => true,
            'source'    => get_stylesheet_directory() . '/includes/plugins/newsletter.zip'
        )
    );

    tgmpa( $plugins );
}
add_action( 'tgmpa_register', 'spyropress_register_plugins' );

/**
 * Add modules and tempaltes to SpyroBuilder
 */
function spyropress_register_builder_modules( $modules ) {

    $path = dirname(__FILE__);

    $custom = array(
        'modules/accordion/accordion.php',
        'modules/awards-list/awards-list.php',
        'modules/contact-info/contact.php',
        'modules/embed-video/embed-video.php',
        'modules/gallery/gallery.php',
        'modules/gmap/gmap.php',
        'modules/heading/heading.php',
        'modules/img-list/img-list.php',
        'modules/intro-text/intro-text.php',
        'modules/our-team/our-team.php',
        'modules/parallax/parallax.php',
        'modules/service-header/service-header.php',
        'modules/stats/stats.php',
    );

    return array_merge( $modules, $custom );
}
add_filter( 'builder_include_modules', 'spyropress_register_builder_modules' );

/**
 * Define the row wrapper html
 */
function spyropress_row_wrapper( $row_ID, $row ) {
    
    // CssClass
    $section_class = array();
    $section_class[] = 'page-section';
    if( isset( $row['options']['custom_container_class'] ) && !empty( $row['options']['custom_container_class'] ) )
        $section_class[] = $row['options']['custom_container_class'];

    $row_html = sprintf( '
        <div id="%1$s" class="%2$s">
            <div class="%3$s">
                %4$s
            </div>
        </div>', $row_ID, spyropress_clean_cssclass( $section_class ), get_row_class( true ), builder_render_frontend_columns( $row['columns'] )
    );

    return $row_html;
}
add_filter( 'spyropress_builder_row_wrapper', 'spyropress_row_wrapper', 10, 2 );

/**
 * Include Widgets
 */
function spyropress_register_widgets( $widgets ) {
    
    $path = dirname(__FILE__) . '/widgets/';

    $custom = array();

    return array_merge( $widgets, $custom );
}
add_filter( 'spyropress_register_widgets', 'spyropress_register_widgets' );

/**
 * Unregister Widgets
 */
function spyropress_unregister_widgets( $widgets ) {
    
    $custom = array(
    );

    return array_merge( $widgets, $custom );
}
add_filter( 'spyropress_unregister_widgets', 'spyropress_unregister_widgets' );

/**
 * Comment Callback
 */
if( !function_exists( 'spyropress_comment' ) ) :
function spyropress_comment( $comment, $args, $depth ) {
    $translate['comment-reply'] = get_setting( 'translate' ) ? get_setting( 'comment-reply', 'Reply' ) : __( 'Reply', 'spyropress' );
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'spyropress' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'spyropress' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div class="row-fluid comment-body">
			<div class="span1 comment-author vcard">
                <?php echo get_avatar( $comment, 43 ); ?>
            </div>

			<div class="span11">
            	<div class="comment-arrow"></div>
				<cite class="fn"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></cite> <span class="says"><?php _e( 'says:', 'spyropress' ) ?></span>

				<div class="comment-meta commentmetadata">
					<a href="<?php comment_author_url(); ?>"><?php printf( __( '%1$s at %2$s', 'spyropress' ), get_comment_date(), get_comment_time() ) ?></a>
				</div>

				<?php if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'spyropress' ); ?></em><br />
                <?php
                    }
                    comment_text();
                ?>

				<div class="reply pull-right">
					<?php
                        comment_reply_link( array_merge( $args, array(
                            'depth' => $depth,
                            'reply_text' => $translate['comment-reply'],
                            'max_depth' => $args['max_depth'],
                            'after' => '<span>&darr;</span>'
                        ) ) );
                    ?>
				</div>
			</div>
		</div>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Pagination Defaults
 */
function spyropress_pagination_defaults( $defaults = array() ) {
    
    $defaults['container_class'] = 'pagination';
    $defaults['options']['pages_text'] = false;    
    
    return $defaults;
}
add_filter( 'spyropress_pagination_defaults', 'spyropress_pagination_defaults' );

/**
 * oEmbed Modifier
 */
function oembed_modifier( $html ) {
    
    $html = preg_replace( '/(width|height|frameborder)="\d*"\s/', "", $html );
    
    if( is_str_contain( 'video-container', $html ) ) return $html;
    
    return '<div class="video-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'oembed_modifier', 10 );
add_filter( 'oembed_result', 'oembed_modifier', 10 );