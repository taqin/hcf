<?php
/**
 * Template Name: Work Health Promotion Template
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
			<div class="col-sm-10 col-sm-offset-1">
          		<h2 class="section-title">Workplace Health Promotion Grant</h2>
          		<h3>The Workplace Health Promotion (WHP) Grant* is a funding scheme offered by the Health Promotion Board (HPB). The Grant provides financial support to help organisations start and sustain their workplace health programmes.</h3> 
		  		<h4>There are two types of grant as follows:</h4>
        		<div class="col-sm-offset-2 col-sm-4 col-xs-6 rounded">
        			<div class="rounded-info invert small">
        				<h3>WHP Grants</h3>
        			</div>
        		</div>
        		<div class="col-sm-4 col-xs-6 rounded">
        			<div class="rounded-info invert small">
	        			<h3>WHP Grants <small>(SMEs)</small></h3>
	        		</div>
        		</div>
        		<div class="col-xs-12">	
        			<p class="small">*The grant project covers 3 components: General Health, Targeted Interventions and Mental Health. The total grant quantum is $15,000 and grant quantum for each component is $5,000. There are two options for co-funding and eligible organisations can choose either option.</p>
        		</div>
        	</div>
        </div><!-- /container -->
      </div><!-- /row -->
    </div><!-- /jumbotron -->


	<div id="home-intro" class="row">
		<div class="clearfix text-center">
		 	<h2 class="section-title">Are you eligible?</h2>
		 	<div id="whp-rounded" class="col-sm-10 col-sm-offset-1">
		 		<h3>Do you fulfill all the following criteria?</h3>
				<div class="col-xs-4 text-center">
				 	<div class="rounded-info">
				 		<h4>Registered in Singapore</h4>
				 	</div><!-- /thumbnail -->
				</div>
				<div class="col-xs-4 text-center">
					<div class="rounded-info">
				 		<h4>Minimum 5 paid employees</h4>
				 	</div><!-- /thumbnail -->
				</div>        
				<div class="col-xs-4 text-center">
					<div class="rounded-info">
				 		<h4>30% local shareholder</h4>
				 	</div><!-- /thumbnail -->
				</div>
				<div class="col-xs-12">
					<p>If you are not eligible, please <a href="<?php bloginfo( 'url' ); ?>/enquiry">contact us</a>. We will be happy to assist you. </p>
				</div>
			</div>
		</div><!-- /container -->
	</div>    

	<div id="whp-info" class="row">
		<div class="clearfix text-center">
			<h2 class="section-title">Yes, I am eligible</h2>
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/whp-infographic.png" class="img-responsive" alt="Workplace Health Promotion Grant Eligibility">
		</div>
	</div>



	<div class="jumbotron">
		<div class="row">
			<div class="container">
				<h2 class="section-title">Speak to us!</h2>
				<h3>Speak to our WHP certified consultants to start planning today!</h3>
				<a href="<?php bloginfo( 'url' ); ?>/enquiry" class="btn btn-contact btn-lg">Get Started!</a>
				
			</div><!-- /container -->
		</div><!-- /row -->
	</div><!-- /jumbotron -->

<?php get_footer(); ?>