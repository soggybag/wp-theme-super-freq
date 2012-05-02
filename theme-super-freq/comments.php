<?php 
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) 
		die("Please do not load this script directly.");
	
	if ( post_password_required() ) { ?>
    	<p class="no-comments">This post is password protected. Enter password to view comments.</p>
        <?php 
			return;
	}?>
	
    	<div id="comments" class="grid_9 alpha omega">
        	<h3 class="prefix_2 grid_7 alpha omega"><?php comments_number("No comments", "1 comment", "% comments"); ?></h3>
            
            <?php if ( have_comments() ) : ?>
				<ul class="commentlist" class="grid_9 alpha omega">
                	<?php 
                		// wp_list_comments('avatar_size=64&type=comment'); 
                		wp_list_comments('type=comment&callback=advanced_comment');
                	?>
                </ul>
                
                <?php if ($wp_query->max_num_pages > 1) : ?>
				<div class="pagination">
                	<ul>
                    	<li class="older"><?php previous_comments_link('Older'); ?></li>
                        <li class="newer"><?php next_comments_link("Newer"); ?></li>
                    </ul>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php if (comments_open()) : ?>
            <div id="respond">
            	<h3 class="prefix_2 grid_7 alpha omega">Leave a response</h3>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                	<div>
							<label class="grid_2 alpha" for="author">Name:</label>
							<div class="grid_7 omega"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" /></div>
                			
                        	<label class="grid_2 alpha" for="email">Email:</label>
                        	<div class="grid_7 omega"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" /></div>
                       		
                        	<label class="grid_2 alpha" for="url">Website:</label>
                        	<div class="grid_7 omega"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" /></div>
                      		
                        	<label class="grid_2 alpha" for="comment">Message:</label>
                        	<div class="grid_7 omega"><textarea name="comment" id="comment"></textarea></div>
                       		
                        	<div class="prefix_2 grid_7 alpha omega">
                        		<input type="submit" class="commentsubmit" value="Submit Comment"  />
                        	</div>
                        <?php comment_id_fields(); ?>
                        <?php do_action("comment_form", $post->id); ?>
                     </div>
                 </form>
                 <p class="cancel"><?php cancel_comment_reply_link("Cancel reply"); ?></p>
              </div>
              <?php else : ?>
			  	<h3 class="prefix_2 grid_7 alpha omega">Comments are closed for this topic.</h3>
             <?php endif; ?>
			 </div><!-- Comments -->