<?php
/*Replace = casi*/

function casi()
{
    register_post_type(
        'casi',
        array(
            'labels'                =>          array(
                'name'              =>          'Casi Clinici',
                'singular_name'     =>          'Caso',
                'all_items'         =>          'Tutti i casi',
                'add_new'           =>          'Aggiungi un nuovo caso',
                'add_new_item'      =>          'Aggiungi un nuovo caso',
                'edit_item'         =>          'Modifica caso',
                'new_item'          =>          'Nuovo caso',
                'view_item'         =>          'Visualizza casi',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'casi',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          23,
            'menu_icon'             =>          'dashicons-plus-alt', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'casi',
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
add_action('init', 'casi');
