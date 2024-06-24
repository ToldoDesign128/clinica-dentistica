<?php
/*Replace = servizi*/

function servizi()
{
    register_post_type(
        'servizi',
        array(
            'labels'                =>          array(
                'name'              =>          'Servizi',
                'singular_name'     =>          'Servizio',
                'all_items'         =>          'Tutti i servizi',
                'add_new'           =>          'Aggiungi un nuovo servizio',
                'add_new_item'      =>          'Aggiungi un nuovo servizio',
                'edit_item'         =>          'Modifica servizio',
                'new_item'          =>          'Nuovo servizio',
                'view_item'         =>          'Visualizza servizi',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'servizi',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          22,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'servizi',
                'with-front'        =>          false,
            ),
            'has_archive'           =>          false,
            'capability_type'       =>          'post',
            'hierarchycal'          =>          false,
            'show_in_rest'          =>          false, //gutemberg disattivato
            'supports'              =>          array('title') //campi supportati
        ),
        flush_rewrite_rules() /*fine delle opzioni*/
    );
}
add_action('init', 'servizi');
