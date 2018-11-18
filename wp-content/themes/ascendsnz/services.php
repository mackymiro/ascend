<?php
/**
 * Template Name: services
 *
 */
?>
<?php get_header(); ?>
<header class="header-area">
        <div class="head-top-area">
             <?php get_template_part( 'nav-header', get_post_format() );?>
            </div>
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
                        <h2 class="page-title">Area Of Study</h2>
                        <span class="sub-title">know more about our services</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Area Of Study</a></li>
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
			<?php query_posts('p=39');?>
			<?php while(have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
			 <?php endwhile; wp_reset_query(); ?>	
        </div>
    </div>
	
	 <!-- What We Area
        =========================== -->
    <section class="works-area pb-130">
        <div class="container">
            <div class="row">

                <!-- Single Work -->
				<?php query_posts('category_name=our-services');?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="single-work">
                        <a class="work-thumb mb-35" href="single-services.html">
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                            <div class="work-hover"></div>
                        </a>
                        <div class="work-excerp">
                            <a href="single-services-1.html"><h2><?php the_title(); ?></h2></a>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <!-- /. End Of Single Work -->
				<?php endwhile; wp_reset_query(); ?>	
              
            </div>
        </div>
    </section>
    <!-- /.End Of What We Do Area -->
	
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

<?php get_footer(); ?>