<?php /*
Template Name: 1:1000 Blog Page
*/ ?>
<?php define('WP_USE_THEMES', true); get_header(); ?>

    <div class="page-container">
        <div class="page-hero">
          <div id="home"class="page-banner">
            <div class="page-title">
              <h1>1:1000</h1>
              <h2>1 PICTURE, 1000 WORDS</h2>
            </div>
          </div>
        </div>
        <div class="single-wrapper row">
          <div class="main-content col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <?php
              query_posts('post_type=post&post_status=publish&posts_per_page=100&paged=&category_name=1:1000'.get_query_var('pages'));

              if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog-container">
                  <article>
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <div>
                      <?php the_excerpt('');
                        echo '<a class="post-link" href="' . get_permalink() . '"> Read More....</a> </li><br>';
                      ?>
                    </div>
                  </article> <!-- /.article-excerpt -->

                </div>
              <?php endwhile; else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
              <?php
                endif;
                wp_reset_query();
              ?>
          </div>
        </div>
      </div>

<?php get_footer(); ?>