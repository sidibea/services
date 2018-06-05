<?php
/**
 * Template Name: Content + Sidebar
 */

get_header(); the_post(); ?>

<section id="post-<?php echo esc_attr( get_the_ID() ) ?>" <?php post_class('i-section'); ?>>
	<div class="container">
		<div class="row section-body reveal">
			<div class="col-md-7 page-content">
				<div class="element">
					<div class="pf-head">
						<div class="title-style-1">
							<h1><?php the_title() ?></h1>
						</div>
					</div>

					<div class="pf-body c27-content-wrapper">
						<?php the_content() ?>

						<?php wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'my-listing' ),
							'after' => '</div>',
							)); ?>
					</div>
				</div>
			</div>
			<div class="col-md-5 page-sidebar sidebar-widgets">
				<?php dynamic_sidebar('sidebar') ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();