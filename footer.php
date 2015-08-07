<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>

		</div> <!-- Close content -->

		<div class="footer">

			<div class="footer-meta">
				
			</div>

			<div class="footer-nav">
				<?php
					wp_nav_menu( 
						array( 'theme_location' => 'primary', 'depth' => 1 ) 
					); 
				?>
			</div>

			<div class="footnote">
				<p>&copy; 2015 | Site designed and built by Jesse Dillman | <a href="http://jdillman.com">jdillman.com</a></p>
			</div>
		</div>

	</div> <!-- Close container -->
<?php wp_footer(); ?>
</body>
</html>
