<?php 
/*
Template Name: Portfolio
Description: Custom page template that lists all posts of the post type portfolio
*/

$context = Timber::get_context();
$args = array(
	'post_type' => 'portfolio',
	'post_per_page' => -1 //means all of them	
);

$context['portfolio'] = Timber::get_posts($args);

Timber::render('page-portfolio.twig',$context);




 ?>