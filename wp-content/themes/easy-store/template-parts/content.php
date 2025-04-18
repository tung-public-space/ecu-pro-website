<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mystery Themes
 * @subpackage Easy Store
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	

	<div class="entry-content-wrapper es-clearfix">
		
        <div class="entry-content-block">
			<?php easy_store_post_thumbnail(); ?>
            <header class="entry-header">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </header><!-- .entry-header -->			
			
            <div class="entry-content">							
            	<?php if ( 'post' === get_post_type() ) { ?>
    	        	<div class="post-meta">
						<?php the_time('d/m/Y'); ?>
    					<?php easy_store_inner_posted_on(); ?>
    				</div>
    			<?php } ?>
    			<?php
    				the_excerpt();
    
    				wp_link_pages( array(
    					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'easy-store' ),
    					'after'  => '</div>',
    				) );
    			?>
            </div><!-- .entry-content -->
		</div> <!-- entry-content-block -->
	</div><!-- .entry-content-wrapper -->

	<footer class="entry-footer">
		<?php easy_store_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
