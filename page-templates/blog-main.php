<?php
/**
 * Template Name: Blog Listing Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

    
get_header(); ?>
<? /*
	<div id="abt-main" class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Healthy Fun Makers</h2>
          <h3>Your Friendly Health Consultants</h3>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->
*/
?>
    <div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">Nutrition Reads</h2>
				<h3>Bring clarity to all health myths and jargons</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started!</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $query = new WP_Query( 'posts_per_page=10' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<div class="entry-content">


				<div class="col-sm-12">
						<div class="col-md-4"><h1><? the_title(); ?></h1></div>
						<div class="col-md-8" style="text-align:right;">
							<a href="<?php bloginfo('url'); ?>/category/lifestyle" class="btn btn-primary">Lifestyle</a>
							<a href="<?php bloginfo('url'); ?>/category/fitness" class="btn btn-primary">Fitness</a>
							<a href="<?php bloginfo('url'); ?>/category/men" class="btn btn-primary">Men</a>
							<a href="<?php bloginfo('url'); ?>/category/women" class="btn btn-primary">Women</a>
							<a href="<?php bloginfo('url'); ?>/category/children" class="btn btn-primary">Children</a>
							<a href="<?php bloginfo('url'); ?>/category/workplace" class="btn btn-primary">Workplace</a>
						</div><div class="div-clear"></div>	
						
						

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
						<?php endif;  wp_reset_query(); ?>
						</div>


					</div>
				</div>

			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>



<?php get_footer(); ?>