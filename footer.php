<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	
	<div class="footer clearfix">
		<div id="inner-footer" class="clearfix" >
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>About HCF</h4>
					<p class="small">Health Can Be Fun focus on delivering quality health programmes to <a href="<?php bloginfo( 'url' ); ?>/corporate/">corporate companies</a>, <a href="<?php bloginfo( 'url' ); ?>/family">families</a> and individuals. Our team of nutritionists advocates skills and knowledge towards a healthier lifestyle for all ages.</p>
					<p class="small">We aim to provide Fun to everyone of all ages, Inspire people to work towards a healthier lifestyle and give Clarity to health myths and jargons. We strongly believe with the right skills set and knowledge everyone can make positive changes to their lives.</p>
					<p><a href="<?php bloginfo( 'url' ); ?>/about">Read More</a></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<h4>Get in Touch!</h4>
					<div class="footer-enquiry">
					<?php echo do_shortcode( '[contact-form-7 id="22" title="Footer Enquiry"]' ) ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<h4>Drop Us a Visit</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.707276454304!2d103.835047!3d1.352187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da173af504b455%3A0x8959f09065e05a8f!2sSingapore+574348!5e0!3m2!1sen!2s!4v1407915754945" width="260" height="120" frameborder="0" style="border:0"></iframe>
					<p>213 Upper Thomson Road #04-01 <br>Singapore 574348</p>
					<p class="small">Main: +65 6554 1106 / +65 6554 1175 </p>
					<p class="small">Email: <a href="mailto:startnow@healthcanbefun.com.sg">startnow@healthcanbefun.com.sg</a></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<h4>Our Healthy Blog</h4>
					<?php query_posts('howposts=-1&posts_per_page=4'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
					<?php //the_post(); ?>
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
					<?php endwhile; ?>
					<?php endif;  wp_reset_query(); ?>
				</div>
			</div>

		</div><!-- /container -->
		<div id="end-footer" class="container">
			<div class="addthis_sharing_toolbox"></div>
			<p class="clearfix">Copyright &copy; 2014 HealthCanBeFun.com.sg | All Rights Reserved</p>
		</div><!-- /col-lg-3 -->			
    </div><!-- /footer -->


</div> <!-- / MAIN container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"></script>
	<script src="http://js.addthisevent.com/atemay.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/animate.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e393354641618ff"></script>
    <script type="text/javascript">
  	WebFontConfig = {
  	  google: { families: [ 'Open+Sans:400,600,300:latin','Gloria+Hallelujah::latin','Alegreya+Sans:400,700,800:latin','Luckiest+Guy::latin','Lato:100,300,400,700:latin' ] }
  	};
  	(function() {
  	  var wf = document.createElement('script');
  	  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  	    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  	  wf.type = 'text/javascript';
  	  wf.async = 'true';
  	  var s = document.getElementsByTagName('script')[0];
  	  s.parentNode.insertBefore(wf, s);
  	})(); 
  	jQuery('.dropdown-toggle').dropdown();
  	jQuery('.carousel').carousel();
  	

  	jQuery(function() {
	  jQuery('a[href*=#]:not([href=#]):not([href=#myCarousel])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = jQuery(this.hash);
	      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        jQuery('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
			

  	</script>
  	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-3527664-39', 'auto');
	  ga('require', 'displayfeatures');
	  ga('require', 'linkid', 'linkid.js');
	  ga('send', 'pageview');

	</script>
<?php wp_footer(); ?>
</body>
</html>