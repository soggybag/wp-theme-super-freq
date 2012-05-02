<?php
	// Set the maximum width of the images in the content area. I think...
	if ( ! isset( $content_width ) ) $content_width = 520;
	
	// feed link support
	add_theme_support( 'automatic-feed-links' );
	
	// Add custom background functionality
	add_custom_background();
	

	// functions.php is used to store all of the php code your theme might use

	// Register a dynamic sidebar named Main Sidebar
	register_sidebar( array(
		'id'          => 'main-sidebar',
		'name'        => 'Main Sidebar',
		'description' => 'Sidebar located in the right column',
		'before_title'=> '<h3>',
		'after_title' => '</h3>'
	) );
	
	
	// Nav Menu
	if ( function_exists( 'register_nav_menu' ) ) {
		register_nav_menu( 'primary', 'Primary Menu' );
	}
	
	
	
	//this function will be called in the next section
	function advanced_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div class="comment-author vcard grid_2 alpha">
				<?php echo get_avatar($comment,$size='64',$default='<path_to_url>' ); ?>
					<div class="comment-date">
						<?php comment_date('M d y'); ?>
					</div>
					<div class="comment-meta">
						<a href="<?php the_author_meta( 'user_url'); ?>">
							<?php printf( '%s', get_comment_author_link() ); ?>
						</a>
					</div>
					<div>
						<?php edit_comment_link( 'Edit','  ',''); ?>
					</div>
				</div>
		
			<?php if ($comment->comment_approved == '0') : ?>
				<em>Your comment is awaiting moderation.</em>
				<br />
			<?php endif; ?>
		
			<div class="comment-text grid_7 omega">	
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		<div class="clear"></div>
	<?php }
	
?>