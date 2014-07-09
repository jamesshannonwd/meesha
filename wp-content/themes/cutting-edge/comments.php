<?php
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) return;

$translate['comment'] = get_setting( 'translate' ) ? get_setting( 'translate-comment', 'Comment' ) : __( 'Comment', 'spyropress' );
$translate['comments'] = get_setting( 'translate' ) ? get_setting( 'translate-comments', 'Comments' ) : __( 'Comments', 'spyropress' );
$translate['comments-off'] = get_setting( 'translate' ) ? get_setting( 'translate-comments-off', 'Comments are closed.' ) : __( 'Comments are closed.', 'spyropress' );

?>

<div id="comments">
    <div class="commentsWrap">
        <div class="inner-spacer-right-lrg">
    <?php if ( ! comments_open() ) { echo '<p class="no-comments">' . $translate['comments-off'] . '</p>'; } ?>
    
	<?php if ( have_comments() ) { ?>
        <h3 id="comments-title">
        <?php
        $num_comments = get_comments_number();
        if( $num_comments != 1 )
            printf( '%1$s <span>( %2$s )</span> ', $translate['comments'], number_format_i18n( $num_comments ) );
        else
            printf( '%1$s <span>( %2$s )</span> ', $translate['comment'], number_format_i18n( $num_comments ) );
        ?>
        </h3>

		<ul class="commentlist">
			<?php
				wp_list_comments( array(
					'format'      => 'html5',
					'short_ping'  => true,
                    'callback' => 'spyropress_comment'
				) );
			?>
		</ul><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'spyropress' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'spyropress' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'spyropress' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

	<?php
        }
    ?>
            <div class="row-fluid">
				<div class="span12"></div>
			</div>
            <div class="form-horizontal">
            <?php
                $req = get_option( 'require_name_email' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
            
                $fields = array();
                $fields['author'] = '
                <div class="comment-form-author control-group">
                    <div class="controls">
                        <label class="control-label" for="author">' . __( 'Name', 'spyropress' ) . ' <span class="required">*</span></label>
                        <input class="field" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' />
                    </div>
                </div>';
                
                $fields['email'] = '
                <div class="comment-form-email control-group">
                    <div class="controls">
                        <label class="control-label" for="email">' . __( 'Email', 'spyropress' ) . ' <span class="required">*</span></label>
                        <input class="field" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' />
                    </div>
                </div>';
                
                $fields['url'] = '
                <div class="comment-form-url control-group">
                    <div class="controls">
                        <label class="control-label" for="url">' . __( 'Website', 'spyropress' ) . ' <span class="required">*</span></label>
                        <input class="field" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"' . $aria_req . ' />
                    </div>
                </div>';
            
                $args = array(
                    'fields' => $fields,
                    'comment_field' => '
                    <div class="comment-form-comment control-group">
                        <div class="controls">
                            <textarea class="textarea field" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Your comment here..">
                            </textarea>
                        </div>
                    </div>',
                    'format' => 'html5',
                    'comment_notes_after' => ''
                );
            
                ob_start();
                comment_form( $args );
                $comment_form = ob_get_clean();
                
                $comment_form = str_replace( '<input name="submit" type="submit" id="submit" value="Post Comment" />', '<button name="submit" type="submit" id="submit" class="btn btn-success">' . __( 'Post Comment', 'spyropress' ) . '</button>', $comment_form );
            
                echo $comment_form;
            ?>
            </div>
        </div>
    </div>
</div><!-- #comments -->
