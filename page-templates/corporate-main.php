<?php
/**
 * Template Name: Corporate Page Template
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

    <div id="carousel-wrap" class="corporate-main">
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
              <div class="container animated bounceIn">
                <div class="carousel-caption right">Are your employees too stress with work?</div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item caro2">
              <div class="container animated bounceIn">
                <div class="carousel-caption top">Are they constantly having conflicts?</div><!-- /carousel-caption -->
              </div>
            </div>
            <div class="item caro3">
              <div class="container animated bounceIn">
                <div class="carousel-caption left">Are your employees  falling sick often?</div><!-- /carousel-caption -->
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
              <h2 class="col-sm-8 col-sm-offset-2 section-title">Healthy workplace,<br> Healthy you</h2>
              <h3 class="col-sm-8 col-sm-offset-2">Many companies regardless small, medium or large multinational enterprises face challenges in their workplace, especially productivity. It has proven that productivity correlates with the growth of the company.<br><br>Using strategic investments to boost your workplace health to cultivate healthy habits can reduce absenteeism, staff medical cost and lower turn over rates. Impactful workplace health initiatives will increase productivity by 80%.</h3>
              <a href="#whatwecando" class="btn btn-contact btn-lg">What we can do</a>
              <a href="#solution" class="btn btn-contact btn-lg">Our Solutions</a>

            </div><!-- .entry-content -->
          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>
      </div>
    </div><!-- ./row -->

    <div id="whatwecando" class="jumbotron inverse">
      <div class="row">
        <div class="container">
          <h2 class="section-title">What can we do for you</h2>
          <h3 class="col-sm-6 col-sm-offset-3">Our clients deserve the best services. With Health Can Be Fun, we provide a full suite of workplace health consultancy to ensure a good fit of impactful programmes based on your companies demographics.</h3>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

    <div class="row grey">
      <div class="col-xs-12 arrow-down">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/arrow-down.png" class="img-responsive">
      </div>
      <div class="container text-center">          
          <div class="col-sm-8 col-sm-offset-2">
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon1.png" class="img-responsive">
              <h4><span>Consult</span></h4>
              <p>Our friendly accredited workplace health consultants performs a simple assessment of your workplace. </p>
            </div>
            <div class="col-xs-12 plus">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/plus.png" class="img-responsive">
            </div>
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon2.png" class="img-responsive">
              <h4><span>Development</span></h4>
              <p>We tailor and design programmes to meet your company’s needs and objectives. </p>
            </div>
            <div class="col-xs-12 plus">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/plus.png" class="img-responsive">
            </div>
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon3.png" class="img-responsive">
              <h4><span>Awareness</span></h4>
              <p>With the right marketing tools we can reach out to as many employees as possible. </p>
            </div>             
          </div>
      </div>
    </div>


    <div id="solution" class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-xs-4 col-sm-6 text-center">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-potion.png" class="img-responsive">
          </div>
          <div class="col-xs-8 col-sm-6">
            <h2 class="section-title">Solutions <br>Just For You</h2>
            <p>Our solutions contains carefully researched and tested programmes that aims to solve isolated concerns within the company.</p>
            <p><strong>Ingredients list:</strong><br>Fun, Inspiring, Engaging, Nutritious, Eye opener </p>
            <a href="<?php bloginfo( 'url' ); ?>/corporate/corporate-solutions" class="btn btn-contact btn-lg">Want one?</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row grey">
      <div class="col-xs-12 arrow-down">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/arrow-down.png" class="img-responsive">
      </div>
      <div class="container text-center">          
          <div class="col-sm-8 col-sm-offset-2">
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon4.png" class="img-responsive">
              <h4><span>Results</span></h4>
              <p>Our programmes are results driven to show positive outcomes. We want you to have happier and healthier productive employees. </p>
            </div>
            <div class="col-xs-1 plus">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/plus.png" class="img-responsive">
            </div>
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon5.png" class="img-responsive">
              <h4><span>Evaluation</span></h4>
              <p>Sustainability is important. We garner true employees feedback and interest to ensure programmes remains relevant. </p>
            </div>
            <div class="col-xs-1 plus">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/plus.png" class="img-responsive">
            </div>
            <div class="col-xs-3">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/corp-icon6.png" class="img-responsive">
              <h4><span>Awards</span></h4>
              <p>We will support you to gain global and national recognition.</p>
            </div>             
          </div>
      </div>
    </div>



    <div class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Workplace Health Grants</h2>
          <h3 class="col-sm-10 col-sm-offset-1">Health Promotion Board (HPB) offers financial support to help organizations to start and sustain their workplace health programmes. Find out if you are eligible to apply for HPB funding schemes. </h3>
          <a href="<?php bloginfo( 'url' ); ?>/corporate/workplace-health-promotion-grant/" class="btn btn-contact btn-lg">Find Out More</a>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->

<?php get_footer(); ?>