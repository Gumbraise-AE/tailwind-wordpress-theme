<?php

defined( 'ABSPATH' ) || exit;

require get_theme_file_path( '/inc/cpt-nft.php' );


//wp_enqueue_script( 'gumbraise-nft-script', get_template_directory_uri() . '/public/build/app.js');
wp_enqueue_style( 'gumbraise-nft-style', get_template_directory_uri() . '/public/build/app.css',false,'1.1','all');