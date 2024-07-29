<?php get_header();?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/assets/styles/slick.css' ?>">
    <script src="<?php echo  get_template_directory_uri(). '/assets/js/slick.min.js'  ?>"></script>
<div class="container">
    <section class="home-products-categories">
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
        ) );

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            echo '<div class="product-categories">';
            $count = 0;
            foreach ( $terms as $term ) {
                // Skip the "Uncategorized" category
                if ( $term->name === 'Uncategorized' ) {
                    continue;
                }
                echo '<div class="product-category">';
                echo '<a href="' . get_term_link( $term ) . '">';

                // Display the category image
                $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                if ( $thumbnail_id ) {
                    $image_url = wp_get_attachment_url( $thumbnail_id );
                    echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $term->name ) . '" />';
                } else {
                    echo '<img src="' . wc_placeholder_img_src() . '" alt="' . esc_attr( $term->name ) . '" />';
                }

                echo $term->name . '</a>';
                echo '</div>';
                $count++;
                if ( $count >= 10 ) {
                    break;
                }
            }
            echo '</div>';
        }
        ?>
    </section>
</div>

<section class="banners">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 col-md-6 col-lg-8 col-xl-8">
                <div class="big-img" style="background-image:url('<?php the_field('big_image') ?>')">

                </div>
            </div>
            <div class="col-md-12 col-12 col-md-6 col-lg-4 col-xl-4">
              <div class="small-imgs">
                  <img src="<?php the_field('small_image_1') ?>" alt="">
                  <img src="<?php the_field('small_image_2') ?>" alt="">
              </div>
            </div>
        </div>
    </div>
</section>
    <section class="hot-products">
        <div class="container">
            <h2 class="section-title">Popular Products</h2>
            <?php echo do_shortcode('[recent_products per_page="4" columns="4"]') ?>
        </div>
    </section>
<section class="hot-products">
    <div class="container">
        <h2 class="section-title">Hot Products</h2>
        <?php echo do_shortcode('[best_selling_products per_page="4" columns="4"]')?>
    </div>
</section>

<section class="attachment-banner" style="background-image:url('<?php the_field('bachground_image') ?>')">

</section>


<?php get_footer();?>