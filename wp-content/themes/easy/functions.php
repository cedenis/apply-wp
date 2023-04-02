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
