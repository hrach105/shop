<?php // Template Name: About Us ?>

<?php get_header() ?>

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="about-desciption">
                    <h1>About us</h1>
                    <p><?php the_field('about_description')?></p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="about-image">
                    <img src="<?php the_field('about_image')?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
