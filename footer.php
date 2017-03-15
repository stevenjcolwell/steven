		</div>
		<footer class="container">
			<div id="footer row">
				<div class="footer-left col-lg-6 pull-left">
					<p>&copy; <?php echo date("Y"); ?> <?php the_field('site_title', 'option'); ?></p> 
				</div>
				<div class="footer-right col-lg-6 pull-right">
					
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<style>
			@import url(http://meyerweb.com/eric/tools/css/reset/reset.css);
			@import url(<?php echo get_template_directory_uri(); ?>/css/main.css);
		</style>
	</body>
</html>