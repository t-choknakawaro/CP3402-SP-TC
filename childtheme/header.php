<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up until the "main" section.
 *
 * @package Twenty Twenty-Four
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header" role="banner">
        <div class="site-branding">
            <?php the_custom_logo(); ?>
            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
        <nav class="site-navigation" role="navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
    </header>
