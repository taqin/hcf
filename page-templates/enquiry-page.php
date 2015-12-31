<?php
/**
 * Template Name: Enquiry Page Template
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
	<div id="enquiry-main" class="jumbotron">
      <div class="row">
        <div class="container">
			<div class="col-sm-10 col-sm-offset-1">
          		<h2 class="section-title">Let's get in touch!</h2>
          		<h3>Our team of nutritionists, creative, educators, and mothers are always interested to work with you.</h3> 
		  		<h4>If you need to talk to our business office straight away please call +65 6554 1106.</h4>
        		
        		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

        	</div>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->


<?php get_footer(); ?>