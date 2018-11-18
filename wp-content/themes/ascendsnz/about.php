<?php
/**
 * Template Name: about
 *
 */
?>
<?php get_header(); ?>
	<header class="header-area">
        <div class="head-top-area">
            <?php get_template_part( 'nav-header', get_post_format() );?>
        </div>
       <?php get_template_part( 'nav-menu', get_post_format() );?>
    </header>
    <!-- /.End Of Header -->
	
	
    <!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Company Profile</h2>
                        <span class="sub-title">learn more about us</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->
	
	 <!-- Galley Post Area
        =========================== -->
    <div class="about-gallery-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-gallery">
                        <div class="">
							<?php query_posts('category_name=company-profile-images');?>
							<?php while(have_posts()) : the_post(); ?>
                            <!-- Single Gallery -->
                            <div class="sin-gallery">
								<?php
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
									$url = $thumb['0'];
								  ?>
                                <img src="<?=$url?>" alt="">
                            </div>
                            <!-- /.End Of Single Gallery -->
							<?php endwhile; wp_reset_query(); ?>	
                         

                        </div>
                    </div>
                </div>
				
                <div class="col-md-7">
					<?php query_posts('p=6'); ?>
					<?php while(have_posts()) : the_post(); ?>
					<div class="about-content">
                        <p style="color:black;"><?php the_content(); ?></p>
                    </div>
					<?php endwhile; wp_reset_query();?>
				</div>
				
            </div>
        </div>
    </div>
    <!-- /.End Of Galley Post Area -->
	
	  <!-- What WeDo Area
        =========================== -->
    <div class="whatDo-area section-padding">
        <div class="container">
            <div class="row">

                <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>What we do?</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                    </div>
                </div>
                <!-- /.End Of Single Work -->

                <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>Our mission</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                    </div>
                </div>
                <!-- /.End Of Single Work -->

                <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>Our goal</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                    </div>
                </div>
                <!-- /.End Of Single Work -->

            </div>
        </div>
    </div>
    <!-- /.What WeDo Area -->
	
	 <!-- Our Team Area
        =========================== -->
    <section class="our-team-area section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="section-title mb-90 white text-center">
                    <h2>Our memebers</h2>
                </div>
            </div>
            <div class="row">
				<?php query_posts('category_name=our-members');?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <!-- Single Member -->
                    <div class="single-member-progile mb-65 fix">
                        <div class="member-photo">
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                        </div>
                        <div class="member-bio">
                            <h2><?php the_title();?></h2>
							<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
                            <span class="member-pos"><?php echo $position; ?></span>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <!-- /.End Of Single Member -->
                </div>
				<?php endwhile; wp_reset_query(); ?>
              
				<?php ?>
               
            </div>
        </div>
    </section>
    <!-- /.End Of Our Team Area -->
	
	 <!-- CTA Area
        =========================== -->
    <section class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="cta-text">
                        <h2>Why study in New Zealand?</h2>
                        <span>We are always ready to welcome you</span>
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="cta-right">
                        <a href="<?php bloginfo('url')?>/basic-requirements/" class="button button-hover button-cta">Basic Requirements</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of CTA Area -->
	
	 <!-- Testimonial Area
        =========================== -->
    <section class="tesimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-65">
                        <h2>what our clients say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-wrap testimonial-active">

                    <!-- Single Testimonial -->
					 <?php query_posts('category_name=testimonials');?>
					 <?php while(have_posts()) : the_post(); ?>
                    <div class="sin-tesimonial">
                        <span class="quote" style="color:black;"><?php the_content(); ?></span>

                        <div class="cliet-bio">
                            <h2><?php the_title(); ?></h2>
							<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
                            <span class="client-pos" style="color:black;"><?php echo $position; ?></span>
                        </div>
                    </div>
                    <!-- /.End OfSingle Testimonial -->
					<?php endwhile; wp_reset_query(); ?>	
                  
              
                  
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Testimonial Area -->

<?php get_footer(); ?>