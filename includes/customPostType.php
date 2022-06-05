<?php


function domi_Partners_cpt() {
    register_post_type('domi_partners_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Partner', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Partner', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Partner', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordneter Partner', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Partner anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Partner anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Partner hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Partner hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Partner bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Partner aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Partner suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Partner gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Partner im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Partner Informationen', 'Description', 'wptheme.fcseisa08'),
            'supports'            => ['title', 'thumbnail'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-awards',
        )
    );
}
add_action('init', 'domi_partners_cpt');
?>