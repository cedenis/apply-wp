<?php

/**
 * Retourne le numéro de ligne pour les portfolios
 *
 * @param int $nbColumnMax
 */
function getPortfolioRowNumber(WP_Query $posts, $nbColumnMax)
{
    return (int) ($posts->current_post/$nbColumnMax + 1) + 1;
}
add_filter('get_portfolio_row_number', 'getPortfolioRowNumber', 10, 2);

/**
 * Retourne le nombre de colonnes à réaliser pour le post courant
 *
 * @param int $nbColumnMax
 */
function getNumberColumnForCurrentPost(WP_Query $posts, $nbColumnMax)
{
    return min($posts->post_count - $posts->current_post - 1, $nbColumnMax);
}
add_filter('get_number_column_for_current_post', 'getNumberColumnForCurrentPost', 10, 2);

function themeEasyStyles()
{
    wp_enqueue_style('theme_easy_fonts_Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', [], null);
    wp_enqueue_style('theme_easy_fonts_Raleway', 'https://fonts.googleapis.com/css?family=Raleway:900', [], null);
    wp_enqueue_style('theme_easy_fonts_Monoton', 'https://fonts.googleapis.com/css?family=Monoton', [], null);

    wp_enqueue_style('theme_easy_boostrap', get_theme_file_uri('html/css/bootstrap.min.css'));
    wp_enqueue_style('theme_easy_magnific_popup', get_theme_file_uri('html/css/magnific-popup.min.css'));
    wp_enqueue_style('theme_easy_fonts', get_theme_file_uri('html/css/font-awesome.min.css'));
    wp_enqueue_style('theme_easy_style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'themeEasyStyles' );

function themeEasyScripts()
{
    wp_enqueue_script('theme_easy_modernizr', get_theme_file_uri('html/js/modernizr.js'), [], false, true);
    wp_enqueue_script('theme_easy_jquery', get_theme_file_uri('html/js/jquery.min.js'), [], false, true);

    wp_enqueue_script('theme_easy_shiv', get_theme_file_uri('html/js/html5shiv.js'), [], false, true);
    wp_script_add_data( 'theme_easy_shiv', 'conditional', 'IE' );

    wp_enqueue_script('theme_easy_plugin', get_theme_file_uri('html/js/plugins.js'), ['theme_easy_jquery'], false, true);
    wp_enqueue_script('theme_easy_smooth_scroll', get_theme_file_uri('html/js/smooth-scroll.js'), ['theme_easy_jquery'], false, true);
    wp_enqueue_script('theme_easy_jquery_count', get_theme_file_uri('html/js/jquery.countTo.js'), ['theme_easy_jquery'], false, true);
    wp_enqueue_script('theme_easy_particules', get_theme_file_uri('html/js/particles.min.js'), [], false, true);
    wp_enqueue_script('theme_easy_main', get_theme_file_uri('html/js/main.js'), ['theme_easy_jquery'], false, true);
}
add_action( 'wp_enqueue_scripts', 'themeEasyScripts' );
