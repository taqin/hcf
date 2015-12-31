<?php
/**
 * Template Name: Kids Page Template
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

    <div id="carousel-wrap" class="kids-main">
      <!-- Carousel ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <div class="animated bounceInDown container kids-bg1">
                <div class="carousel-caption">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-caro1.png" class="img-responsive" alt="">
                    <div class="headlight homemsg">
                    </div><!-- /headlight -->
                </div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item">
              <div class="animated bounceInDown container kids-bg2">
                <div class="carousel-caption">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-caro2.png" class="img-responsive" alt="">
                    <div class="headlight homemsg">
                    </div><!-- /headlight -->
                </div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item">
              <div class="animated bounceInDown container kids-bg3">
                <div class="carousel-caption">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-caro3.png" class="img-responsive" alt="">
                    <div class="headlight homemsg">
                    </div><!-- /headlight -->
                </div><!-- /carousel-caption -->
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->
    </div><!-- #carousel-wrap -->


    <div id="inside-page-content" class="row clearfix">
      <div class="container kids-content">
      <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

            <div class="container">
              <?php //the_content(); ?>
              <h2 class="col-sm-8 col-sm-offset-2 section-title">Why do kids need to eat healthy?</h2>
              <h3 class="col-sm-8 col-sm-offset-2">Healthy food choices are essential for children to grow, develop and feel good in order to excel in academically. Kids are vulnerable to food marketing, hence more kids are consuming added sugar, fast foods and sweetened beverages. Only as parents you have the power to lead your child to be healthier, to prevent illnesses in later life. </h3>
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids1.png" class="img-responsive" alt="">
            </div><!-- .entry-content -->
          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>
      </div>
    </div><!-- ./row -->

    <div id="kids-jumbo1" class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Birthdays can be more than <br>just cakes and presents</h2>
          <h3>Let your child learn about health while having the time of their life</h3>
          <a href="<?php bloginfo( 'url' ); ?>/enquiry/package-enquiry" class="btn btn-contact btn-lg">Start planning today!</a>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

    <div id="kids-packages" class="row">
      <div class="container text-center">
          <h2 class="banner-title">Party Packages</h2>
          <h3 class="col-sm-6 col-sm-offset-3">Birthdays will no longer be just cakes and presents. Using creative approach to convey healthy eating messages, kids can now learn and have fun at the same time!</h3>
          
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-4">
              <a href="<?php bloginfo( 'url' ); ?>/family/kids-party/#package1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package1.png" class="img-responsive" alt=""></a>
              <p>Our standard package for your kids to have fun and learn at the same time</p>
            </div>
            <div class="col-sm-4">
              <a href="<?php bloginfo( 'url' ); ?>/family/kids-party/#package2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package2.png" class="img-responsive" alt=""></a>
              <p>Superhero, Monster, Princess or Prince. Themed Party just for your kids!</p>
            </div>
            <div class="col-sm-4">
              <a href="<?php bloginfo( 'url' ); ?>/family/kids-party/#package3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package3.png" class="img-responsive" alt=""></a>           
              <p>Fully customizable party and all you need is to give us a call to plan it!</p>
            </div>
            <div class="col-xs-12 callto">
              <a href="kids-party" class="btn btn-contact btn-lg">Find Out More</a>
            </div>              
          </div>
      </div>
    </div>

    <div id="kids-divider" class="jumbotron"></div>

    <div id="kids-workshops" class="row">
      <div class="container text-center">
          <h2 class="banner-title">Workshops</h2>
          <h3 class="col-sm-8 col-sm-offset-2">Specially crafted workshops for kids to learn all about being healthy! Workshops that are catered to benefit you and your kids.</h3>
          
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-4">
              <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-workshop1.png" class="img-responsive" alt=""></a>
              <h4>More than just ABC</h4>
              <p>Children not only need to be smart academically, they need to learn how to take care of their bodies through healthy eating. </p>
            </div>
            <div class="col-sm-4">
              <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-workshop2.png" class="img-responsive" alt=""></a>
              <h4>Healthy is the new happy</h4>
              <p>A child, who eats an abundance and variety of wholesome foods, gets sufficient nutrients for healthy growth and development.  Naturally, feeling good and lively makes a child happy!</p>
            </div>
            <div class="col-sm-4">
              <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-workshop3.png" class="img-responsive" alt=""></a>           
              <h4>Love is in the house</h4>
              <p>Our environment plays a big part of how we develop to be adults. Charity starts from home, only when love is in the house, children will be nurtured with healthy habits. Let your child shape your family.</p>              
            </div>
            <div class="col-xs-12 callto">
              <a href="workshops" class="btn btn-contact btn-lg">Find Out More</a>
            </div>              
          </div>
      </div>
    </div>


    <div class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Join In The Fun!</h2>
          <h3>Contact us to start planning. We’re as excited as you are!</h3>
          <a href="<?php bloginfo( 'url' ); ?>/enquiry/package-enquiry" class="btn btn-contact btn-lg">Contact Us</a>
          
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

<?php get_footer(); ?>