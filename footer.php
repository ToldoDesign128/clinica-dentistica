<!-- Whatsapp Btn -->
<?php
$footer_whatsapp = get_field('whatsapp', 'option');
if ($footer_whatsapp) :
    $footer_whatsapp_link = $footer_whatsapp['url'];
    $footer_whatsapp_target = $footer_whatsapp['target'] ? $footer_whatsapp['target'] : '_self';
?>
    <a class="fixed bottom-8 right-8 bg-green-500 hover:bg-green-700 hover:scale-105 rounded-full p-4 transition-all duration-300 z-50" href="<?php echo esc_url($footer_whatsapp_link); ?>" target="<?php echo esc_attr($footer_whatsapp_target); ?>">
        <img class="h-8 w-auto" src="<?php echo get_template_directory_uri() . '/assets/image/icon/whatsapp.svg'; ?>" alt="">
    </a>
<?php endif; ?>



<!-- Footer -->
<footer class="flex flex-row flex-wrap justify-between bg-blue-800">
    <div class="footer-logo xl:w-1/6 w-full flex items-center xl:border-r border-b border-blue-50 xl:py-12 py-8 px-6">
        <a href="#" class="text-blue-100"><img class="h-12" src="<?php echo get_template_directory_uri() . '/assets/image/Logo.svg'; ?>" alt=""></a>
    </div>
    <div class="footer-content xl:w-1/2 w-full flex flex-row flex-wrap xl:py-12 py-8 px-6 text-right">
        <div class="xl:w-1/2 w-full flex flex-col flex-wrap xl:items-end items-center gap-4 text-lg text-blue-50">
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
            $footer_instagram = get_field('instagram', 'option');
            if ($footer_instagram) :
                $footer_instagram_link = $footer_instagram['url'];
                $footer_instagram_title = $footer_instagram['title'];
                $footer_instagram_target = $footer_instagram['target'] ? $footer_instagram['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_instagram_link); ?>" target="<?php echo esc_attr($footer_instagram_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_instagram_title); ?>
                </a>
            <?php endif;
            $footer_telefono = get_field('telefono_footer', 'option');
            if ($footer_telefono) :
                $footer_telefono_link = $footer_telefono['url'];
                $footer_telefono_title = $footer_telefono['title'];
                $footer_telefono_target = $footer_telefono['target'] ? $footer_telefono['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_telefono_link); ?>" target="<?php echo esc_attr($footer_telefono_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_telefono_title); ?>
                </a>
            <?php endif; 
            $footer_email = get_field('email_footer', 'option');
            if ($footer_email) :
                $footer_email_link = $footer_email['url'];
                $footer_email_title = $footer_email['title'];
                $footer_email_target = $footer_email['target'] ? $footer_email['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($footer_email_link); ?>" target="<?php echo esc_attr($footer_email_target); ?>" class="w-fit">
                    <?php echo esc_html($footer_email_title); ?>
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
        <div class="xl:w-1/2 w-full flex flex-col flex-wrap xl:items-end items-center xl:pt-0 pt-4 gap-4 text-blue-50">
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
            <p class="w-full xl:text-right text-center text-sm">Centro Odontoiatrico La Rosa STP SRL<br>Dir. sanitario Dott Giuseppe La Rosa<br><br>Tutti i diritti sono riservati.</p>
        </div>

    </div>
    <div class="footer-credits text-center w-full border-t border-blue-50 py-4 px-6">
        <p class="flex items-center justify-center text-blue-50">Design and Develop by
            <a class=" ml-2 text-blue-100" href="https://federicotoldo.com/" target="_blank">Federico Toldo</a>
            <span class="text-red-500">*</span>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>