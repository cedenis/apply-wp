<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<?php get_header('head'); ?>

<body>
<!-- preloader -->
<div id="preloader"></div>

<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- main -->
<div id="main">
    <!-- header -->
    <?php get_header(); ?>

    <!-- gallery -->
    <div class="gallery" id="gallery">
        <div class="container">
            <div class="row center-block">

                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h2>Work hard. Dream big.</h2>
                    <p class="title-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Iste ratione molestias magni.</p>
                    <p class="text-spacing">It’s not a job, It’s a life.</p>
                </div>

                <div class="gallery-wrapper	col-sm-12 col-xs-12">
                    <?php get_template_part( 'template-parts/post/portfolio-row' ); ?>
                </div>

                <div class="col-sm-12">
                    <a href="portfolio-lightbox-3.html" class="see-more">See more <i class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>

    <!-- counters -->
    <div class="counters">
        <div class="container">
            <div class="row">

                <div class="counter col-md-3 col-sm-6 col-xs-6">
                    <span class="counter-value" data-to="182" data-speed="7000"></span>
                    <span class="counter-text">Happy Clients</span>
                </div>

                <div class="counter col-md-3 col-sm-6 col-xs-6">
                    <span class="counter-value" data-to="234" data-speed="7000"></span>
                    <span class="counter-text">Project Completed</span>
                </div>

                <div class="counter col-md-3 col-sm-6 col-xs-6">
                    <span class="counter-value" data-to="156" data-speed="7000"></span>
                    <span class="counter-text">Award Winning</span>
                </div>

                <div class="counter col-md-3 col-sm-6 col-xs-6">
                    <span class="counter-value" data-to="353" data-speed="7000"></span>
                    <span class="counter-text">Cups of Coffee</span>
                </div>

            </div>
        </div>
    </div>

    <!-- contact form -->
    <div class="contact-form demo-2 padded-top-middle padded-bottom-middle" id="contactform">
        <div class="container">
            <div class="row center-block">

                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <h2>contacts</h2>
                    <p class="title-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <form id="contact-form" name="contact" action="javascript:void(0)" method="post" novalidate="novalidate">
                        <fieldset class="title-font">

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" />
                                </div>

                                <div class="col-sm-12">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>

                            <label for="message">Message</label>
                            <textarea name="message" id="message"></textarea>
                            <input id="contact-submit" type="submit" name="submit" value="Send Email" class="title-font">
                        </fieldset>
                        <div id="success-alert"></div>
                    </form>
                </div>
                <div class="form-text col-sm-12 col-md-5">
                    <h4>Let's get to work!</h4>
                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>

                    <ul class="form-info">
                        <li><a href="mailto:work@jamesvincent.me" class="white-link">work@jamesvincent.me</a></li>
                        <li><a href="tel:+9145632973" class="white-link">+9145632973</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php get_footer(); ?>
</div>

<!-- javascript -->
<script src="<?= get_stylesheet_directory_uri()?>/html/js/plugins.js"></script>
<script src="<?= get_stylesheet_directory_uri()?>/html/js/smooth-scroll.js"></script>
<script src="<?= get_stylesheet_directory_uri()?>/html/js/jquery.countTo.js"></script>
<script src="<?= get_stylesheet_directory_uri()?>/html/js/particles.min.js"></script>
<script src="<?= get_stylesheet_directory_uri()?>/html/js/main.js"></script>
</body>
</html>