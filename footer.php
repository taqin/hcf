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

<?php if ( is_front_page() && is_home() ) { ?>

<?php } else if ( is_singular( 'recipe' ) ){ ?>

<?php } ?>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 segment">
                    <a href="#" title="">
                        <h2>
                        	<img class="img-responsive" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                        </h2>
                    </a>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row text-center">
                <div class="col-md-12 social segment">
                    <h4>Stay Connected</h4>
                    <p class="white">Contact us to start planning. We’re as excited as you are!</p>

                    <div class="addthis_sharing_toolbox"></div>
                    
                    <p><address>170 Upper Bukit Timah Road #18-01 Singapore 588179 </address><strong>Main:</strong> +65 6463 3707 / +65 6463 3708 <strong>Email:</strong> <a href="mailto:startnow@healthcanbefun.com.sg" >startnow@healthcanbefun.com.sg</a></p>
                    
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.container -->

        <div class="copynote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright &copy; 2016 HealthCanBeFun.com.sg | All Rights Reserved
                    </div><!-- /.col-md-12 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.copynote -->

        <div class="nav pull-right scroll-top">
            <a href="#home" title="Scroll to top"><i class="fa fa-angle-up"></i></a>
        </div>

    </footer><!-- /.footer -->



</div> <!-- / MAIN container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/wow.min.js"></script>    
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/owl.carousel.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.parallax-1.1.3.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/salvattore.min.js"></script>
<!--    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.countTo.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.inview.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/pace.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.easing.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/plugins/jquery.validate.min.js"></script> -->
    

    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/main.js"></script>

	<script src="http://js.addthisevent.com/atemay.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCIlfm3fUbRP1CQSC4H2ac1X4_KzIsAOU"></script>
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