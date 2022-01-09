<?php


// Register Custom Post Type
if ( ! function_exists( 'gumbraise_nft' ) ) :
    function gumbraise_nft() {

        $labels = array(
            'name'                  => _x( 'Comptes rendus', 'Post Type General Name', 'gumbraise-nft' ),
            'singular_name'         => _x( 'Comptes rendus', 'Post Type Singular Name', 'gumbraise-nft' ),
            'menu_name'             => __( 'Comptes rendus', 'gumbraise-nft' ),
            'name_admin_bar'        => __( 'Comptes rendus', 'gumbraise-nft' ),
            'archives'              => __( 'Item Archives', 'gumbraise-nft' ),
            'attributes'            => __( 'Item Attributes', 'gumbraise-nft' ),
            'parent_item_colon'     => __( 'Parent Item:', 'gumbraise-nft' ),
            'all_items'             => __( 'Tous les comptes rendus', 'gumbraise-nft' ),
            'add_new_item'          => __( 'Ajouter un compte rendu', 'gumbraise-nft' ),
            'add_new'               => __( 'Ajouter un compte rendu', 'gumbraise-nft' ),
            'new_item'              => __( 'Nouveau compte rendu', 'gumbraise-nft' ),
            'edit_item'             => __( 'Editer un compte rendu', 'gumbraise-nft' ),
            'update_item'           => __( 'Mettre à jour', 'gumbraise-nft' ),
            'view_item'             => __( 'Voir le compte rendu', 'gumbraise-nft' ),
            'view_items'            => __( 'Voir les comptes rendus', 'gumbraise-nft' ),
            'search_items'          => __( 'Rechercher un compte rendu', 'gumbraise-nft' ),
            'not_found'             => __( 'Aucun compte rendu', 'gumbraise-nft' ),
            'not_found_in_trash'    => __( 'Aucun compte rendu trouvé dans la corbeille', 'gumbraise-nft' ),
            'featured_image'        => __( 'Image à la une', 'gumbraise-nft' ),
            'set_featured_image'    => __( 'Parametrer l\'image à la une', 'gumbraise-nft' ),
            'remove_featured_image' => __( 'Supprimer l\'image à la une', 'gumbraise-nft' ),
            'use_featured_image'    => __( 'Utiliser l\'image à la une', 'gumbraise-nft' ),
            'insert_into_item'      => __( 'Insert into item', 'gumbraise-nft' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'gumbraise-nft' ),
            'items_list'            => __( 'Items list', 'gumbraise-nft' ),
            'items_list_navigation' => __( 'Items list navigation', 'gumbraise-nft' ),
            'filter_items_list'     => __( 'Filter items list', 'gumbraise-nft' ),
        );
        $args   = array(
            'label'               => __( 'cr', 'gumbraise-nft' ),
            'taxonomies'          => array( 'category' ),
            'description'         => __( 'CPT pour afficher des comptes rendus', 'gumbraise-nft' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-clipboard',
            'content'             => '\0019ff',
            'query_var'           => true,
            'rewrite'             => array( 'slug', '' ),
        );
        register_post_type( 'cr', $args );
        flush_rewrite_rules();
    }

    add_action( 'init', 'gumbraise_nft', 10 );
endif;

if ( ! function_exists( 'gumbraise_nft_taxonomy' ) ) :
    function gumbraise_nft_taxonomy() {

        $labels_tags = array(
            'name'                       => _x( 'Tags', 'Taxonomy General Name', 'double6' ),
            'singular_name'              => _x( 'Tags', 'Taxonomy Singular Name', 'double6' ),
            'menu_name'                  => __( 'Tags', 'double6' ),
            'all_items'                  => __( 'All Items', 'double6' ),
            'parent_item'                => __( 'Parent Item', 'double6' ),
            'parent_item_colon'          => __( 'Parent Item:', 'double6' ),
            'new_item_name'              => __( 'New Item Name', 'double6' ),
            'add_new_item'               => __( 'Ajouter un tag', 'double6' ),
            'edit_item'                  => __( 'Edit Item', 'double6' ),
            'update_item'                => __( 'Update Item', 'double6' ),
            'view_item'                  => __( 'View Item', 'double6' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'double6' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'double6' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'double6' ),
            'popular_items'              => __( 'Popular Items', 'double6' ),
            'search_items'               => __( 'Search Items', 'double6' ),
            'not_found'                  => __( 'Not Found', 'double6' ),
            'no_terms'                   => __( 'No items', 'double6' ),
            'items_list'                 => __( 'Items list', 'double6' ),
            'items_list_navigation'      => __( 'Items list navigation', 'double6' ),
        );
        $args_tags   = array(
            'labels'            => $labels_tags,
            'hierarchical'      => false,
            'public'            => true,
            'show_in_rest'      => true,
            'shop_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'tagz' ),
        );
        register_taxonomy( 'Tagz', array( 'cr' ), $args_tags );
    }

//    add_action( 'init', 'gumbraise-nft_cr_taxonomy', 10 );
endif;