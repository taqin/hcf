<?php
/**
 * Template Name: About Page Packages Template
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
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<div class="entry-content">

				<div class="col-xs-10 col-xs-offset-1">
					<h1><? the_title(); ?></h1>
					<?php the_content(); ?>
				

					<div class="col-sm-8">
						
					</div>
					
					<div class="col-sm-4 text-center"></div>

				</div>

			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>



<?php get_footer(); ?>