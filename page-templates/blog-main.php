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
				<h2 class="section-title">Your friendly health consultants</h2>
				<h3>Contact us to start planning. We’re as excited as you are!</h3>
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
					<h1><? the_title(); ?></h1>
					<div class="col-sm-8">
						<ul class="media-list">
						<?php query_posts('howposts=-1'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
						<?php //the_post(); ?>
			            <li class="media">
			            	<a class="pull-left" href="<?php the_permalink(); ?>">
						    <?php the_post_thumbnail('thumbnail',array( 'class' => 'media-object' )); ?>	
						    </a>
						    <div class="media-body">
	            				<h4 class="media-heading"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	            				<?php the_excerpt(); ?>
	            				<span><a href="<?php the_permalink(); ?>">Read More</a></span>
	            			</div>
	            		</li>
	            		<?php endwhile; ?>
						<?php endif;  wp_reset_query(); ?>
						</ul>
					</div>
					
					<div class="col-sm-4 text-center hidden-xs">
						<?php the_content(); ?>

						<p class="small text-center">Advertisement</p>
						<a href="<?php bloginfo( 'url' ); ?>/family/kids-party/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/advert-blog.jpg" alt="Check Out Our Party Packages" class="img-responsive"></a>
					</div>
				</div>

			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>



<?php get_footer(); ?>