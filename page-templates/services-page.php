<?php
/**
 * Template Name: Services Page Template
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

    <div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">We are a team of field experts</h2>
				<h3>Nutritionist, Dietitians,Workplace Health Consultants and Food Scientist</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Speak to us</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding-bottom:0;">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">

			<div class="entry-content">

				<div class="container">
					<div class="col-xs-10 col-xs-offset-1">
						<h1><? the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>			

					<div class="services-panel row">
						<div class="col-sm-6 col-md-4 col-md-offset-2 info">
							<h3>HEALTHY COOKING</h3>
							<hr>
							<p>Learn to cook healthier with our engaging Nutritionist. You will gain life long skills to master your own health! We offer hands-on classes and cooking demonstrations to showcase a series of healthier home-made recipes.</p>
						</div>

						<div class="col-sm-6 col-md-6 clear img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service1-healthycooking.jpg" class="img-responsive">
						</div>
					</div>


					<div class="services-panel row alt">
						<div class="col-sm-6 col-md-6 img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service2-workplacewellness.jpg" class="img-responsive">
						</div>

						<div class="col-sm-6 col-md-4 clear">
							<h3>WORKPLACE WELLNESS</h3>
							<hr>
							<p>We offer effective consultation and health programme implementation based on evidence-based practices. Our consultants focus on increasing your company’s employee engagement by boosting health outcomes. Every dollar spent on workplace initaitives can save cost and raise productivity.</p>
						</div>
					</div>
				

					<div class="services-panel row">
						<div class="col-sm-6 col-md-4 col-md-offset-2 info">
							<h3>NUTRITION EDUCATION</h3>
							<hr>
							<p>Engage our qualifed and inspirational Nutritionist for public speaking and mass discussion. We offer interesting health and nutrition topics. You will re-discover nutrition!</p>
						</div>

						<div class="col-sm-6 col-md-6 clear img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service3-nutritioneducation.jpg" class="img-responsive">
						</div>
					</div>


					<div class="services-panel row alt">
						<div class="col-sm-6 col-md-6 img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service4-personalisedconsultation.jpg" class="img-responsive">
						</div>

						<div class="col-sm-6 col-md-4 clear">
							<h3>PERSONALISED DIETARY CONSULTATION</h3>
							<hr>
							<p>If you have a specifc health goal to achieve, we can help you! We specialise in weight management programmes in groups or private one to one at your convenience. We also customise programmes to suit your dietary preferences and lifestyle. We want health to work for you!</p>
						</div>
					</div>
				

					<div class="services-panel row">
						<div class="col-sm-6 col-md-4 col-md-offset-2 info">
							<h3>RECIPES</h3>
							<hr>
							<p>We develop recipes for every taste, diet and age groups. We curate, test and perfect recipes from all over because we believe homemade meals are adordable and easy!</p>
						</div>

						<div class="col-sm-6 col-md-6 clear img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service5-recipes.jpg" class="img-responsive">
						</div>
					</div>


					<div class="services-panel row alt">
						<div class="col-sm-6 col-md-6 img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service6-supermarket.jpg" class="img-responsive">
						</div>

						<div class="col-sm-6 col-md-4 clear">
							<h3>SUPERMARKET TOURS</h3>
							<hr>
							<p>Learn how to de-code food labels during the guided tour around the supermarket. Fun, practical and interactive way to discover the right choices to make when it comes to food shopping.</p>
						</div>
					</div>


					<div class="services-panel row">
						<div class="col-sm-6 col-md-4 col-md-offset-2 info">
							<h3>FOOD INDUSTRY CONSULTATION</h3>
							<hr>
							<p>We aim to create an enabling environment to improve public nutrition through specifc menu development, research and developemnt, recipe building, health information, nutrition articles and effective health messages. If you are a cafe owner, food technology app, caterer or others, we want to work with you!</p>
						</div>

						<div class="col-sm-6 col-md-6 clear img-thumb">
							<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/service7-foodindustry.jpg" class="img-responsive">
						</div>
					</div>


			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>



<?php get_footer(); ?>