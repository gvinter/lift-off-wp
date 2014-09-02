<?php
/**
 * The Template for displaying all single posts
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 */

// Dynamic Sidebar
$context['dynamic_sidebar'] = Timber::get_widgets('dynamic_sidebar');

Timber::render(array('sidebar.twig'), $context);