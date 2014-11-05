<?php 
$context = Timber::get_context();
$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => -1,
	'exclude' => $post->ID //means all of them
);

$context['portfolio'] = Timber::get_posts($args);
$context['post'] = Timber::get_post();

Timber::render('single-portfolio.twig',$context);




 ?>