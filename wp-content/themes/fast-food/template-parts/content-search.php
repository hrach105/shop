<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fast-food
 */

?>

<div class="col-12 col-sm-12 col-md-6 col-lg05 col-xl-4">
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <?php fast_food_post_thumbnail(); ?>
      <div>
          <header class="entry-header">
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

              <?php if ( 'post' === get_post_type() ) : ?>
                  <div class="entry-meta">
                      <?php
                      fast_food_posted_on();
                      fast_food_posted_by();
                      ?>
                  </div><!-- .entry-meta -->
              <?php endif; ?>
          </header>
          <div class="entry-summary">
              <?php the_excerpt(); ?>
          </div>
      </div>

       <footer class="entry-footer">
           <?php fast_food_entry_footer(); ?>
       </footer>
   </article>
</div>

