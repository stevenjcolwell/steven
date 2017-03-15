		</div>
		<footer class="container footer">
			<div id="footer row">
				<div class="footer-left col-lg-6 pull-left">
					<p>&copy; <?php echo date("Y"); ?> <?php the_field('site_title', 'option'); ?></p> 
				</div>
				<div class="footer-right col-lg-6 pull-right">
					<ul class="list-inline pull-right">
						<li><a href="/">Home</a></li>
						<li><a href="/">Portfolio</a></li>
						<li><a href="/">Contact Me</a></li>
						<li><a href="/">Blog</a></li>
						<li><a href="/" rel="nofollow">Sitemap</a></li>
					</ul>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<style>
			@import url(http://meyerweb.com/eric/tools/css/reset/reset.css);
			@import url(<?php echo get_template_directory_uri(); ?>/css/main.css?v=1.1.1);
		</style>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	</body>
</html>