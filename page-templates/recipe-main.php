<?php
/**
 * Template Name: Recipe Landing Page Template
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

    <div id="carousel-wrap" class="recipe-main">
      <!-- Carousel ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active caro1">
              <div class="container">
                <div class="carousel-caption right"></div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item caro2">
              <div class="container">
                <div class="carousel-caption top"></div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item caro3">
              <div class="container">
                <div class="carousel-caption left"></div><!-- /carousel-caption -->
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->
    </div><!-- #carousel-wrap -->


    <?php while ( have_posts() ) : the_post(); ?>
    <div id="solution" class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-xs-4 col-sm-6 text-center">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-potion.png" class="img-responsive">
          </div>
          <div class="col-xs-8 col-sm-6">
            <h2 class="section-title"><?php  the_title(); ?></h2>
            <?php the_content(); ?>
            <a href="#recipe-listing" class="btn btn-contact btn-lg">View Recipes</a>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; // end of the loop. ?>
    
    <div id="recipe-listing" class="row grey">
      <div class="col-xs-12 arrow-down">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/arrow-down.png" class="img-responsive">
      </div>
      <div id="recipe-listing" class="container text-center">          
          <div class="col-sm-10 col-sm-offset-1">

          <?php query_posts('post_type=recipe&posts_per_page=8'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

              <div class="col-xs-3">
                <a class="blog-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large-thumb',array( 'class' => 'media-object img-responsive' )); ?></a>
                <h4><a class="blog-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
                <hr>
              </div>  

          <?php endwhile; ?>
          <?php endif;  wp_reset_query(); ?>
 

          </div>
      </div>
    </div>

<?php get_footer(); ?>