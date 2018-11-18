<?php
/**
 * Template Name: contact
 *
 */
?>

<?php get_header(); ?>
	<header class="header-area">
        <div class="head-top-area">
            <?php get_template_part( 'nav-header', get_post_format() );?>
        </div>
        <!-- End Of Top Head -->
         <?php get_template_part( 'nav-menu', get_post_format() );?>
		
        <!-- End Of Bottom Head -->
    </header>
    <!-- /.End Of Header -->
	
	 <!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Contact us</h2>
                        <span class="sub-title">Get in touch with us anytime</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->
	
	  <div class="upper-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </div>
    </div>
	
	 <!-- Contact Area
      =========================== -->
    <section class="contact-area fix">
        <div class="container">
            <div class="row">
				<?php while(have_posts()) : the_post(); ?>
                <div class="col-md-6">
                    <?php the_content();?>
                </div>
				<?php endwhile; wp_reset_query(); ?>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="single-info phone-number">
                            <h4>Call us</h4>
                            <p class="info">USA: <span>+ 021-5432-145</span></p>
                            <p class="info">Non- USA: <span>+ 021-5432-145</span></p>
                        </div>

                        <div class="single-info useremail-add">
                            <h4>EMAIL</h4>
                            <p class="info">Product support: <span>product@company.com</span></p>
                            <p class="info">Customer support: <span>support@company.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Contact Area -->
	
	 <!-- GOOGLE MAP -->
    <div id="googleMap2"></div>

<?php get_footer(); ?>
