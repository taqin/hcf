<?php
/**
 * Template Name: Corporate Solutions Template
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

  
    <div id="inside-page-content" class="row clearfix">
      <div class="container kids-content">
      <?php while ( have_posts() ) : the_post(); ?>


            <div class="container">
              <?php //the_content(); ?>
              <h2 class="col-sm-8 col-sm-offset-2 section-title">Healthy Solutions</h2>
              <h3 class="col-sm-8 col-sm-offset-2">Your company may be experiencing an aging workforce, stressful environment or poor performance due to illness. Once our health consultants have identified your company’s concerns and demographics, we will be able to advise and recommend 1 of our 9 solutions to suit your requirements.</h3>

              <h3 class="col-sm-8 col-sm-offset-2">Each of the 9 solutions are uniquely designed to encourage and inspire employees which combines various activities such as Health Screening, engaging Nutrition &amp; Mental Talks and Workshops, Food &amp; Cooking Demonstrations, Physical Activities and more!</h3>
    
              <div id="solution-grid" class="col-sm-10 col-sm-offset-1">
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions1.jpg" class="img-responsive" alt="">
                  <h4>Balance</h4>
                  <p class="text-center">Family and work – it is usually hard to balance our lifestyle. This solution enriches us with fun and healthy knowledge that we can translate to our daily routines.</p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions2.jpg" class="img-responsive" alt="">
                  <h4>Boost</h4>
                  <p class="text-center">Are the employees not performing at their potential peak? This solution provides our participants with skills and knowledge to maximize their strengths and peak their performance at work. </p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions3.jpg" class="img-responsive" alt="">
                  <h4>Cool</h4>
                  <p class="text-center">Feeling the stress and intensity at work? Keeping us cool as a cucumber, this solution aids us with methods to calm our moods and relieves stress.</p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions4.jpg" class="img-responsive" alt="">
                  <h4>Graceful</h4>
                  <p class="text-center">With the aging population and increase in retirement age, this solution equips your aging employees with useful knowledge to care for their health and body.</p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions5.jpg" class="img-responsive" alt="">
                  <h4>Happy</h4>
                  <p class="text-center">Unhappiness both at work and home may lead to high medical leaves. This solution provides an opportunity for employees to learn skills and knowledge on instilling happiness to their daily lifestyles. </p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions6.jpg" class="img-responsive" alt="">
                  <h4>Harmony</h4>
                  <p class="text-center">Are your employees experiencing conflicts or absences of communication at work? This solution includes various programmes and activities that help improve and build interpersonal relationship at work.</p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions7.jpg" class="img-responsive" alt="">
                  <h4>Healthy</h4>
                  <p class="text-center">How often do your employees go on medical leave? This solution helps employees to understand more about nutrition, healthy lifestyle and how it leads to preventing chronic diseases.</p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions8.jpg" class="img-responsive" alt="">
                  <h4>Make-Your-Own</h4>
                  <p class="text-center">Don’t think there is any solution suitable just yet? How about customizing your own programmes with our health consultants today! </p>

                </div>
                <div class="col-xs-6 col-sm-4 item">
                  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/solutions9.jpg" class="img-responsive" alt="">
                  <h4>Revamp</h4>
                  <p class="text-center">Is the working environment healthy and safe for your employees? This solution helps to improve your office environment and influence employees to maintain a healthy and lively workplace.</p>

                </div>
              </div><!-- end of solutions -->
            </div><!-- .entry-content -->

      <?php endwhile; // end of the loop. ?>
      </div>
    </div><!-- ./row -->



    <div class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Start Planning!</h2>
          <h3 class="col-sm-10 col-sm-offset-1">We have every solution to cater to different concerns at various workplace site. <br>Speak to our friendly consultants to find the best fit solution! </h3>
          <a href="<?php bloginfo( 'url' ); ?>/enquiry/" class="btn btn-contact btn-lg">Contact Us</a>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

<?php get_footer(); ?>