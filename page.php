<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
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
					<h1>CARIBBEAN DOCTOR MON</h1>
				</div>
			</div>
		</div>
		<div class="single-wrapper row">
			<div class="main-content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
				<div class="post-container">
					<h3><?php the_title(); ?></h3>
					<?php the_date('F d, Y', '<h6>', '</h6>'); ?>
					<article>
						<?php the_content(); ?>

						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
						<?php
		                endif;
		                wp_reset_query();
		              	?>
					</article>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
