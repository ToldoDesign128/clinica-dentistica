<?php get_header(); ?>
<!-- Hero -->
<section id="hero" class="h-screen">
    <div class="h-full flex lg:flex-row flex-col bg-gradient-to-r from-blue-100 to-blue-400 overflow-clip relative">
        <div class="h-full 3xl:w-2/5 lg:w-1/2 w-full flex flex-col flex-wrap self-center lg:justify-center justify-normal lg:mt-20 md:mt-48 mt-24 lg:py-24 py-12 px-6 z-10">
            <h1 class="w-full max-w-[18ch] uppercase lg:text-blue-700 text-blue-100"><?php echo esc_html(get_field('titolo_hero')); ?></h1>
            <h2 class="w-full lg:text-blue-800 text-blue-50 mt-6"><?php echo esc_html(get_field('sottotitolo_hero')); ?></h2>
            <a class="hero-buttom w-fit flex flex-row justify-between items-center mt-8 px-6 py-2 bg-blue-500 text-white rounded-full lg:text-lg text-sm uppercase" href="#ilCentro">Scopri il nuovo Centro <img class="h-5 w-auto pl-8" src="<?php echo get_template_directory_uri() . '/assets/image/icon/arrow-down.svg'; ?>" alt=""></a>
        </div>
        <?php
        $image_hero = get_field('sfondo_hero');
        if (!empty($image_hero)) : ?>
            <img class="absolute lg:block md:hidden hidden t-0 l-0 w-full h-full object-cover z-0" src="<?php echo esc_url($image_hero['url']); ?>" alt="<?php echo esc_attr($image_hero['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image_hero_tablet = get_field('sfondo_hero_tablet');
        if (!empty($image_hero_tablet)) : ?>
            <img class="absolute lg:hidden md:block hidden t-0 l-0 w-full h-full object-cover z-0" src="<?php echo esc_url($image_hero_tablet['url']); ?>" alt="<?php echo esc_attr($image_hero_tablet['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image_hero_mobile = get_field('sfondo_hero_mobile');
        if (!empty($image_hero_mobile)) : ?>
            <img class="absolute lg:hidden md:hidden block t-0 l-0 w-full h-full object-cover z-0" src="<?php echo esc_url($image_hero_mobile['url']); ?>" alt="<?php echo esc_attr($image_hero_mobile['alt']); ?>" />
        <?php endif; ?>
    </div>
</section>

<!-- Chi Siamo -->
<section id="chiSiamo" class="lg:pt-12 pt-20">
    <div class="flex lg:flex-row flex-col justify-between lg:py-24 py-12 px-6">
        <h3 class="w-fit h-fit relative uppercase xl:text-6xl md:text-4xl text-2xl">
            <?php echo esc_html(get_field('titolo_chi_siamo')); ?>
            <span class="w-full absolute bottom-[-2px] left-0 h-4 bg-blue-300 -z-10"></span>
        </h3>
        <div class="xl:w-3/5 lg:w-1/2 w-full flex xl:flex-row flex-col justify-between bg-blue-200 lg:mt-0 mt-8 lg:p-6 p-4 rounded-lg">
            <div class="xl:w-5/12 w-full">
                <div class="w-full lg:text-lg text-base"><?php the_field('testo_1_chi_siamo'); ?></div>
                <div class="w-full lg:text-lg text-base py-6"><?php the_field('testo_2_chi_siamo'); ?></div>
                <div class="w-full lg:text-lg text-base font-semibold "><?php the_field('testo_3_chi_siamo'); ?></div>
            </div>
            <?php
            $image_hero = get_field('immagine_chi_siamo');
            if (!empty($image_hero)) : ?>
                <img class="xl:w-2/5 w-full xl:mt-0 mt-8 object-cover rounded-md" src="<?php echo esc_url($image_hero['url']); ?>" alt="<?php echo esc_attr($image_hero['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
    <div class="flex lg:flex-row flex-col justify-between bg-blue-700 text-blue-100 mx-6 lg:p-12 p-6 rounded-lg">
        <div class="xl:w-2/5 lg:w-1/2 w-full">
            <div class="w-full lg:text-lg text-base"><?php the_field('testo_4_chi_siamo'); ?></div>
            <div class="w-full lg:text-lg text-base pt-6 "><?php the_field('testo_5_chi_siamo'); ?></div>
        </div>
        <div class="lg:w-1/2 w-full lg:pl-6 pl-0 lg:pt-0 pt-8">
            <p class="w-full lg:text-2xl text-xl font-semibold"><?php echo esc_html(get_field('testo_6_chi_siamo')); ?></p>
            <div class="flex flex-row flex-wrap lg:py-8 py-4">
                <?php
                // Check rows exists.
                if (have_rows('repeater_chi_siamo')) :
                    // Loop through rows.
                    while (have_rows('repeater_chi_siamo')) : the_row();
                        // Load sub field value.
                        $spec_repeater = get_sub_field('specializzazioni_repeater_chi_siamo'); ?>
                        <p class="md:w-1/2 w-full flex flex-row items-center lg:text-2xl text-xl leading-none text-blue-200 pt-4">
                            <span class="h-1 w-1 rounded-full mr-4 bg-blue-200"></span>
                            <?php echo esc_html($spec_repeater); ?>
                        </p>
                <?php
                    endwhile;
                endif; ?>
            </div>
            <div class="w-full lg:text-lg text-base pt-6"><?php the_field('testo_7_chi_siamo'); ?></div>
        </div>
    </div>
</section>

<!-- Il Centro -->
<section id="ilCentro" class="lg:pt-12 pt-20">
    <div class="flex md:flex-row flex-col justify-between lg:py-24 py-12 px-6">
        <div class="xl:w-1/3 md:w-2/5 w-full h-fit lg:sticky static top-32 left-0">
            <h4 class="w-fit h-fit relative uppercase xl:text-6xl md:text-4xl text-2xl">
                <?php echo esc_html(get_field('titolo_il_centro')); ?>
                <span class="w-full absolute bottom-[-2px] left-0 h-4 bg-blue-300 -z-10"></span>
            </h4>
            <div class="w-full text-base lg:pt-12 pt-6"><?php the_field('testo_il_centro'); ?></div>
            <div class="lg:py-12 py-6">
                <p class="w-fit uppercase relative text-blue-800 lg:text-2xl text-xl">
                    Orari
                    <span class="w-full absolute bottom-px left-0 h-2 bg-blue-300 -z-10"></span>
                </p>
                <ul class="lg:text-xl text-lg py-6">
                    <?php
                    // Check rows exists.
                    if (have_rows('repeter_orari_il_centro')) :
                        // Loop through rows.
                        while (have_rows('repeter_orari_il_centro')) : the_row();
                            // Load sub field value.
                            $day_repeater = get_sub_field('giorno_repeater');
                            $orari_repeater = get_sub_field('orario_repeater'); ?>
                            <li class="py-1 flex flex-row">
                                <span class="lg:w-1/4 w-1/2 text-blue-700 font-semibold">
                                    <?php echo esc_html($day_repeater); ?>
                                </span>
                                <?php echo esc_html($orari_repeater); ?>
                            </li>
                    <?php
                        endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
        <div class="xl:w-3/5 md:w-1/2 w-full grid md:grid-cols-2 gap-4 lg:pt-0 pt-8">
            <?php
            $images_gallery_1 = get_field('galleria_il_centro');
            if ($images_gallery_1) : ?>
                <div class="grid gap-4">
                    <?php foreach ($images_gallery_1 as $image_gallery_1) : ?>
                        <img class="lg:h-auto md:h-full h-auto w-full max-h-96 max-w-full object-cover rounded-lg" src="<?php echo esc_url($image_gallery_1['sizes']['large']); ?>" alt="<?php echo esc_attr($image_gallery_1['alt']); ?>" />
                    <?php endforeach; ?>
                </div>
            <?php endif;
            $images_gallery_2 = get_field('galleria_il_centro_2');
            if ($images_gallery_2) : ?>
                <div class="grid gap-4">
                    <?php foreach ($images_gallery_2 as $image_gallery_2) : ?>
                        <img class="lg:h-auto md:h-full h-auto w-full max-h-96 max-w-full object-cover rounded-lg" src="<?php echo esc_url($image_gallery_2['sizes']['large']); ?>" alt="<?php echo esc_attr($image_gallery_2['alt']); ?>" />
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Servizi -->
<section id="servizi" class="lg:pt-12 pt-20 px-6 overflow-x-clip">
    <div class="flex flex-row w-full py-12">
        <h3 class="w-fit h-fit relative uppercase xl:text-6xl md:text-4xl text-2xl">
            Servizi
            <span class="w-full absolute bottom-[-2px] left-0 h-4 bg-blue-300 -z-10"></span>
        </h3>
    </div>
    <div class="slider-servizi swiperService ">
        <div class="swiper-wrapper">

            <?php /* Custom Loop */

            $custom_loop = new WP_Query(array(
                'post_type'     => 'servizi',
                'posts_per_page' => 999,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            )); ?>

            <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>
                    <article class="swiper-slide md:max-h-[600px] max-h-full bg-blue-800 text-blue-100 overflow-clip rounded-lg">
                        <h3 class="xl:text-2xl text-xl leading-tight text-blue-50 py-12 px-6"><?php the_title(); ?></h3>
                        <div class="pb-12 px-6"><?php the_field('testo_servizi'); ?></div>
                        <?php
                        $image_servizi = get_field('immagine_servizi');
                        if (!empty($image_servizi)) : ?>
                            <img class="w-full md:block hidden object-cover" src="<?php echo esc_url($image_servizi['url']); ?>" alt="<?php echo esc_attr($image_servizi['alt']); ?>" />
                        <?php endif; ?>
                    </article>
                    <?php wp_reset_postdata(); ?>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="navigation-wrap">
            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- Casi Clinici -->

<!-- Testimonianze -->
<section id="testimonianze" class="pt-32 mb-24 flex flex-row flex-wrap">
    <div class="xl:w-1/3 md:w-1/2 w-full px-6 py-4">
        <p class="w-fit h-fit relative uppercase xl:text-4xl md:text-3xl text-2xl">
            Cosa dicono di noi
            <span class="w-full absolute bottom-[-2px] left-0 h-4 bg-blue-300 -z-10"></span>
        </p>
    </div>
    <!-- Quote block -->
    <div class="swiperQuote xl:w-2/3 md:w-1/2 w-full overflow-x-clip px-6 py-4">
        <ul class="swiper-wrapper h-auto">
            <?php
            $custom_loop = new WP_Query(array(
                'post_type' => 'recensioni',
                'posts_per_page' => 100,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            )); ?>

            <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                    <div class="swiper-slide">
                        <p class="xl:text-2xl text-xl border-b border-blue-500 pb-4"><?php echo wp_kses_post(get_field('testo_recensione')); ?></p>
                        <p class="xl:text-xl text-lg text-right font-bold py-4"><?php echo esc_html(get_field('nome_e_cognome')); ?></p>
                    </div>
                    <?php wp_reset_postdata(); ?>
            <?php endwhile;
            endif; ?>
        </ul>
        <div class="navigation-wrap">
            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- Form -->
<section id="formContatti" class="flex flex-row flex-wrap bg-blue-200">
    <div class="xl:w-1/2 w-full xl:px-12 px-6 xl:py-16 py-8">
        <div class="form bg-blue-700 p-8 rounded-lg">
            <?php echo do_shortcode('[contact-form-7 id="a59275a" title="Form di contatto"]'); ?>
        </div>
    </div>
    <div class="map xl:w-1/2 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.244385561743!2d12.495821675561842!3d41.909104863473075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61090236f0dd%3A0xddb583b875f0369!2sVia%20Piave%2C%2040%2C%2000187%20Roma%20RM!5e0!3m2!1sit!2sit!4v1719236241753!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
<?php get_footer(); ?>