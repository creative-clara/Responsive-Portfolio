<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Unica+One&family=Work+Sans:wght@300;400;600&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class( ! is_front_page() ? "inner-page": ""); ?>>


<header id="header" class="header clear">

<div class="inner">
<div class="branding">

<div id="site-title">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
<img src="http://www.claraposton.design/wp-content/uploads/logo-black.png" alt="logo" id="logo"></a>
</div> <!-- end site-title -->

<div id="site-description"><?php bloginfo( 'description' ); ?></div>

</div><!-- end site-description -->

<nav id="menu" class="nav">
<button class="nav-button">Toggle Navigation</button>

<?php wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'menu_id'        => 'primary-menu',
    'items_wrap' => '<ul class="primary-nav">%3$s</ul>', ) 
    
    ); ?>
</nav>

</div><!---end inner -->
</header>
<div id="container">