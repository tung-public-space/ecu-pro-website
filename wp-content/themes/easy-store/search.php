<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mystery Themes
 * @subpackage Easy Store
 * @since 1.0.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */					
					/* tung-lv 18/12/2019 */
					/*printf( esc_html__( 'Search results for: %s', 'easy-store' ), '<span>' . get_search_query() . '</span>' );*/
					printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'easy-store' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
	/**
     * easy_store_sidebar hook
     *
     * @hooked - easy_store_add_sidebar - 5
     *
     * @since 1.0.0
     */
	do_action( 'easy_store_sidebar' );
	
	get_footer();
