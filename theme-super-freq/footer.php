
    
    <div class="clear"></div>
	</div><!-- end .container_12 -->
	
	<div id="footer-wrap">
		<div class="container_12">
			
			<!-- 
			<div class="grid_3">
				<ul id="footer-sidebar-1">
					<?php dynamic_sidebar("Footer Sidebar 1"); ?>
				</ul>
			</div>
			<div class="grid_3">
				<ul id="footer-sidebar-2">
					<?php dynamic_sidebar("Footer Sidebar 2"); ?>
				</ul>
			</div>
			<div class="grid_3">
				<ul id="footer-sidebar-3">
					<?php dynamic_sidebar("Footer Sidebar 3"); ?>
				</ul>
			</div>
			<div class="grid_3">
				<ul id="footer-sidebar-4">
					<?php dynamic_sidebar("Footer Sidebar 4"); ?>
				</ul>
			</div>
			-->
		
			<footer id='footer' class="grid_12"><!-- footer -->
				<!-- Include whatever footer info you like here -->  
				<?php 
					$theme_data = get_theme_data( get_template_directory_uri() . '/style.css' );
				?>
				
				<p>Template design by <a href="<?php echo $theme_data['AuthorURI']; ?>"><?php echo $theme_data['AuthorName']; ?></a> 
				
				<!-- Get the date and name of the site -->  
				&copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?> 
				
				<!-- Add alink to the RSS feed for this site -->
				<a href="<?php bloginfo('rss2_url'); ?>">RSS2</a>
				<?php bloginfo('description'); ?></p>
			</footer><!-- end Footer -->
		
		</div>
		
		<div class="clear"></div>
	</div>
	
	<?php wp_footer(); ?>
</body>
</html>



