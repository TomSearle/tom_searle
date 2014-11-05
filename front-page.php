<?php 

$context = Timber::get_context();

$context['page'] = Timber::get_post();

Timber::render('front-page.twig', $context);


 ?>