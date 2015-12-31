<?php
/**
 * Template Name: Kids Party Packages Template
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

<script type="text/javascript">

    jQuery(document).ready(function(){

        // animationHover("#btn-package1", "bounce");
        // animationHover("#btn-package2", "bounce");
        // animationHover("#btn-package3", "bounce");

    });

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function(){

      var docheight = jQuery( document ).height();
      var bottomlimit = docheight - 850;

      if (jQuery(this).scrollTop() > 200 && jQuery(this).scrollTop() < bottomlimit) {
        jQuery('.scrollToTop').fadeIn();
      } else {
        jQuery('.scrollToTop').fadeOut();
      }
    });
    
    //Click event to scroll to top
    jQuery('.scrollToTop').click(function(){
      jQuery('html, body').animate({scrollTop : 0},4000);
      return false;
    });


    function animationHover(element, animation){
    element = jQuery(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass(animation);
            }, 5000);         
        });
}
</script>

<div id="kids-packages-wrap">
  
    <div id="inside-page-content" class="row clearfix">
      <div class="container kids-content">
      <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

            <div class="container">
              <?php //the_content(); ?>
              <h2 class="section-title">More than just fun and games</h2>
              <h3 class="col-sm-8 col-sm-offset-2">Our parties not only provide safe fun and games, we incorporate healthy eating messages using creative approaches to engage your child and their friends! Not only will you observe them to break away from their fears of certain foods, they will begin a new fruitful journey towards a healthier them. </h3>
              <div class="col-sm-8 col-sm-offset-2">
              <a href="<?php bloginfo( 'url' ); ?>/enquiry/package-enquiry" class="btn btn-contact btn-lg">Enquire Us Now</a></div>
            </div><!-- .entry-content -->
          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>
      </div>
    </div><!-- ./row -->


    <div id="kids-packages" class="row">
      <div class="container text-center">

          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-4">
              <a id="btn-package1" href="#package1"  ><img  src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package1.png" class="img-responsive" alt="Package 1"></a>
            </div>
            <div class="col-sm-4">
              <a id="btn-package2" href="#package2"  ><img  src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package2.png" class="img-responsive" alt="Package 2"></a>
            </div>
            <div class="col-sm-4">
              <a id="btn-package3" href="#package3"  ><img  src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-package3.png" class="img-responsive" alt="Package 3"></a>           
            </div>             
          </div>
      </div>
    </div>




    <div class="parent-packages-wrap">

        <div class="row packages-wrap">
          <div class="container text-center">

            <div id="package1" class="box col-sm-10 col-sm-offset-1 clearfix">
              <h2>The Rollin' Partee</h2>

                <div class="col-sm-10 col-sm-offset-1">
                    <div class="info col-sm-5 ">
                        <p>For 20 Children (Additional child at $20)</p>
                    </div>
                    <div class="info col-sm-5 col-sm-offset-2">
                        <p>1.5 hours <br>Party Duration</p>
                    </div>
                </div>
                <div class="details col-xs-12">
                    <h4>Party package includes:</h4>  
                    <div class="col-sm-8">
                        <ul>
                          <li>Two activities; Breadified, Fruity Ninja (60mins)</li>
                          <li>Hosting of cake cutting ceremony (10mins)</li>
                          <li>Fun-xercise (30mins)</li>
                          <li>Fruit cake</li>
                          <li>Party packs</li>
                          <li>Party invitation cards</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-theme-img1.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>

          </div>
        </div><!-- End Package -->

        <div class="row packages-wrap">
          <div class="container text-center">

            <div id="package2" class="box col-sm-10 col-sm-offset-1 clearfix">
              <h2>The Themed <br> Birthday Partee</h2>
                
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="info col-sm-5 ">
                        <p>For 20 Children (Additional child at $20)</p>
                    </div>
                    <div class="info col-sm-5 col-sm-offset-2">
                        <p>2.5 hours<br>Party Duration</p>
                    </div>
                </div>

              <div class="details col-xs-12">
                <h4>Themes available:</h4>
                <div class="col-xs-12">
                    <div class="info icon col-sm-4 ">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-theme1.png" alt="">
                        <p>Prince/Princess</p>
                    </div>
                    <div class="info icon col-sm-3 col-sm-offset-1" >
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-theme2.png" alt="">
                        <p>Monsters</p>
                    </div>
                    <div class="info icon col-sm-3 col-sm-offset-1">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-theme3.png" alt="">
                        <p>Superheroes</p>
                    </div>
                </div>
                <h4>Party package includes:</h4>
                <div class="col-sm-8">
                    <ul>
                      <li>Storytelling (45mins)</li>
                      <li>Draw &amp; Tell (45mins)</li>
                      <li>One Game Session (45mins)</li>
                      <li>Hosting of cake cutting ceremony (10mins)</li>
                      <li>Fruit cake</li>
                      <li>Party packs</li>
                      <li>Table Setting + Decorations</li>
                      <li>4 kinds of healthy snacks</li>
                      <li>Party invitation cards</li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kids-theme-img2.png" alt="" class="img-responsive">
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Package -->

        <div class="row packages-wrap last">
          <div class="container text-center">

            <div id="package3" class="box col-sm-10 col-sm-offset-1 clearfix">
              <h2>The Magnificent <br> Birthday Partee</h2>
              <div class="details col-sm-12">
                  <h4>Fully Customizable!</h4>
                  <div class="col-sm-12">
                    <ul>
                      <li>All items in the themed birthday partee, including choice of a popular character theme.</li>
                      <li>All decorations and party-ware will be based on the theme.</li>
                      <li>The birthday child will also receive a special bouquet based on the chosen theme.</li>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="col-xs-12">
              <a href="https://www.dropbox.com/s/jikou26mqjg22fy/Rollin%27%20Kids%20Partee%20Kit.pdf?dl=0" text="Download our Partee Packages here"  alt="Download our Partee Packages here"><img id="btn-download" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/btn-download.png" class="animated pulse" alt="Download our Party Packages"></a>
            </div>

          </div>
        </div><!-- End Package -->
    
    </div><!-- End Parent Wrap -->


    <div class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Join In The Fun!</h2>
          <h3>Contact us to start planning. We’re as excited as you are!</h3>
          <a href="<?php bloginfo( 'url' ); ?>/enquiry/package-enquiry" class="btn btn-contact btn-lg">Contact Us</a>
          
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

    <a id="btn-scroller" href="#kids-packages-wrap" class="scrollToTop animated swing hidden-xs" title="Scroll To Top"></a>



</div>
<?php get_footer(); ?>