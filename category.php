<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<div class="container">
		<?php if ( have_posts() ) : ?>
			<h3 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<strong>' . single_cat_title( '', false ) . '</strong>' ); ?></h3>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?><!-- .archive-header --><?php endif;  wp_reset_query(); ?>

			<div id="grid" data-columns>
				<?php query_posts('howposts=-1'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
				<?php //the_post(); ?>
	            <div class="panel panel-default text-center blog-listing">
	            	<div class="panel-body">
	            	<a href="<?php the_permalink(); ?>">
				    <?php the_post_thumbnail('post-thumbnails',array( 'class' => 'img-responsive' )); ?>	
				    </a>
    				<h4 class="media-heading"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

    				<?php the_excerpt(); ?>

        		  	</div>

        		  	<div class="panel-footer"><span><a href="<?php the_permalink(); ?>">Read More</a></span></div>
        		 </div>

        		<?php endwhile; ?>
        		<?php else : ?>
        		<h3>No Articles in this Category</h3>
				<?php endif;  wp_reset_query(); ?>
			</div>
		</div>


		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>