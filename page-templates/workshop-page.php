<?php
/**
 * Template Name: Workshop Page Template
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

    
get_header(); ?>
	<div id="workshop-main" class="jumbotron">
      <div class="row">
        <div class="container">
			<div class="col-sm-8 col-sm-offset-2">
          		<h2 class="section-title">Specially crafted <br>just for you</h2>
          		<h3>Our team of nutritionists, creative, educators, and mothers are involved in the development and design of each and every workshop from Health Can Be Fun. Combining nutritional theories and fun elements, not only raises the capacity for our children to grasp challenging nutritional concepts, it also encourages positive eating habits.</h3> 
		  		<h4>We cater to different learning styles of our children using these following methods as shown below.</h4>
        		<div class="item col-sm-3 col-xs-6">
        			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop1.png" class="img-circle" alt="">
        		</div>
        		<div class="item col-sm-3 col-xs-6">
        			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop2.png" class="img-circle" alt="">
        		</div>
        		<div class="item col-sm-3 col-xs-6">
        			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop3.png" class="img-circle" alt="">
        		</div>
        		<div class="item col-sm-3 col-xs-6">
        			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop4.png" class="img-circle" alt="">
        		</div>
        		<div class="col-xs-12" style="margin-top:40px;">
					<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Enquire Us Now</a>
        		</div>
        	</div>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->


	<article id="workshop-content" <?php post_class(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			

			<div class="entry-content col-sm-10 col-sm-offset-1">
				<h2 class="banner-title"><? the_title(); ?></h2>
				<div class="row">
					<div class="col-sm-7">
						<h4>Healthy Bones Series</h4>
						<p>Children often avoid fruits and vegetable due to its flavor and texture. However, they contain vitamins and minerals that are essential for proper growth. </p>
						<p>Don’t Worry, we are here to help you! Through our activities, kids will be motivated to enjoy the goodness of fruits and vegetables.  Not only that! They will enhance their social skills interacting with other children. </p>
					</div>
					
					<div class="col-sm-5 text-center">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop-image1.png" class="img-responsive" alt="">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-5 text-center">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop-image2.png" class="img-responsive" alt="">
					</div>

					<div class="col-sm-7">
						<h4>Healthy Eating Series</h4>
						<p>Unhealthy eating habits are formed during early childhood and will follow them throughout their lifetime. Therefore, cultivating healthy eating habits from young is important! Unhealthy food choices can lead to future health implication such as Diabetes so TAKE ACTION now!</p>
						<p>We bring familiar app games alive! We use REAL-SIZE arcade game to educate them on the difference between unhealthier and healthy food options, with that kids will prepare healthy treats on their own (maybe for you too)!</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-7">
						<h4>Fruit &amp; Vegetables Series</h4>
						<p>Do you know that adequate nutrition during childhood is crucial for healthy bone development? This can help to prevent bone fractures in later life! Don’t wait! Embark your kids on a HEALTHY BONE journey with us! </p>
						<p>Kids will learn to identify BONE-FRIENDLY foods and the importance to consume them for healthy strong bones! We have both indoor and outdoor fun engaging activities to choose from. </p>
						<p>DISCLAIMER: Your child’s inner creativity will be unleashed. </p>
					</div>
					
					<div class="col-sm-5 text-center">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop-image3.png" class="img-responsive" alt="">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-5 text-center">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/workshop-image4.png" class="img-responsive" alt="">
					</div>

					<div class="col-sm-7">
						<h4>Whole grain &amp; Fiber Series</h4>
						<p>Dietary fibers are abundance in fruits, vegetables and whole grain is beneficial to remove harmful substances in our body. Besides, whole grain also contains loads vitamins Bs and Minerals such as Zinc, magnesium that promote good gut and dental health. BUT! Do your kids consume them?</p>
						<p>After the mind-stimulating workshop, your kids may remind you to have more whole grains! </p>
					</div>
				</div>


			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>

	<div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">Join In The Fun!</h2>
				<h3>Contact us to start planning. We’re as excited as you are!</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started!</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->

<?php get_footer(); ?>