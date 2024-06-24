<?php 

function remove_post_type() {
    remove_menu_page('edit.php'); // Rimuove la voce di menu "Articoli"
}
add_action('admin_menu', 'remove_post_type');

function disable_post_feed() {
    if (is_feed()) {
        wp_die(__('I feed non sono disponibili.'));
    }
}
add_action('do_feed', 'disable_post_feed', 1);
add_action('do_feed_rdf', 'disable_post_feed', 1);
add_action('do_feed_rss', 'disable_post_feed', 1);
add_action('do_feed_rss2', 'disable_post_feed', 1);
add_action('do_feed_atom', 'disable_post_feed', 1);

function remove_dashboard_widgets() {
    remove_meta_box('dashboard_recent_posts', 'dashboard', 'normal'); // Rimuove il widget "Articoli Recenti"
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function disable_post_archives($query) {
    if (!is_admin() && $query->is_main_query() && (is_home() || is_category() || is_tag())) {
        $query->set('post_type', 'page'); // Cambia il tipo di post mostrato
    }
}
add_action('pre_get_posts', 'disable_post_archives');