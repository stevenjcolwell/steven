<?php /*
Template Name: Homepage Template
*/
?>

<?php get_header(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<span id="welcome-title">
					Hi, I'm Steven a <br>
					<span class="line-one">Web Design,</span><br>
					<span class="line-two">Web Developer</span><br>
					<span class="line-three">and SEO consultant</span><br>
				</span>
			</div>
			<div class="col-lg-6 latest-work">
				<div id="project-wrap">
					<a href="<?php the_field('latest_project_url'); ?>">
						<div id="project-new">
							
						</div>
						<span id="latest-work-title">
							<?php the_field('latest_project_name'); ?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article class="blog-post">
					<h3>Blog Title</h3>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sed aut praesentium laudantium. Ad ab quis, eveniet rerum placeat laudantium iure! Soluta rerum deleniti dolor? Mollitia aperiam id, quis maxime!</p>
					<small>Posted  15th March 2017 by Steven</small>
				</article>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>