<?php
/**
 * Template Name: projects
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
    <section class="page-title fix project-page-title">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Why Study in New Zealand</h2>
                        <span class="sub-title">check our latest study in new zealand</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> Why Study in New Zealand</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->
	
 <!-- Page Internal Content -->
    <section class="page-internal-content">
        <div class="container">
            <div class="row">

                <!-- Content Section -->
                <div class="col-md-9 main-content">


                    <!-- Single News Post -->
                    <div class="sin-news-content">
						<?php query_posts('p=43'); ?>
						<?php while(have_posts()) : the_post(); ?>
                        <div class="news-content">
                            <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
                               
                            </div>

                           <p><?php the_content(); ?></p>
                        </div>
						 <div class="sin-news-thumb">
							  <?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                        </div>
						<?php endwhile; wp_reset_query();?>
                    </div>
                    <!-- /.End Of Single News Post -->
					
					<!-- Single News Post -->
                    <div class="sin-news-content">
						<?php query_posts('p=49'); ?>
						<?php while(have_posts()) : the_post(); ?>
                        <div class="news-content">
                            <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
							</div>
							<p><?php the_content(); ?></p>
                        </div>
						<div class="sin-news-thumb">
							  <?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                        </div>
						<?php endwhile; wp_reset_query();?>
                    </div>
                    <!-- /.End Of Single News Post -->
					
					<!-- Single News Post -->
                    <div class="sin-news-content">
						<?php query_posts('p=63'); ?>
						<?php while(have_posts()) : the_post(); ?>
                        <div class="news-content">
                            <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
							</div>
							<p><?php the_content(); ?></p>
                        </div>
						<div class="sin-news-thumb">
							  <?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                        </div>
						<?php endwhile; wp_reset_query();?>
                    </div>
                    <!-- /.End Of Single News Post -->
					
					<!-- Single News Post -->
                    <div class="sin-news-content">
						<?php query_posts('p=66'); ?>
						<?php while(have_posts()) : the_post(); ?>
                        <div class="news-content">
                            <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
							</div>
							<p><?php the_content(); ?></p>
                        </div>
						<div class="sin-news-thumb">
							  <?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							  ?>
                            <img src="<?=$url?>" alt="">
                        </div>
						<?php endwhile; wp_reset_query();?>
                    </div>
                    <!-- /.End Of Single News Post -->
     

                </div>
                <!-- /.End Of Content Section -->

              

            </div>
        </div>
    </section>
    <!-- /.End Of Page Internal Content -->



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