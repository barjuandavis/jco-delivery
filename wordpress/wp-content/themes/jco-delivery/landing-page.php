
<?php
/*
Template Name: Landing Page

*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background: #6FBB72 url(<?php echo $src = the_post_thumbnail_url( '' ); ?> ) repeat 50% 0 fixed !important;">
