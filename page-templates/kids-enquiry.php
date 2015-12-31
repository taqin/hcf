<?php
/**
 * Template Name: Kids Enquiry Packages Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="kids-packages-wrap" class="package-enquiry">
  
<?/*
    <div id="kids-packages" class="row">
      <div class="container text-center">

          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-xs-4">
              <a href="#package1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package1.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-4">
              <a href="#package2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package2.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-4">
              <a href="#package3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package3.png" class="img-responsive" alt=""></a>           
            </div>             
          </div>
      </div>
    </div>
*/?>
    <div class="parent-packages-wrap">

        <div class="row packages-wrap">
          <div class="container text-center">

            <div class="box col-sm-10 col-sm-offset-1 clearfix">
              <h2>Partee Enquiry</h2>
              <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
              <?php endwhile; // end of the loop. ?>
            </div>

          </div>
        </div><!-- End Package -->
    
    </div><!-- End Parent Wrap -->


</div>
<?php get_footer(); ?>