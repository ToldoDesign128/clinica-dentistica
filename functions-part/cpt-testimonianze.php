<?php
/*Replace = recensioni*/

function recensioni()
{
    register_post_type(
        'recensioni',
        array(
            'labels'                =>          array(
                'name'              =>          'Recensioni',
                'singular_name'     =>          'Recensione',
                'all_items'         =>          'Tutti le recensioni',
                'add_new'           =>          'Aggiungi una nuova recensione',
                'add_new_item'      =>          'Aggiungi una nuova recensione',
                'edit_item'         =>          'Modifica recensione',
                'new_item'          =>          'Nuovo recensione',
                'view_item'         =>          'Visualizza recensione',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'recensioni',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          21,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'recensioni',
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
add_action('init', 'recensioni');