<?php get_header(); ?>

	
	<div id="col-left" class="grid_3">
		<header id='header'>
			<h1 class="blog-title"><a href="<?php echo home_url()  ?>/"><?php bloginfo('name'); ?></a></h1>
	    	<p class="blog-description"><?php bloginfo('description'); ?></p>
	    </header>
	    
	    
		<?php get_sidebar(); ?>
		
		
	</div><!-- end #col-left -->
	
    <div id="col-right" class="grid_9">
    
    	<div id="page-nav" class="prefix_2 grid_7 alpha omega">
    		<?php wp_nav_menu( array( 'container' => '', 'theme_location'  => "primary" ) ); ?>
    	</div>
    
    	<div id='content'>
		    <!-- This begins displaying posts and comments. -->
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        
		        <!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
		        <div class="grid_7 prefix_2 alpha omega post-title">
		        	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		        </div>
		        	
		        <div class="grid_2 alpha post-meta">
		        	<!-- Diplsay the date and category for a post. -->
		        	<ul>
						<li class='post-date'><?php the_time('M d'); ?></li>
						<li class=''><?php the_time('Y'); ?></li>
						<li><?php the_category('</li><li>'); ?></li>
						<!-- <?php the_tags('<li>','</li><li>','</li>'); ?> -->
						<li><?php comments_popup_link(); ?></li>
						<?php edit_post_link('edit', '<li>', '</li>'); ?>
		        	</ul>
		        </div>
		        
		        <div <?php post_class("grid_7 omega post-body"); ?>>
		        	<!-- Display the contents of the post -->
		        	<?php the_content("Read on!"); ?>
		        	<p class="post-tags">
		        		<?php the_tags('Tagged:',', '); ?>
		        	</p>
		        	
		        	<?php wp_link_pages(); ?>
		        	
		        </div>
		        
		        <?php comments_template(); ?>
		        
		        <hr class="clear post-divider">
		        
		    <?php endwhile; else: ?>
		    
		   		<div class="prefix_2 grid_7 alpha omega">
		   			 <!-- If there are no posts display the message below -->
			        <h3>Woops...</h3>
			        <p>Sorry, no posts we're found.</p>
		   		</div>
		       
		    <?php endif; ?>    
		
				<div id="post-nav" class="prefix_2 grid_7 alpha omega">
					<!-- Display the Next and Prev post links -->
					<?php // posts_nav_link(); ?>
		    		<div id="post-prev" class="grid_2 alpha"><?php previous_posts_link( "Newer Posts" ); ?></div>
		    		<div id="post-next" class="grid_2 omega push_3"><?php next_posts_link( "Older Posts" ); ?></div>
				</div>
		    
		</div><!-- end content -->
    
    </div><!-- end #col-right -->
    
<?php get_footer(); ?>






