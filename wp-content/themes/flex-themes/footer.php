<?php
/**
 * The theme footer
 * @package flex-theme
 */

?>
			<footer>
            	<div class="container">
            		<div class="copyrkght">
	            		<p><?php echo get_field('footer_copryright', 'option'); ?></p>
	            	</div>
	            	<div class="social">
	            		<ul>
	            			<li>
	            				<a href="#">
	            					<i class="fa fa-vimeo" aria-hidden="true"></i>
	            				</a>
	            			</li>
	            			<li>
	            				<a href="#">
	            					<i class="fa fa-youtube-play" aria-hidden="true"></i>
	            				</a>
	            			</li>
	            			<li>
	            				<a href="#">
	            					<i class="fa fa-instagram" aria-hidden="true"></i>
	            				</a>
	            			</li>
	            			<li>
	            				<a href="#">
	            					<i class="fa fa-facebook-official" aria-hidden="true"></i>
	            				</a>
	            			</li>
	            			<li>
	            				<a href="#">
	            					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
	            				</a>
	            			</li>
	            		</ul>
	            	</div>
            	</div>
	        </footer>
			<?php wp_footer(); ?>
		</div> <!-- /.wrapper -->
	</body>
</html>