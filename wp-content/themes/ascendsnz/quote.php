<?php
/**
 * Template Name: quote
 *
 */
?>

<?php get_header(); ?>
	 <header class="header-area">
        <div class="head-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- /.End Of Logo -->
                    </div>
                    <div class="col-sm-9 hidden-xs">
                        <div class="head-top-right fix">

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-social-google-map"></i>
                                </div>
                                <div class="info-content">
                                    <span>24, Lane Street<br>
                           New York, USA</span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-clock-time"></i>
                                </div>
                                <div class="info-content">
                                    <span>9am - 7pm <br> Mon - Sat</span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info border-none fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-contacts"></i>
                                </div>
                                <div class="info-content">
                                    <a href="mailto:info@company.com">info@company.com</a>
                                    <a href="tel:+0213421543">+021-3421-543</a>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info border-none fix">
                                <div class="search-form fix">
                                    <form action="search.php">
                                        <input type="text" name="s" placeholder="Type to search" id="search">
                                        <div class="input-submit">
                                            <input type="submit" value="Go">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Top Head -->
        <div class="head-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="mainmenu-area">
                        <nav class="navigation-menus">
                            <ul class="mobile-menu nav navbar-nav">
                                <li class="active"><a href="">Home</a></li>
                                <li><a href="<?php bloginfo('url')?>/about/">About</a></li>

								<li class=""><a href="<?php bloginfo('url')?>/services/">Services <i class="hover-ind fa" aria-hidden="true"></i></a>
                                   
                                </li>

                                <li><a href="<?php bloginfo('url')?>/projects/">Projects <i class="hover-ind " aria-hidden="true"></i></a>
                                   
                                </li>
                             
                              
                                <li><a href="contact.html">Pages  <i class="hover-ind fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php bloginfo('url')?>/testimonial/">Testimonials</a></li>
                                        <li><a href="<?php bloginfo('url')?>/quote/">Get A Quote</a></li>
                        
                                    </ul>
                                </li>
                                <li><a href="<?php bloginfo('url')?>/contact/">Contact</a></li>
                            </ul>
                        </nav>
                        <a href="quote.html" class="button button-hover quote-btn">get a free quote</a>
                    </div>
                </div>
            </div>
        </div>
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
                        <h2 class="page-title">Get A Quote</h2>
                        <span class="sub-title">Get a free quote about your project</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Quote</a></li>
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
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="contact.php">
                        <div class="contact-form">
                            <div class="single-form">
                                <div class="sin-input">
                                    <input type="text" name="username" placeholder="Your name *">
                                </div>
                                <div class="sin-input">
                                    <input type="email" name="useremail" placeholder="Email address *">
                                </div>
                            </div>
                            <div class="single-form">
                                <div class="sin-input">
                                    <input type="text" name="usernumber" placeholder="Phone Number *">
                                </div>
                                <div class="sin-input select-box">
                                    <select name="usercountry">
                                        <option value="">Country</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="2">Usa</option>
                                        <option value="3">England</option>
                                        <option value="3">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-form">
                                <div class="sin-input select-box select-topic">
                                    <select name="topic">
                                        <option value="">Select your project topic</option>
                                        <option value="1">Ami Janina</option>
                                        <option value="2">Se Janena</option>
                                        <option value="3">Tara Janena</option>
                                        <option value="3">Kew Janena</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-form text-area">
                                <textarea name="message" rows="4" placeholder="Type your message"></textarea>
                                <input type="submit" value="Send us message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="quote-thumb">
                        <img src="../wp-content/themes/ascendsnz/img/quote-thumb.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End Of Contact Area -->

<?php get_footer(); ?>