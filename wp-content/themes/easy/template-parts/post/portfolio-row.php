<?php

$args = [
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6,
];
// Récupère les 6 dernières news
$recentPosts = new WP_Query( $args );
$nbColumnMax = 3;
?>

<?php if ( $recentPosts->have_posts() ) : ?>
    <?php while ( $recentPosts->have_posts() ) : ?>
    <!-- portfolio-row-<?= apply_filters('get_portfolio_row_number', $recentPosts, $nbColumnMax) ?> -->
    <div class="portfolio-block">
        <ul class="work-list">
            <?php $nbColumn = apply_filters('get_number_column_for_current_post', $recentPosts, $nbColumnMax) ?>
            <?php for($i=0; $i<$nbColumn ; $i++): ?>
                <?php $recentPosts->the_post(); ?>
                <?php get_template_part( 'template-parts/post/portfolio-row-item' ); ?>
            <?php endfor; ?>
        </ul>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>