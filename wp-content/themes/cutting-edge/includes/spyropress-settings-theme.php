<?php
/**
 * Theme Options
 *
 * @author 		SpyroSol
 * @category 	Admin
 * @package 	Spyropress
 */

global $spyropress_theme_settings;

$spyropress_theme_settings['general'] = array(

	array(
        'label' => __( 'General Settings', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'generalsettings',
        'icon' => 'module-icon-general'
    ),
    
    array(
		'label' => __( 'Skin', 'spyropress' ),
        'type' => 'sub_heading'
	),
    
    array(
		'label' => __( 'Skin', 'spyropress' ),
		'id' => 'skin',
        'type' => 'select',
        'options' => array(
            'black' => __( 'Black', 'spyropress' )
        )
	),

    array(
		'label' => __( 'Custom Logo', 'spyropress' ),
        'desc' => __( 'Upload a logo for your site or specify an image URL directly.', 'spyropress' ),
		'id' => 'logo',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Custom Favicon', 'spyropress' ),
        'desc' => __( 'Upload a favicon for your site or specify an icon URL directly.<br/>Accepted formats: ico, png, gif<br/>Dimension: 16px x 16px.', 'spyropress' ),
		'id' => 'custom_favicon',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (small)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 57px x 57px.', 'spyropress' ),
		'id' => 'apple_small',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (medium)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 72px x 72px.', 'spyropress' ),
		'id' => 'apple_medium',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (large)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 114px x 114px.', 'spyropress' ),
		'id' => 'apple_large',
        'type' => 'upload'
	),

    array(
        'label' => __( 'Goto Top', 'spyropress' ),
		'id' => 'go_to_top',
        'type' => 'checkbox',
        'options' => array(
           '0' => __( 'Disable go to top button', 'spyropress' )
        )
	),

    array(
		'label' => __( 'Slider Settings', 'spyropress' ),
		'type' => 'sub_heading'
	),
    
    array(
		'label' => __( 'Slides', 'spyropress' ),
		'type' => 'repeater',
        'id' => 'home_slides',
        'fields' => array(

            array(
                'label' => __( 'Caption ', 'spyropress' ),
                'id' => 'caption',
                'type' => 'textarea',
                'rows' => 4
            ),
            
            array(
                'label' => __( 'Image', 'spyropress' ),
                'id' => 'image',
                'type' => 'upload',
            ),
        )
	),

    array(
        'label' => __( 'Tracking Code', 'spyropress' ),
        'type' => 'sub_heading',
        'desc' => __( 'Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.','spyropress' ),
    ),

    array(
        'class' => 'section-full',
		'id' => 'tracking_code',
        'type' => 'textarea',
        'rows' => 10
	),
    
    array(
        'label' => __( 'Custom CSS', 'spyropress' ),
        'type' => 'sub_heading'
    ),
    
    array(
        'id' => 'custom_css_textarea',
        'type' => 'textarea',
        'rows' => 12,
        'class' => 'section-full'
    )

); // End Layout Options


$spyropress_theme_settings['footer'] = array(

    array(
        'label' => __( 'Footer Customization', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'footer',
        'icon' => 'module-icon-footer'
    ),

    array(
		'label' => __( 'Copyright', 'spyropress' ),
		'id' => 'footer_copyright',
        'type' => 'editor'
	),
    
    array(
		'label' => __( 'Social Title', 'spyropress' ),
		'id' => 'footer_social_title',
        'type' => 'text',
        'std' => 'Follow, Like, Pin all the social stuff'
	),
    
    array(
        'label' => __( 'Social icons', 'spyropress' ),
        'id' => 'social_icons',
        'type' => 'repeater',
        'item_title' => 'network',
        'fields' => array(
            array(
                'label' => __( 'URL', 'spyropress' ),
                'id' => 'url',
                'type' => 'text'
            ),
            
            array(
                'label' => __( 'Network', 'spyropress' ),
                'id' => 'network',
                'type' => 'select',
                'options' => array(
                    'dribble' => __( 'Dribbble', 'spyropress' ),
                    'facebook' => __( 'Facebook', 'spyropress' ),
                    'flickr' => __( 'Flickr', 'spyropress' ),
                    'google-plus' => __( 'Google Plus', 'spyropress' ),
                    'linkedin' => __( 'LinkedIn', 'spyropress' ),
                    'pinterest' => __( 'Pinterest', 'spyropress' ),
                    'rss' => __( 'RSS', 'spyropress' ),
                    'twitter' => __( 'Twitter', 'spyropress' ),
                    'vimeo' => __( 'Vimeo', 'spyropress' ),
                    'youtube' => __( 'Youtube', 'spyropress' )
                )
            ),
        )
    )

); // END FOOTER

$spyropress_theme_settings['post'] = array(

    array(
        'label' => __( 'Post Options', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'post',
        'icon' => 'module-icon-post'
    ),
    
    array(
		'label' => __( 'Excerpt Settings', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
        'label' => __( 'Length by', 'spyropress' ),
        'id' => 'excerpt_by',
        'type' => 'select',
        'options' => array (
            '' => '',
            'words' => __( 'Words', 'spyropress' ),
            'chars' => __( 'Character', 'spyropress' ),
        ),
        'std' => 'words'
	),

    array(
		'label' => __( 'Length', 'spyropress' ),
        'desc' => __( 'Set the length of excerpt.', 'spyropress' ),
		'id' => 'excerpt_length',
        'type' => 'text',
        'std' => 40
	),

    array(
		'label' => __( 'Ellipsis', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_ellipsis',
        'type' => 'text',
        'std' => '&hellip;'
	),

    array(
		'label' => __( 'Before Text', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_before_text',
        'type' => 'text',
        'std' => '<p>'
	),

    array(
		'label' => __( 'After Text', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_after_text',
        'type' => 'text',
        'std' => '</p>'
	),

    array(
		'label' => __( 'Read More', 'spyropress' ),
		'id' => 'excerpt_link_to_post',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Enable or disable Read more link.', 'spyropress' ),
        ),
        'std' => 1
	),

    array(
		'label' => __( 'Link Text', 'spyropress' ),
        'desc' => __( 'A text for Read More button.', 'spyropress' ),
		'id' => 'excerpt_link_text',
        'type' => 'text',
        'std' => 'Continue Reading..'
	),

    array(
		'label' => __( 'Author Box', 'spyropress' ),
        'desc' => __( 'A box to display about author on single page.', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
        'desc' => __( 'A box to display about author.', 'spyropress' ),
		'id' => 'meta_authorbox',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Disable author box.', 'spyropress' ),
        ),
        'std' => '1'
	),

    array(
		'label' => __( 'Author Title', 'spyropress' ),
        'desc' => __( 'Write the title.', 'spyropress' ),
		'id' => 'authorbox_title',
        'type' => 'text',
        'std' => __( 'About the Author', 'spyropress' )
	)

); // End Blog Settings

$spyropress_theme_settings['translate'] = array(

	array(
        'label' => __( 'Translate', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'translate',
        'icon' => 'module-icon-docs'
    ),
    
    array(
		'label' => __( 'General', 'spyropress' ),
		'type' => 'sub_heading'
	),
    
    array(
        'desc' => __( 'Turn it off if you want to use .mo .po files for more complex translation.', 'spyropress' ),
		'id' => 'translate',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Enable Translate', 'spyropress' ),
        ),
        'std' => '1'
	),
    
    array(
		'label' => __( 'Home', 'spyropress' ),
        'desc' => __( 'Breadcrumb and Menu', 'spyropress' ),
		'id' => 'translate-home',
        'type' => 'text',
        'std' => 'Home'
	),
    
    array(
		'label' => __( 'Menu', 'spyropress' ),
        'desc' => __( 'Responsive Menu', 'spyropress' ),
		'id' => 'nav-menu',
        'type' => 'text',
        'std' => 'Menu'
	),
    
    array(
		'label' => __( 'Search Placeholder', 'spyropress' ),
        'desc' => __( 'Search widget', 'spyropress' ),
		'id' => 'search-placeholder',
        'type' => 'text',
        'std' => 'Search..'
	),
    
    array(
		'label' => __( 'Search Button', 'spyropress' ),
        'desc' => __( 'Search widget button', 'spyropress' ),
		'id' => 'search-btn',
        'type' => 'text',
        'std' => 'Go'
	),
    
    array(
		'label' => __( 'Blog & Archives', 'spyropress' ),
		'type' => 'sub_heading'
	),
    
    array(
		'id' => 'translate-comment',
		'type' => 'text',
		'label' => __('Comment', 'spyropress'),
		'desc' => __('Text to display when there is one comment', 'spyropress'),
		'std' => 'Comment'
	),
		
	array(
		'id' => 'translate-comments',
		'type' => 'text',
		'label' => __('Comments', 'spyropress'),
		'desc' => __('Text to display when there are more than one comments', 'spyropress'),
		'std' => 'Comments'
	),
		
	array(
		'id' => 'translate-comments-off',
		'type' => 'text',
		'label' => __('Comments closed', 'spyropress'),
		'desc' => __('Text to display when comments are disabled', 'spyropress'),
		'std' => 'Comments are closed.'
	),
    
     array(
		'id' => 'comment-reply',
		'type' => 'text',
		'label' => __('Reply', 'spyropress'),
		'desc' => __('Text to display on comment Reply Button', 'spyropress'),
		'std' => 'Reply'
	),
    
    array(
		'label' => __( 'Blog', 'spyropress' ),
        'desc' => __( 'Blog', 'spyropress' ),
		'id' => 'blog-title',
        'type' => 'text',
        'std' => '<span>Our</span> Blog'
	),
    
    array(
		'label' => __( 'Category', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'cat-title',
        'type' => 'text',
        'std' => '<span>Category:</span> %s'
	),
    
    array(
		'label' => __( 'Tag', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'tag-title',
        'type' => 'text',
        'std' => '<span>Tag:</span> %s'
	),
    
    array(
		'label' => __( 'Day', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'day-title',
        'type' => 'text',
        'std' => '<span>Daily:</span> %s'
	),
    
    array(
		'label' => __( 'Month', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'month-title',
        'type' => 'text',
        'std' => '<span>Monthly:</span> %s'
	),
    
    array(
		'label' => __( 'Year', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'year-title',
        'type' => 'text',
        'std' => '<span>Yearly:</span> %s'
	),
    
    array(
		'label' => __( 'Archive', 'spyropress' ),
        'desc' => __( 'Archive', 'spyropress' ),
		'id' => 'archive-title',
        'type' => 'text',
        'std' => 'Archives'
	),
    
    array(
		'label' => __( 'Search', 'spyropress' ),
        'desc' => __( 'Search result page', 'spyropress' ),
		'id' => 'search-title',
        'type' => 'text',
        'std' => 'Search results: <span>%s</span>'
	),
    
    array(
		'label' => __( 'Error 404', 'spyropress' ),
		'type' => 'sub_heading'
	),
    
    array(
		'label' => __( 'Title', 'spyropress' ),
        'desc' => __( 'Ooops... Error 404', 'spyropress' ),
		'id' => 'error-404-title',
        'type' => 'text',
        'std' => 'Ooops... Error 404'
	),
    
    array(
		'label' => __( 'Subtitle', 'spyropress' ),
        'desc' => __( 'We are sorry, but the page you are looking for does not exist.', 'spyropress' ),
		'id' => 'error-404-subtitle',
        'type' => 'text',
        'std' => 'We are sorry, but the page you are looking for does not exist.'
	),
    
    array(
		'label' => __( 'Text', 'spyropress' ),
        'desc' => __( 'Please check entered address and try again or', 'spyropress' ),
		'id' => 'error-404-text',
        'type' => 'text',
        'std' => 'Please check entered address and try again or'
	),
    
    array(
		'label' => __( 'Button', 'spyropress' ),
        'desc' => __( 'Go To Homepage button', 'spyropress' ),
		'id' => 'error-404-btn',
        'type' => 'text',
        'std' => 'go to homepage'
	),

);

$spyropress_theme_settings['plugins'] = array(

	array(
        'label' => __( 'Settings', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'plugins',
        'icon' => 'module-icon-general'
    ),

    array(
		'label' => __( 'Email Settings', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
		'label' => __( 'Sender Name', 'spyropress' ),
        'desc' => __( 'For example sender name is "WordPress".', 'spyropress' ),
		'id' => 'mail_from_name',
        'type' => 'text'
	),

    array(
		'label' => __( 'Sender Email Address', 'spyropress' ),
        'desc' => __( 'For example sender email address is wordpress@yoursite.com.', 'spyropress' ),
		'id' => 'mail_from_email',
        'type' => 'text'
	),
    
    array(
        'label' => __( 'Twitter oAuth Settings', 'spyropress' ),
        'type' => 'sub_heading',
        'desc' => __( '<a href="https://dev.twitter.com/apps" target="_blank">Create an Application on Twitter</a>, once your application is created Twitter will generate your Oauth key and access tokens. Paste them below.', 'spyropress' )
    ),
    
    array(
        'label' => __( 'Twitter Username', 'spyropress' ),
        'id' => 'twitter_username',
        'type' => 'text'
    ),
            
    array(
        'label' => __( 'Consumer Key', 'spyropress' ),
        'id' => 'twitter_consumer_key',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Consumer Secret', 'spyropress' ),
        'id' => 'twitter_consumer_secret',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Access Token', 'spyropress' ),
        'id' => 'twitter_access_token',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Access Token Secret', 'spyropress' ),
        'id' => 'twitter_access_token_secret',
        'type' => 'text'
    ),

    array(
		'label' => __( 'WP-Pagenavi', 'spyropress' ),
		'type' => 'toggle'
	),

    array(
		'label' => __( 'Text For Number Of Pages', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_pages_text',
        'desc' =>   '%CURRENT_PAGE% - ' . __( 'The current page number.', 'spyropress' ) .
                    '<br />%TOTAL_PAGES% - ' . __( 'The total number of pages.', 'spyropress' ),
        'std' => __( 'Page %CURRENT_PAGE% of %TOTAL_PAGES%', 'spyropress' ),
	),

    array(
		'label' => __( 'Text For Current Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_current_text',
        'desc' => '%PAGE_NUMBER% - '.__( 'The page number.', 'spyropress' ),
        'std' => '%PAGE_NUMBER%'
	),

    array(
		'label' => __( 'Text For Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_page_text',
        'desc' => '%PAGE_NUMBER% - ' .__( 'The page number.', 'spyropress' ),
        'std' => '%PAGE_NUMBER%'
	),

    array(
		'label' => __( 'Text For First Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_first_text',
        'desc' => '%TOTAL_PAGES% - ' .__( 'The total number of pages.', 'spyropress' ),
        'std' => __( '&laquo; First', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Last Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_last_text',
        'desc' => '%TOTAL_PAGES% - ' .__( 'The total number of pages.', 'spyropress' ),
        'std' => __( 'Last &raquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Previous Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_prev_text',
        'std' => __( '&laquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Next Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_next_text',
        'std' => __( '&raquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Previous &hellip;', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_dotleft_text',
        'std' => __( '&hellip;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Next &hellip;', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_dotright_text',
        'std' => __( '&hellip;', 'spyropress' )
    ),

    array(
        'label' => __( 'Page Navigation Text', 'spyropress' ),
        'type' => 'sub_heading',
        'desc' => __( 'Leaving a field blank will hide that part of the navigation.', 'spyropress' ),
    ),

    array(
		'label' => __( 'Always Show Page Navigation', 'spyropress' ),
		'type' => 'checkbox',
        'id' => 'pagination_always_show',
        'options' => array(
            1 => __( 'Show navigation even if there\'s only one page.', 'spyropress' ),
        )
    ),

    array(
		'label' => __( 'Number Of Pages To Show', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_num_pages',
        'std' => 5
    ),

    array(
		'label' => __( 'Number Of Larger Page Numbers To Show', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_num_larger_page_numbers',
        'desc' => __( 'Larger page numbers are in addition to the normal page numbers. They are useful when there are many pages of posts.', 'spyropress' ),
        'std' => 3
    ),

    array(
		'label' => __( 'Show Larger Page Numbers In Multiples Of', 'spyropress' ),
		'type' => 'text',
        'id' => 'pagination_larger_page_numbers_multiple',
        'desc' => __( 'For example, if mutiple is 5, it will show: 5, 10, 15, 20, 25', 'spyropress' ),
        'std' => 10
    ),

    array(
		'type' => 'toggle_end'
	),

); // END PLUGINS

$spyropress_theme_settings['separator'] = array(

	array ( 'type' => 'separator' )

); // END Separator

$spyropress_theme_settings['import'] = array(

	array (
        'label' => __( 'Import / Export', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'import-export',
        'icon' => 'module-icon-import'
    ),
    
    array(
        'type' => 'import_dummy'
	),

    array(
        'type' => 'import'
	),

    array(
        'type' => 'export'
	),
); // END Import/Export

$spyropress_theme_settings['support'] = array(

	array (
        'label' => __( 'Support', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'support',
        'icon' => 'module-icon-support'
    ),

    array(
		'id' => 'admin/docs-support.php',
        'type' => 'include'
	)

); // END Separator
?>