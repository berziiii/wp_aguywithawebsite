<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Nozama
 * @since Nozama 1.0
 */

define('WP_USE_THEMES', true); get_header(); ?>

<main>
	<div class="page-container">
		<div class="page-hero">
			<div id="home"class="page-banner">
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="single-wrapper row">
			<div class="main-content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

				<div class="post-container">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h6>Author: <?php the_author(); ?><br>
					<?php the_date('F d, Y'); ?></h6>
					<div>
						<article>
							<?php the_content(); ?>

							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
						</article>
					</div>
				</div>
				<div class="post-navigation">
					<a class="post-link"><?php previous_post_link(); ?></a> &nbsp;&nbsp;||&nbsp;&nbsp; <a class="post-link"><?php next_post_link(); ?></a>
				</div>
			</div>
			<div class="main-content col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<?php comments_template(); ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>