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
    <header class="w-full flex flex-wrap justify-between items-center px-6 bg-slate-800">
        <div class="logo py-4">
            <a href="#" class="text-slate-100"><img class="h-12" src="<?php echo get_template_directory_uri() . '/assets/image/Logo.svg';?>" alt=""></a>
        </div>
        <div id="hamburger" class="lg:hidden block">
            <span></span>
            <span></span>
        </div>
        <div class="lg:flex hidden flex-col w-[80%] h-full bg-sky-50">
            <div class="menu-contact w-full flex flex-row justify-center items-center gap-8 border-b border-sky-800 py-2 text-sm">
                <a href="#">info@clinicalarosa.com</a>
                <a href="#">+39 3456789123</a>
                <a href="#">Prenota una visita</a>
            </div>
            <nav class="menu border-b border-sky-800 py-4">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'flex lg:row colum flex-wrap',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s text-slate-800 justify-center">%3$s</ul>'
                ));
                ?>
            </nav>
        </div>
        <nav class="lg:hidden block menu-mobile w-full">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'         =>  false,
                'menu_class'        => 'w-full flex flex-col flex-wrap',
                'orderby'           => 'menu_order',
                'items_wrap'        => '<ul id="%1$s" class="%2$s text-slate-50 md:text-[48px] text-[36px]">%3$s</ul>'
            ));
            ?>

            <div class="cta-mobile w-full">
                <a href="#" class="w-full block my-8 py-2 px-6 bg-transparent border border-sky-100 text-sky-100 text-center">
                    Contatti
                </a>
            </div>
        </nav>
        <div class="cta lg:block hidden lg:w-auto">
            <a href="#" class="lg:w-auto lg:block lg:my-0 py-2 px-6 bg-transparent hover:bg-sky-100 border border-sky-100 hover:border-slate-800 text-sky-100 hover:text-slate-800 text-center">
                Contatti
            </a>
        </div>
    </header>