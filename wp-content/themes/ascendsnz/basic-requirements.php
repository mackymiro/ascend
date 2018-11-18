<?php
/**
 * Template Name: basic-requirements
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
	<?php while(have_posts()) : the_post(); ?>
   
	
	 <!-- Page Internal Content -->
    <section class="page-internal-content">
        <div class="container">
            <div class="row">

                <!-- Content Section -->
                <div class="col-md-9 main-content">


                    <!-- Single News Post -->
                    <div class="sin-news-content">
						 <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
                               
                            </div>
                        <div class="news-content">

                           <p style="color:black;"><?php the_content(); ?></p>
                        </div>
						
						
                    </div>
                    <!-- /.End Of Single News Post -->
				

                </div>
                <!-- /.End Of Content Section -->

              

            </div>
        </div>
    </section>
	<?php endwhile; wp_reset_query();?>
    <!-- /.End Of Page Internal Content -->

<?php get_footer(); ?>
