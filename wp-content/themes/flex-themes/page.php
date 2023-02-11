<?php
/**
 * Template for displaying pages
 * 
 * @package flex-theme
 */
	get_header();
?> 

<div id="main-content" class="page-content main-content" role="main">
	<div class="container wrap-content">
		<div class="post-content">
        	<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part('template_part/content','page');
					}
				}else { 
					get_template_part('template_part/content', 'none');
				}  
			?>
        </div>
	</div>
</div>

<?php get_footer(); ?> 