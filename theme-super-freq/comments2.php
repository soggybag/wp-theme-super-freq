<?php if ('open' == $post->comment_status) : ?>

	<div id="respond">
		<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>
		<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link(); ?></small>
	</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=">logged in</a> to post a comment.
	<pre><?php else : ?></pre>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform"></form>

	<?php if ( $user_ID ) : ?>

	Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"></a>. 
    <a title="Log out of this account" href="<?php echo wp_logout_url(get_permalink()); ?>">Log out »</a>

<?php else : ?>

    <input id="author" name="author" type="text" value="<?php echo $comment_author; ?>" tabindex="1" />
    <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
    
    <input id="email" name="email" type="text" value="<?php echo $comment_author_email; ?>" tabindex="2" />
    <label for="email"><small>Mail (will not be published) <?php if ($req) { echo "(required)"; } ?></small></label>
    
    <input name="url" type="text" id="url" value="" tabindex="3" />
    <label for="url"><small>Website</small></label>

<?php endif; ?>

<!--<small><strong>XHTML:</strong> You can use these tags: <code></code></small>

-->

<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>

</div>