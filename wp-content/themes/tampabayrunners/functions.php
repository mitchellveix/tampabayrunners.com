<?php

// Styles //
function tampabayrunners_styles() {

    wp_enqueue_style(
        'tampabayrunners-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // wp_enqueue_style(
    //     'tampabayrunners-header',
    //     get_template_directory_uri() . '/assets/css/header.css',
    //     array('tampabayrunners-style'),
    //     wp_get_theme()->get('Version')
    // );

}

add_action('wp_enqueue_scripts', 'tampabayrunners_styles');

// Scripts //
// function vikesstudio_enqueue_portfolio_filter_scripts() {

//     wp_enqueue_script(
//         'vikesstudio-portfolio-filter',
//         get_template_directory_uri() . '/assets/js/portfolio-filter.js',
//         array(),
//         '1.0',
//         true
//     );
// }

// add_action('wp_enqueue_scripts','tampabayrunners_enqueue_portfolio_filter_scripts');

// Fonts //
function tampabayrunners_enqueue_fonts() {
    wp_enqueue_style(
        'tbr-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'tampabayrunners_enqueue_fonts' );

// Patterns //
function tampabayrunners_register_patterns(){

    register_block_pattern_category(
        'tampabayrunners',
        array(
            'label' => 'Tampa Bay Runners'
        )
    );

}

add_action(
    'init',
    'tampabayrunners_register_patterns'
);

//Pattern files //
function tampabayrunners_register_pattern_files(){

    // register_block_pattern(
    //     'tampabayrunners/hero',
    //     array(
    //         'title' => 'Hero',
    //         'content' => file_get_contents(
    //             get_template_directory() 
    //             . '/patterns/hero.php'
    //         )
    //     )
    // );

}

add_action('init','tampabayrunners_register_pattern_files');