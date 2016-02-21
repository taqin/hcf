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
		<div class="clearfix text-center">
		 	<h2 class="section-title">Fun . Inspire . Clarity</h2>
		 	<div class="col-sm-6 col-sm-offset-3">
			 	<div class="home-intro-info">
			 		<p class="lead-title">Health Can Be Fun aims to be the leading nutrition consultancy in Singapore, to help clients discover the joys of living a fit and healthy life. We believe everyone deserves good nutrition and fitness in their lives.</p>
			 	</div>
				<div class="col-xs-12">
					<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Find out more about us!</a>
				</div>
			</div>
		</div><!-- /container -->
	</div>



	<div id="" class="row no-gutter">
		<div class="col-md-3">			
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Balance</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Boost</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Cool</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>	
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Graceful</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
	</div>

	<div id="" class="row no-gutter">
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Happy</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Harmony</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Healthy</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>
		<div class="col-md-3">
			<div class="hovereffect">
		        <img src="http://placehold.it/600x450" class="img-responsive">
		        <div class="overlay">
		           <h2>Revamp</h2>
		           <a class="info" href="#">Learn More</a>
		        </div>
		    </div>
		</div>			
	</div>


	<div id="home-recipe" class="row jumbotron">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Recipes</h2>
		 	<p class="lead-title">Our adapted healthy way of eating</p>

		 	<div id="home-select-info" class="col-sm-10 col-sm-offset-1">

			</div>
			<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Find out more</a>
		</div>
	</div><!-- /page-content -->


	<!-- Blog Section -->
    <section id="blog-snippets" class="portfolio content-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                	<h3 class="section-title">Nutritional bite sized information</h3>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container project-container text-center">
            <div class="recent-project-carousel owl-carousel owl-theme popup-gallery">
			

                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Lifestyle</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Fitness</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Men</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->
                
                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Women</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Parents</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->

                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Corporate</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->
                
                <div class="item recent-project">
                    <img src="http://placehold.it/400x250" class="img-responsive">
                    <div class="project-info">
                        <h3>Foodies</h3>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="#" title="">Read More<i class="fa fa-chevron-right"></i></a>
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
     

<?php get_footer(); ?>