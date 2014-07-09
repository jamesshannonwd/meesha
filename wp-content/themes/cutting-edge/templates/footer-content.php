<div class="container">
    <?php if( $socials = get_setting_array( 'social_icons' ) ) : ?>
    <!-- Social -->
    <div class="sixteen columns">
        <h3 class="sectionTitle"><?php get_setting_e( 'footer_social_title' ); ?></h3>
        <ul class="socialLinks">
        <?php
            $skv = array(                
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
            );
            foreach( $socials as $item )
                echo '<li><a href="' . $item['url'] . '" title="' . $skv[ $item['network'] ] . '"><img src="' . assets_img() . 'icons/social-' . $item['network'] . '.png" alt="" /></a></li> ';
        ?>
        </ul>
    </div>
    <!-- Social -->
    <?php endif; ?>
    <?php if( $copyright = get_setting( 'footer_copyright' ) ) : ?>
    <div class="sixteen columns">	
        <div class="copyright"><?php echo $copyright; ?></div>
    </div>
    <?php endif; ?>
</div>