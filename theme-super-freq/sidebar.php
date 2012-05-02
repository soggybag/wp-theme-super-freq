		<ul id='nav'>
			<?php if ( !dynamic_sidebar("Main Sidebar") ) : ?>
	        <!-- pages -->
	        <?php wp_list_pages("title_li=<h3>Pages</h3>"); ?>
	        <!-- categories -->
	        <?php wp_list_categories("title_li=<h3>Categories</h3>"); ?>
	        <!-- links -->
	        <?php wp_list_bookmarks("title_li=Bookmarks&title_before=<h3>&title_after=</h3>"); ?>
	        <!-- login -->
	        <li><h3>Meta</h3>
	        	<ul>
	        		<?php wp_register(); ?>
	                <!-- Admin login/logout links -->
	                <li><?php wp_loginout(); ?></li>
	            </ul>
	        </li>
	        <?php endif; ?>
		</ul>