<?php
/**
 * Template Name: About Page Packages Template
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
<? /*
	<div id="abt-main" class="jumbotron">
      <div class="row">
        <div class="container">
          <h2 class="section-title">Healthy Fun Makers</h2>
          <h3>Your Friendly Health Consultants</h3>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->
*/
?>
    <div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">We are a team of field experts</h2>
				<h3>Nutritionist, Dietitians,Workplace Health Consultants and Food Scientist</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Speak to us</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">

			<div class="entry-content">

				<div class="col-xs-10 col-xs-offset-1">
					<h1><? the_title(); ?></h1>
					<?php the_content(); ?>
				

					<div class="about-panel row">
					<div class="col-sm-4"	>
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/about-fiona.jpg" class="img-responsive">
					</div>
					
					<div class="col-sm-8 clear">
						<h3>Ms. Fiona Chia</h3>
						<h4>Founder of Health Can Be Fun  </h4>
						<h5>Masters in Human Nutrition Specialising in Public Health Nutrition, University of Glasgow, SNDA Registered Nutritionist, Accredited WHP Consultant</h5>
						<p>Fiona is recognised under Health Promotion Board as an Accredited Workplace Health Consultant. She has been developing nutritional framework and guiding companies to design effective health initiatives. As the founder of Health Can Be Fun, she is well known of her innovative and fun approach towards health. Companies that she has made an impact with are Shell Chemicals Singapore, Gate Gourmet Singapore, Kimberly Clark, Phillips Electronics Singapore, PPL Shipyard and more.</p>
						<p>Her health personality has been seen in public media where she has conducted various cozy and large-scale health events - talks, workshops and cooking demonstration. NUYOU aspiring entrepreneur, MediaCorp Channel 8 variety shows LadiesNite, Mother Care opening event, HPB Facebook on Supermarket Tour and more.</p>
						<p>Fiona holds a diverse role in the field of nutrition and food. Her passion for nutrition brings along her nature to help others achieve their health goals. She enjoys coaching individuals and advocating the public towards a better happier health.</p>
					</div>
					</div>

					<div class="about-panel row">
					<div class="col-sm-4">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/about-winnie.jpg" class="img-responsive">
					</div>

					<div class="col-sm-8">
						<h3>Ms. Winnie Chia</h3>
						<h4>Nutritionist of Health Can Be Fun</h4>
						<h5>BSc (Hons) in Food and Human Nutrition with Upper Second Class Honours, University of Newcastle Upon Tyne, SNDA Registered Nutritionist</h5>
						<p>Winnie is a nutritionist with academic credentials in both nutrition and food science. She holds a B​achelor’s degree with honours in Food and Human nutrition from University of Newcastle Upon Tyne and a Diploma with Merit in Food Science from Nanyang Polytechnic. Excelling in her studies, Winnie was awarded the Wilmar-Kuok Khoon Hong scholarship in 2012 and was also a Dean’s list recipient.</p>
						<p>Prior to joining Health Can be Fun, Winnie has assisted in several nutrition projects while working in Agri-Food Veterinary Authority and Kemin’s Food. Her experiences have given her extensive insight and knowledge about food and nutrition.</p>
						<p>A passionate nutritionist, Winnie enjoys sharing fun and easy health tips with people around her. Come on board with her on this journey and she will show you how healthy living can be made fun.</p>
					</div>
					</div>



				</div>

			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</article>



<?php get_footer(); ?>