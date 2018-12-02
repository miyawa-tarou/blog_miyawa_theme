<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <div id="header-title"><h1 class="wrapper">MiyawaTarou</h1></div>
    <div id="header-photo"><img src="https://miyawa-tarou.com/img/header/sample.jpg" alt="<?php bloginfo( 'name' ); ?>" /></div>
    <nav id="heaader-menu">
        <ul id="heaader-menu-list">
            <a href="https://miyawa-tarou.com/"><li>Home</li></a>
            <!--            <li><a href="">Biography</a></li>//-->
            <a href="https://miyawa-tarou.com/works.html"><li>Works</li></a>
            <a href="/"><li>Blog</li></a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdv-dJ-BLQIyGL0s0RxW8OD5Ukb2EjVvQF5NtEBGqPNBmr5gw/viewform"><li>Contact Me</li></a>
        </ul>
    </nav>
</header>
<section id="body">
    <div id="body-contents">

