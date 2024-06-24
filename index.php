<?php get_header(); ?>
<!-- Hero -->
<section id="hero" class="h-screen">

</section>

<!-- Testimonianze -->
<section id="testimonianze" class="mb-24 flex flex-row flex-wrap">
    <div class="lg:w-1/2 w-full px-6 py-4">
        <p class="lg:text-5xl text-3xl">Cosa dicono di noi</p>
    </div>
    <!-- Quote block -->
    <div class="swiperQuote lg:w-1/2 w-full overflow-x-clip px-6 py-4">
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
                        <p class="lg:text-3xl"><?php echo wp_kses_post(get_field('testo_recensione')); ?></p>
                        <p class="lg:text-xl lg:py-8 py-4"><?php echo esc_html(get_field('nome_e_cognome')); ?></p>
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
<section id="formContatti" class="flex flex-row flex-wrap bg-slate-300">
    <div class="lg:w-1/2 w-full lg:px-12 px-6 lg:py-16 py-8">
        <div class="form bg-slate-600 p-8">
            <?php echo do_shortcode('[contact-form-7 id="a59275a" title="Form di contatto"]'); ?>
        </div>
    </div>
    <div class="map lg:w-1/2 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.244385561743!2d12.495821675561842!3d41.909104863473075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61090236f0dd%3A0xddb583b875f0369!2sVia%20Piave%2C%2040%2C%2000187%20Roma%20RM!5e0!3m2!1sit!2sit!4v1719236241753!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
<?php get_footer(); ?>