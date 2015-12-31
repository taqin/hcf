<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="container">

						<div class="entry-content col-sm-12">

							<div class="col-md-8">
								<h1><? the_title(); ?></h1>
								<p class="small"><i class="fa fa-file-text"></i> Posted on <?php the_date(); ?> by <a href="<?php the_author_meta( 'googleplus', $post->post_author ); ?>"><?php the_author(); ?></a></p>
								<?php the_post_thumbnail('post-thumbnail',array( 'class' => 'img-responsive' )); ?>
								
								<hr>
								<div class="addthis_toolbox addthis_default_style addthis_20x20_style" >
									<a class="addthis_button_facebook"></a>
									<a class="addthis_button_google_plusone_share"></a>
									<a class="addthis_button_linkedin"></a>
									<a class="addthis_button_twitter"></a>
									<a class="addthis_button_compact"></a>
									<a class="addthis_counter addthis_bubble_style"></a>
								</div>

								<?php the_content(); ?>
							</div>
							<?php endwhile; // end of the loop. ?>		

							<div id="right-advert" class=" col-md-4 hidden-xs">
								<p class="small text-center">Advertisement</p>
								<a href="<?php bloginfo( 'url' ); ?>/family/kids-party/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/advert-blog.jpg" alt="Check Out Our Party Packages" class="img-responsive"></a>
								<hr>
								<h4>Interesting Articles</h4>
								<?php query_posts( 'posts_per_page=5' ); ?>
								<?php while ( have_posts() ) : the_post(); ?>
								<div class="media">
								  	<a class="pull-left" href="#">
								  	<?php the_post_thumbnail('footer-thumb',array( 'class' => 'media-object' )); ?>	
									</a>
								  <div class="media-body">
								    <h5 class="media-heading"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
								    <?php //the_excerpt(); ?>
								  	<p><a href="<?php the_permalink(); ?>">Read More</a></p>
								  </div>
								</div><!-- /media -->
								<?php endwhile; // end of the loop. ?>		
							</div>

						</div>
					</div>
				</article>

			

		</div><!-- #content -->
	
	</div><!-- #primary -->
	
	<div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">Your friendly health consultants</h2>
				<h3>Contact us to start planning. We’re as excited as you are!</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started!</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->

<?php get_footer(); ?>