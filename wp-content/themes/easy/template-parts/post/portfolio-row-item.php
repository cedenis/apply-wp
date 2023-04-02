<li>
    <a href="<?php the_permalink(); ?>">
        <img src="<?= get_stylesheet_directory_uri()?>/html/images/380x380.jpg" alt="">
        <div class="gallery-content">
            <div class="project-title"><?php the_title(); ?></div>
            <div class="project-client"><?php the_author(); ?></div>
        </div>
    </a>
</li>