<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_field('site_title', 'option'); ?></title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Lato:400,700|Rubik+Mono+One|Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<header>
		<div class="container">
			<div class="row">
				<div id="branding" class="col-lg-6">
					<a href="/" title="Home - <?php the_field('site_title', 'option'); ?>">
						<span id="name" class="pull-left">
							<?php the_field('site_title', 'option'); ?>
						</span>
					</a>
				</div>
				<div class="col-lg-6">
					<nav>
						<ul class="list-inline pull-right">
							<li><a href="/">Home</a></li>
							<li><a href="/">Portfolio</a></li>
							<li><a href="/">Contact Me</a></li>
							<li><a href="/">Blog</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>	
	
