<!doctype html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

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

<body class="scroll-smooth">

    <!-- Header -->
    <header class="fixed top-0 left-0 z-50 w-full flex flex-wrap justify-between items-center bg-sky-800">
        <div class="menu-contact w-full flex flex-row justify-end items-cente bg-sky-50 gap-8 py-2 px-6 text-sm">
            <?php
            $header_email = get_field('email', 'option');
            if ($header_email) :
                $header_email_url = $header_email['url'];
                $header_email_title = $header_email['title'];
                $header_email_target = $header_email['target'] ? $header_email['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($header_email_url); ?>" target="<?php echo esc_attr($header_email_target); ?>"><?php echo esc_html($header_email_title); ?></a>
            <?php endif;
            $header_tel = get_field('telefono', 'option');
            if ($header_tel) :
                $header_tel_url = $header_tel['url'];
                $header_tel_title = $header_tel['title'];
                $header_tel_target = $header_tel['target'] ? $header_tel['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($header_tel_url); ?>" target="<?php echo esc_attr($header_tel_target); ?>"><?php echo esc_html($header_tel_title); ?></a>
            <?php endif;
            $header_prenotazione = get_field('prenota_una_visita', 'option');
            if ($header_prenotazione) :
                $header_prenotazione_url = $header_prenotazione['url'];
                $header_prenotazione_title = $header_prenotazione['title'];
                $header_prenotazione_target = $header_prenotazione['target'] ? $header_prenotazione['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($header_prenotazione_url); ?>" target="<?php echo esc_attr($header_prenotazione_target); ?>"><?php echo esc_html($header_prenotazione_title); ?></a>
            <?php endif; ?>
        </div>
        <div class="logo py-4 px-6">
            <a href="<?php echo home_url(); ?>/#hero" class="text-sky-100"><img class="h-12" src="<?php echo get_template_directory_uri() . '/assets/image/Logo.svg'; ?>" alt=""></a>
        </div>
        <div id="hamburger" class="xl:hidden block">
            <span></span>
            <span></span>
        </div>
        <div class="xl:flex hidden flex-col w-auto h-full">

            <nav class="menu py-4">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'flex xl:row colum flex-wrap',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s text-sky-50 justify-center">%3$s</ul>'
                ));
                ?>
            </nav>
        </div>
        <nav class="xl:hidden block menu-mobile w-full">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'         =>  false,
                'menu_class'        => 'w-full flex flex-col flex-wrap',
                'orderby'           => 'menu_order',
                'items_wrap'        => '<ul id="%1$s" class="%2$s text-sky-50 md:text-[48px] text-[36px]">%3$s</ul>'
            ));
            ?>

            <?php
            $header_cta = get_field('cta', 'option');
            if ($header_cta) :
                $header_cta_url = $header_cta['url'];
                $header_cta_title = $header_cta['title'];
                $header_cta_target = $header_cta['target'] ? $header_cta['target'] : '_self';
            ?>

                <div class="cta-mobile w-full">
                    <a href="<?php echo esc_url($header_cta_url); ?>" target="<?php echo esc_attr($header_cta_target); ?>" class="w-full block my-8 py-2 px-6 bg-transparent border border-sky-100 text-sky-100 text-center">
                        <?php echo esc_html($header_cta_title); ?>
                    </a>
                </div>
            <?php endif; ?>
        </nav>

        <?php
        $header_cta = get_field('cta', 'option');
        if ($header_cta) :
            $header_cta_url = $header_cta['url'];
            $header_cta_title = $header_cta['title'];
            $header_cta_target = $header_cta['target'] ? $header_cta['target'] : '_self';
        ?>
            <div class="cta xl:block hidden xl:w-auto px-6">
                <a href="<?php echo esc_url($header_cta_url); ?>" target="<?php echo esc_attr($header_cta_target); ?>" class="xl:w-auto xl:block xl:my-0 py-2 px-6 bg-transparent hover:bg-sky-100 border border-sky-100 hover:border-sky-800 text-sky-100 hover:text-sky-800 text-center">
                    <?php echo esc_html($header_cta_title); ?>
                </a>
            </div>
        <?php endif; ?>

    </header>