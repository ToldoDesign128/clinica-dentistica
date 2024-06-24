<!-- Footer -->
<footer class="flex flex-row flex-wrap justify-between bg-slate-800">
    <div class="footer-logo lg:w-1/6 w-full flex items-center lg:border-r border-b border-sky-50 lg:py-12 py-8 px-6">
        <a href="#" class="text-slate-100"><img class="h-12" src="<?php echo get_template_directory_uri() . '/assets/image/Logo.svg'; ?>" alt=""></a>
    </div>
    <div class="footer-content lg:w-1/2 w-full flex flex-row flex-wrap lg:py-12 py-8 px-6 text-right">
        <div class="lg:w-1/2 w-full flex flex-col flex-wrap lg:items-end items-center gap-4 text-lg text-sky-50">
            <?php
            $footer_facebook = get_field('facebook', 'option');
            if ($footer_facebook) :
                $footer_facebook_link = $footer_facebook['url'];
                $footer_facebook_title = $footer_facebook['title'];
                $footer_facebook_target = $footer_facebook['target'] ? $footer_facebook['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_facebook_link); ?>" target="<?php echo esc_attr($footer_facebook_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_facebook_title); ?>
                </a>
            <?php endif;
            $footer_youtube = get_field('youtube$footer_youtube', 'option');
            if ($footer_youtube) :
                $footer_youtube_link = $footer_youtube['url'];
                $footer_youtube_title = $footer_youtube['title'];
                $footer_youtube_target = $footer_youtube['target'] ? $footer_youtube['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_youtube_link); ?>" target="<?php echo esc_attr($footer_youtube_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_youtube_title); ?>
                </a>
            <?php endif;
            $footer_indirizzo = get_field('indirizzo', 'option');
            if ($footer_indirizzo) :
                $footer_indirizzo_link = $footer_indirizzo['url'];
                $footer_indirizzo_title = $footer_indirizzo['title'];
                $footer_indirizzo_target = $footer_indirizzo['target'] ? $footer_indirizzo['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_indirizzo_link); ?>" target="<?php echo esc_attr($footer_indirizzo_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_indirizzo_title); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="lg:w-1/2 w-full flex flex-col flex-wrap lg:items-end items-center lg:pt-0 pt-4 gap-4 text-sky-50">
            <?php
            $footer_privacy_policy = get_field('privacy_policy', 'option');
            if ($footer_privacy_policy) :
                $footer_privacy_policy_link = $footer_privacy_policy['url'];
                $footer_privacy_policy_title = $footer_privacy_policy['title'];
                $footer_privacy_policy_target = $footer_privacy_policy['target'] ? $footer_privacy_policy['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_privacy_policy_link); ?>" target="<?php echo esc_attr($footer_privacy_policy_target); ?>" class="w-fit text-lg">
                    <?php echo esc_html($footer_privacy_policy_title); ?>
                </a>
            <?php endif;
            $footer_cookie_policy = get_field('cookie_policy', 'option');
            if ($footer_cookie_policy) :
                $footer_cookie_policy_link = $footer_cookie_policy['url'];
                $footer_cookie_policy_title = $footer_cookie_policy['title'];
                $footer_cookie_policy_target = $footer_cookie_policy['target'] ? $footer_cookie_policy['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_cookie_policy_link); ?>" target="<?php echo esc_attr($footer_cookie_policy_target); ?>" class="w-fit text-lg">
                    <?php echo esc_html($footer_cookie_policy_title); ?>
                </a>
            <?php endif; ?>
            <p class="w-full lg:text-right text-center text-sm">Centro Odontoiatrico La Rosa 2024®<br>Tutti i diritti sono riservati.</p>
        </div>

    </div>
    <div class="footer-credits text-center w-full border-t border-sky-50 py-4 px-6">
        <p class="flex items-center justify-center text-sky-50">Design and Develop by
            <a class=" ml-2 text-sky-100" href="https://federicotoldo.com/" target="_blank">Federico Toldo</a>
            <span class="text-red-500">*</span>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>