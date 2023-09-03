<?php get_header(); ?>

<div class="content-section">
	<section class="main-content container">

		<?php if ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header>
					<h1 class="page-title"> <?php the_title(); ?> </h1>
				</header>

				<?php the_content(); ?>

				<?php get_template_part( 'flexible-content/index.php' ); ?>

			</article> <!-- .type-post -->

		<?php else : ?>

			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn&#8217;t here.</p>

		<?php endif; ?>

	</section> <!-- .main-content -->
</div> <!-- .content-section -->

<?php get_footer(); ?>