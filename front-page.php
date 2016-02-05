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
						<p>Health Can Be Fun focus on delivering quality health programmes to <a href="<?php bloginfo( 'url' ); ?>/corporate/">corporate companies</a>, <a href="<?php bloginfo( 'url' ); ?>/family">families</a> and individuals. Our team of nutritionists advocates skills and knowledge towards a healthier lifestyle for all ages.</p>
						<p>We aim to provide Fun to everyone of all ages, Inspire people to work towards a healthier lifestyle and give Clarity to health myths and jargons. We strongly believe with the right skills set and knowledge everyone can make positive changes to their lives.</p>
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


	<div id="home-recipe" class="row jumbotron">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Recipes</h2>

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
                	<h2 class="section-title">Our Blog</h2>
		 			<h3>We constantly develop unique, fun and inspiring programmes to suit each and every health needs and learning styles. These are some of the programmes that we offer. </h3>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container project-container text-center">
            <div class="recent-project-carousel owl-carousel owl-theme popup-gallery">
			

			<?php query_posts('howposts=-1&posts_per_page=10'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
			<?php //the_post(); ?>

                <div class="item recent-project">
                    <?php the_post_thumbnail('large-thumb',array( 'class' => 'media-object img-responsive' )); ?>	
                    <div class="project-info">
                        <h3><?php the_title(); ?></h3>
                        <ul class="project-meta">
                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a></li>
                        </ul>
                    </div><!-- /.project-info -->
                    <div class="full-project">
                        <a class="blog-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-chevron-right"></i></a>
                    </div><!-- /.full-project -->
                </div><!-- /.item -->
			<?php endwhile; ?>
			<?php endif;  wp_reset_query(); ?>



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