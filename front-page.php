<?php
/**
 * The template for displaying all pages
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

    // if (is_user_logged_in() ) {
    //     wp_redirect ( home_url("/home") );
    //     exit;
    // } 
    
get_header(); ?>

<? /*
	<div id="carousel-wrap">
		<!-- Carousel ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	        <li data-target="#myCarousel" data-slide-to="3"></li>
	      </ol>
	      <div class="carousel-inner">
	        <div class="item active">
	          <div class="container bg1">
	            <div class="carousel-caption">
					<div class="headlight homemsg">
						<h1 class="animated bounceInUp"><span>Cultivating Healthy Habits</span></h1>
						<h2 class="animated bounceInUp"><span>Another fun slogan goes here</span></h2>
					</div><!-- /headlight -->
	            </div><!-- /carousel-caption -->
	          </div>
	        </div>
	        <div class="item">
	          <div class="container bg2">
	            <div class="carousel-caption">
					<div class="headlight homemsg">
						<h1 class="animated bounceInUp"><span>Cultivating Healthy Habits</span></h1>
						<h2 class="animated bounceInUp"><span>Another fun slogan goes here</span></h2>
					</div><!-- /headlight -->
	            </div><!-- /carousel-caption -->
	          </div>
	        </div>
	        <div class="item">
	          <div class="container bg3">
	            <div class="carousel-caption">
					<div class="headlight homemsg">
						<h1 class="animated bounceInUp"><span>Cultivating Healthy Habits</span></h1>
						<h2 class="animated bounceInUp"><span>Another fun slogan goes here</span></h2>
					</div><!-- /headlight -->
	            </div><!-- /carousel-caption -->
	          </div>
	        </div>
	        <div class="item">
	          <div class="container bg4">
	            <div class="carousel-caption">
					<div class="headlight homemsg">
						<h1 class="animated bounceInUp"><span>Cultivating Healthy Habits</span></h1>
						<h2 class="animated bounceInUp"><span>Another fun slogan goes here</span></h2>
					</div><!-- /headlight -->
	            </div><!-- /carousel-caption -->
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div><!-- /.carousel -->
	</div><!-- #carousel-wrap -->
*/?>

	<div id="home-carousel" class="row">
		<div class="intro container text-center">
			<h1 class="xanimated xfadeIn">We are your<br>health consultant</h1>
			<h2>Helping you stay healthy makes us happy</h2>
			<a href="#home-intro" class=""><i class="fa fa-angle-down fa-5x animated infinite bounceIn"></i></a>
		</div>
	</div>



	
	<div id="home-intro" class="row">
		<div class="clearfix text-center container">
		 	<h2 class="section-title">Fun . Inspire . Clarity</h2>
		 	<div class="col-sm-6 col-sm-offset-3">
			 	<div class="home-intro-info">
			 		<p class="lead-title">Health Can Be Fun aims to be Singapore’s leading nutrition consultancy company.We want you to discover the joys of living a fit and healthy life.We believe everyone deserves good nutrition and fitness in their lives.</p>
			 	</div>
				<div class="col-xs-12">
					<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">More about us!</a>
				</div>
			</div>
		</div><!-- /container -->
	</div>



	<div id="home-services" class="row no-gutter">
		<div class="col-md-3">			
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service1-balance.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Corporate Wellness</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service2-boost.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Supermarket Tour</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service3-cool.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Healthy Cooking</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>	
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service4-graceful.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Recipes</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
	</div>

	<div id="" class="row no-gutter">
		<div class="col-md-4">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service5-happy.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Personalised Dietary Consultation</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service8-revamp.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Nutrition Education</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="hovereffect">
		        <img src="<?php bloginfo('stylesheet_directory') ?>/images/service7-healthy.jpg" class="img-responsive">
		        <div class="overlay">
		           <h2>Food Industry Consultation</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>		
	</div>


	<div id="home-recipe" class="row jumbotron">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Recipes</h2>
		 	<p class="lead-title">Healthy and Tasty</p>

		 	<div id="home-select-info" class="col-sm-10 col-sm-offset-1">

			</div>
			<a href="<?php bloginfo( 'url' ); ?>/recipes" class="btn btn-contact btn-lg">Get one now</a>
		</div>
	</div><!-- /page-content -->


	<!-- Blog Section -->
    <section id="blog-snippets" class="portfolio content-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                	<h3 class="section-title">Nutrition</h3>
                	<p class="lead-title">Your daily bite size nutrient reads</p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container project-container text-center">
            <div class="recent-project-carousel owl-carousel owl-theme popup-gallery">
			

                <div class="item recent-project">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/blog1-lifestyle.jpg" class="img-responsive">
                    <div class="project-info">
                        <h3>Lifestyle</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="<?php bloginfo( 'url' ); ?>/blog" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                <div class="item recent-project">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/blog2-fitness.jpg" class="img-responsive">
                    <div class="project-info">
                        <h3>Fitness</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="<?php bloginfo( 'url' ); ?>/blog" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                


            </div><!-- /.recent-project-carousel -->

            <div class="customNavigation project-navigation text-center">
                <a class="btn-prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="btn-next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div><!-- /.project-navigation -->

        </div><!-- /.container -->
    </section><!-- /.portfolio -->

<? /*
	<div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">Join In The Fun!</h2>
				<h3>Contact us to start planning. We’re as excited as you are!</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started!</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->
*/?>
     
	<div class="map-container">
	    <div class="row">
	        <section id="cd-google-map no-bottom-pad">
	            <div id="google-container"></div>
	            <div id="cd-zoom-in"></div>
	            <div id="cd-zoom-out"></div>
	        </section>
	    </div><!-- /.row -->
	</div>

<?php get_footer(); ?>