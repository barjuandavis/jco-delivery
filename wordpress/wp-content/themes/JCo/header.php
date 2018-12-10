<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
        <a href=""> <h1> <?php bloginfo('name'); ?></h1></a>
        <h5> <?php bloginfo('description'); ?></h1>


        <nav class="site-nav">
            <?php 
                $args = array (
                    'theme_location' => 'primary'

                );
            ?>

            <?php wp_nav_menu($args); ?>
        </nav>
        </header>
