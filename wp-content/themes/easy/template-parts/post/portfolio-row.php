<?php

$args = [
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6,
];
// Récupère les 6 dernières news
$recent_posts = new WP_Query( $args );
$nbColumnMax = 3;
?>

<?php if ( $recent_posts->have_posts() ) : ?>
    <?php while ( $recent_posts->have_posts() ) : ?>
    <!-- portfolio-row-<?= (int) ($recent_posts->current_post/$nbColumnMax + 1) + 1 ?> -->
    <div class="portfolio-block">
        <ul class="work-list">
            <?php $nbColumn = $recent_posts->post_count - $recent_posts->current_post - 1 ?>
            <?php for($i=0; $i<min($nbColumnMax, $nbColumn) ; $i++): ?>
                <?php $recent_posts->the_post(); ?>
                <?php get_template_part( 'template-parts/post/portfolio-row-item' ); ?>
            <?php endfor; ?>
        </ul>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>