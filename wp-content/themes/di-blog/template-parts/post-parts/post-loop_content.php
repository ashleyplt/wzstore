<div class="post-excepr-content entry-content" itemprop="text">
	<?php
	if( get_theme_mod( 'excerpt_or_content', 'excerpt' ) == 'excerpt' ) {
		the_excerpt();
	} else {
		the_content();
	}
	
	?>
</div>