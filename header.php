<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('clinica_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#f3f4f6">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" type="image/x-icon">

    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        };
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body>

    <!-- Header -->
    <header class="w-full flex flex-wrap justify-between items-center py-4 px-6 bg-slate-800">
        <div class="logo">
            <a href="#" class="text-slate-100">LOGO</a>
        </div>
        <div id="hamburger" class="lg:hidden block">
            <span></span>
            <span></span>
        </div>
        <nav class="menu">
        <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'flex lg:row colum flex-wrap',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s text-slate-100">%3$s</ul>'
                ));
                ?>
        </nav>
        <div class="cta lg:w-auto w-full">
            <a href="#" class="lg:w-auto w-full lg:block hidden lg:my-0 my-4 py-2 px-6 bg-transparent border border-sky-100 rounded-md text-sky-100 text-center">
                Contatti
            </a>
        </div>        
    </header>