<?php get_header(); ?>
	<div id="preloader"></div>
	<header class="header-area">
        <div class="head-top-area">
             <?php get_template_part( 'nav-header', get_post_format() );?>
		</div>
		</div>
        <?php get_template_part( 'nav-menu', get_post_format() );?>
    </header>
    <!-- /.End Of Header -->
	
	 <section class="slider-area">

        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="wp-content/themes/ascendsnz/img/slides/img-01.jpg" alt="">
                    <div class="slider-text overlay">
                        <div class="tb">
                            <div class="tbc">
                                <div class="container text-left rs-padding ">
                                    <div class="col-md-12">
                                        <h1>Thinking to <span style="color:green; font-style:italic;">ASCEND</span> Towards Your Future!</h1>
                                        <p>Confused with complex templates? We are here to help you. Now create
                                            <br>your amazing website for your lovely company.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->

            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="wp-content/themes/ascendsnz/img/slides/img-02.jpg" alt="">
                    <div class="slider-text overlay">
                        <div class="tb">
                            <div class="tbc">
                                <div class="container text-left rs-padding ">
                                    <div class="col-md-12">
                                        <!--<h1><span style="color:red;">STOP</span></h1>-->
                                        <h1>Inquire About the <span style="color:green; font-style:italic;">“WORK-AND-STUDY” Programme </span> in New Zealand</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->

        </div>

    </section>
	
	 <!-- About Us Area
        =========================== -->	
	<section class="about-area section-padding">
        <div class="container">
            <div class="col-md-4">
				<?php query_posts('p=30'); ?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="about-left">
                    <h2><?php the_title(); ?></h2>
                    <figure class="about-thumb">
						<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							$url = $thumb['0'];
						  ?>
                        <img src="<?=$url?>" alt="" class="img-responsive">
                        <figcaption>
                            <?php the_content(); ?>
                        </figcaption>
                    </figure>
                </div>
				<?php endwhile; wp_reset_query();?>
            </div>
            <div class="col-md-7 col-md-offset-1">
				<?php query_posts('p=28'); ?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="about-quote">
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>
                </div>
				<?php endwhile; wp_reset_query();?>
            </div>
        </div>
    </section>
    <!-- /.End Of About Us Area -->
	
	
	<!-- Facts Area
        =========================== -->
    <section class="facts-area section-padding overlay fix" style="background-image:url(img/facts-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="facts-headding">
                        <h2><strong>Simplicity</strong> is the best design</h2>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="fact-quote">
                        <blockquote>
                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="facts-wrap fix">

                        <!-- Single Fact -->
                        <div class="sin-fact">
                            <span class="counter">125</span>
                            <h2 class="count-badge">satisfied clients</h2>
                        </div>
                        <!-- /. End Of Single Fact -->

                        <!-- Single Fact -->
                        <div class="sin-fact">
                            <span class="counter">368</span>
                            <h2 class="count-badge">completed projects</h2>
                        </div>
                        <!-- /. End Of Single Fact -->

                        <!-- Single Fact -->
                        <div class="sin-fact">
                            <span class="counter">14</span>
                            <h2 class="count-badge">expert workers</h2>
                        </div>
                        <!-- /. End Of Single Fact -->

                        <!-- Single Fact -->
                        <div class="sin-fact">
                            <span class="counter">100</span><span>%</span>
                            <h2 class="count-badge">satisfiction rate</h2>
                        </div>
                        <!-- /. End Of Single Fact -->

                        <!-- Single Fact -->
                        <div class="sin-fact">
                            <span class="counter">2500</span><span>+</span>
                            <h2 class="count-badge">hours of work</h2>
                        </div>
                        <!-- /. End Of Single Fact -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Facts Area -->
	
	 <!-- What We Area
        =========================== -->
    <section class="works-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>What we do</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Work -->
				<?php query_posts('category_name=what-we-do');?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="single-work">
                        <a class="work-thumb mb-35" href="single-services.html">
                            <img src="wp-content/themes/ascendsnz/img/works/img-01.jpg" alt="">
                            <div class="work-hover"></div>
                        </a>
                        <div class="work-excerp">
                            <a href="single-services.html"><h2><?php the_title(); ?></h2></a>
                            <p><?php the_content(); ?></p>
							
                        </div>
                    </div>
                </div>
				<?php endwhile; wp_reset_query(); ?>	
                <!-- /. End Of Single Work -->

               

              
            
               
            </div>
        </div>
    </section>
    <!-- /.End Of What We Do Area -->
	
	 <!-- Info Area
        =========================== -->
    <section class="info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-thumbs fix">
                        <div class="large-thumb thumbs">
                            <img src="wp-content/themes/ascendsnz/img/info/img-01.jpg" alt="">
                        </div>
                        <div class="small-thumbs thumbs">
                            <img src="wp-content/themes/ascendsnz/img/info/img-02.jpg" alt="">
                            <img src="wp-content/themes/ascendsnz/img/info/img-03.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-text height-right">
                        <h2>Great products for your company</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Info Area -->
	
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
            <div class="row mb-70">
                <div class="testimonial-wrap testimonial-active">

                    <!-- Single Testimonial -->
					 <?php query_posts('category_name=testimonials');?>
					 <?php while(have_posts()) : the_post(); ?>
                    <div class="sin-tesimonial">
                        <span class="quote"><?php the_content(); ?></span>

                        <div class="cliet-bio">
                            <h2><?php the_title(); ?></h2>
							<?php $position =  get_post_meta(get_the_ID(), 'my_meta_box_text', true);?>
                            <span class="client-pos"><?php echo $position; ?></span>
                        </div>
                    </div>
                    <!-- /.End OfSingle Testimonial -->
					<?php endwhile; wp_reset_query(); ?>	
                  
  
                   
                </div>
            </div>
            <div class="row">
                <div class="clients-wrap clients-active">

                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-1.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->


                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-2.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->


                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-3.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->


                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-4.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->


                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-5.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->


                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-6.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->

                    <!-- Single Client -->
                    <div class="sin-client">
                        <a href="#"><img class="img-responsive" src="wp-content/themes/ascendsnz/img/clients/client-7.jpg" alt=""></a>
                    </div>
                    <!-- /. End Of Single Client -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Testimonial Area -->
	
	<!-- LatestNews Area
        =========================== -->
    <section class="latestNews-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center mb-70">
                    <h2>Latest news</h2>
                </div>
            </div>
            <div class="row">

                <!-- Single News -->
                <div class="col-sm-4">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="single-news.html">
                            <img src="wp-content/themes/ascendsnz/img/news/img-01.jpg" alt="">
                            <div class="news-hover"></div>
                        </a>
                        <div class="news-excerpt">
                            <a href="single-news.html"><h2>Make your website more fast</h2></a>
                            <span class="news-date">23rd March, 2016</span>
                        </div>
                    </div>
                </div>
                <!-- /.End Of Single News -->

                <!-- Single News -->
                <div class="col-sm-4">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="single-news.html">
                            <img src="wp-content/themes/ascendsnz/img/news/img-02.jpg" alt="">
                            <div class="news-hover"></div>
                        </a>
                        <div class="news-excerpt">
                            <a href="single-news.html"><h2>Make your website more fast</h2></a>
                            <span class="news-date">23rd March, 2016</span>
                        </div>
                    </div>
                </div>
                <!-- /.End Of Single News -->

                <!-- Single News -->
                <div class="col-sm-4">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="single-news.html">
                            <img src="wp-content/themes/ascendsnz/img/news/img-03.jpg" alt="">
                            <div class="news-hover"></div>
                        </a>
                        <div class="news-excerpt">
                            <a href="single-news.html"><h2>Make your website more fast</h2></a>
                            <span class="news-date">23rd March, 2016</span>
                        </div>
                    </div>
                </div>
                <!-- /.End Of Single News -->

            </div>
        </div>
    </section>
    <!-- /.End Of LatestNews Area -->
	

<?php get_footer(); ?>