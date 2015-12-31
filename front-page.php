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
		<div class="intro container">
			<h1 class="xanimated xfadeIn">We are your<br>healthy Consultant</h1>
			<h2>Helping you stay fun and <br>healthy makes us happy</h2>
			<a href="<?php bloginfo( 'url' ); ?>/about" class="btn btn-contact btn-lg">learn more</a>
			<div class="caro-img">
			<object type="image/svg+xml" height="400" data="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-caro.svg">Your browser does not support SVG</object>
			</div>
		</div>
	</div>



	
	<div id="home-intro" class="row">
		<div class="clearfix text-center">
		 	<h2 class="section-title">About Us</h2>
		 	<div class="col-sm-8 col-sm-offset-2">
				<div class="col-sm-6">
				 	<div class="home-intro-info">
				 		<p>We are a nutrition company that focus on delivering quality health programmes to corporate companies, families and individuals. Our team of nutritionists advocate skills and knowledge towards a healthier lifestyle for all ages. </p>
						<p>We design unique programmes and tools that integrate fun theories and scientific evidences to understand how to improve health and well being. We just want you to have fun! </p>
				 	</div><!-- /thumbnail -->
				</div>
				<div class="col-sm-6">
					<div class="home-intro-info">
						<p>We are a nutrition company that focus on delivering quality health programmes to corporate companies, families and individuals. Our team of nutritionists advocate skills and knowledge towards a healthier lifestyle for all ages. </p>
						<p>Being passionate about health and food, we wish to inspire you how easy it is to lead a healthier lifestyle .</p>
				 	</div><!-- /thumbnail -->
				</div>    
				<div class="col-xs-12">
					<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Find out more about us!</a>
				</div>
			</div>
		</div><!-- /container -->
	</div>



	<div id="" class="row no-gutter">
		<div class="col-md-4">
			<img src="http://placehold.it/600x450" class="img-responsive">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/600x450" class="img-responsive">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/600x450" class="img-responsive">
		</div>	
	</div>

	<div id="" class="row no-gutter">
		<div class="col-md-3">
			<img src="http://placehold.it/500x450" class="img-responsive">
		</div>
		<div class="col-md-3">
			<img src="http://placehold.it/500x450" class="img-responsive">
		</div>
		<div class="col-md-3">
			<img src="http://placehold.it/500x450" class="img-responsive">
		</div>
		<div class="col-md-3">
			<img src="http://placehold.it/500x450" class="img-responsive">
		</div>		
	</div>





	<div id="home-services" class="row">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Our fun programmes</h2>
			<div class="col-sm-8 col-sm-offset-2">
		 		<h3>We constantly develop unique, fun and inspiring programmes to suit each and every health needs and learning styles. These are some of the programmes that we offer. </h3>
			</div>
		 	<div id="service-icons" class="col-sm-10 col-sm-offset-1">
			 	<div class="row">
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service1.png" class="img-circle img-responsive" alt=""><p>Cooking Demonstrations</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service2.png" class="img-circle img-responsive" alt=""><p>Health Campaigns</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service3.png" class="img-circle img-responsive" alt=""><p>Interventions</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service4.png" class="img-circle img-responsive" alt=""><p>Nutrition Consultancy</p></div>			 		
			 	</div>

			 	<div class="row">
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service5.png" class="img-circle img-responsive" alt=""><p>Supermarket Tours</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service6.png" class="img-circle img-responsive" alt=""><p>Talks</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service7.png" class="img-circle img-responsive" alt=""><p>Team-building Events</p></div>
				 	<div class="service_item col-xs-6 col-sm-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home-service8.png" class="img-circle img-responsive" alt=""><p>Workshops</p></div>			 		
			 	</div>

			</div>
			<div class="col-xs-12">
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Find out more about the programmes!</a>
			</div>
		</div>
	</div><!-- /page-content -->

	<div id="home-select" class="row jumbotron">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Help us help you</h2>

		 	<div id="home-select-info" class="col-sm-10 col-sm-offset-1">

					<div class="flip-container col-lg-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home1.jpg" class="img-circle img-responsive" alt="">
							</div>
							<div class="back">
								<a href="<?php bloginfo( 'url' ); ?>/corporate">
								<h3 class="back-title">Corporate</h3>
								<p>You are in the Workforce. We can promote workplace health with fun and engaging programmes to show you how easy it is to lead a healthier lifestyle. </p>
								<i class="fa fa-chevron-circle-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="flip-container col-lg-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home2.jpg" class="img-circle img-responsive" alt="">
							</div>
							<div class="back">
								<a href="<?php bloginfo( 'url' ); ?>/family">
								<h3 class="back-title">Family</h3>
								<p>You have a family. We want to give the best to your family, especially the young ones. We have specially catered programmes for children to have a great time while learning the importance of their health. </p>
								<i class="fa fa-chevron-circle-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="flip-container col-lg-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/home3.jpg" class="img-circle img-responsive" alt="">
							</div>
							<div class="back">
								<a href="<?php bloginfo( 'url' ); ?>/individual">
								<h3 class="back-title">Individual</h3>
								<p>You are an individual who wants to find out more about nutrition and health. Speak to us, we cater to different needs. </p>
								<i class="fa fa-chevron-circle-right"></i>
								</a>
							</div>
						</div>
					</div>

			</div>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started Today!</a>
		</div>
	</div><!-- /page-content -->

	<div id="home-testimony" class="row">
		<div class="clearfix text-center">
		 	<h2 class="section-title">What the people say</h2>

		 	<div id="testi" class="col-sm-10 col-sm-offset-1">
			 	<div class="service_item col-sm-3">
			 		<blockquote>
			 			<p>Health Can Be Fun makes us cautious to eat balance diet/food for a healthier body</p>
  						<footer>A.M <cite title="Source Title">Retail Industry</cite></footer>
			 		</blockquote>
			 	</div>
			 	<div class="service_item col-sm-3">
			 		<blockquote>
			 			<p>My kids love it because the activities are fun and I love it because they are eating their greens unknowingly!</p>
  						<footer>Maya <cite title="Source Title">Stay Home Mom</cite></footer>
			 		</blockquote>
			 	</div>
			 	<div class="service_item col-sm-3">
			 		<blockquote>
			 			<p>The presenter is very knowledgeable. She delivers her presentation well and engages her audiences well.</p>
  						<footer>Steve <cite title="Source Title">Financial Company</cite></footer>
			 		</blockquote>
			 	</div>
			 	<div class="service_item col-sm-3">
			 		<blockquote>
			 			<p>For the first time I can see my son eat his vegetables without complaining just because he wants to win in the race.</p>
  						<footer>Mr Chris <cite title="Source Title">Oil and Gas Industry</cite></footer>
			 		</blockquote>
			 	</div>
			</div>
		</div>

		<div id="blog-snippets" class="row no-gutter">

			<?php query_posts('howposts=-1&posts_per_page=4'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
			<?php //the_post(); ?>
			<div class="media col-md-3">
				<div class="media-body">
					<h5 class=""><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
			    <?php //the_excerpt(); ?>
			  	<p><a href="<?php the_permalink(); ?>">Read More</a></p>
			  </div>

			  <a class="blog-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			  	<?php the_post_thumbnail('medium-thumb',array( 'class' => 'media-object img-responsive' )); ?>	
				</a>

			  
			</div><!-- /media -->
			<?php endwhile; ?>
			<?php endif;  wp_reset_query(); ?>
		</div>


	</div><!-- /page-content -->

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