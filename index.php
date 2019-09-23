<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="images/logo.jpg"/>

	<!-- Document Title
	============================================= -->
    <title>Bouncy</title>
    <style>
            .w_btn{
                background-color: white;
                border-color: #1ABC9C;
                border-radius: 16px;
                width:150px;
                color: #1ABC9C;
                /* position: fixed;
                z-index :1; */
            }
            .w_btn:hover{
                background-color: #1ABC9C;
                color:white;
                border-radius: 16px;
               
            }
            .view_btn{
                height: 30px;
                width:120px;
                font-size: 12px;
                background-color: white;
                border-color: #E81F6F;
                border-radius: 16px;
                color: #E81F6F;
            }
            .view_btn:hover{
               
                background-color: #E8329E;
                color:white;
            }
            @media screen and (max-width:320){
                #text{
                    padding-top: 0px;
                    color: #E81F6F;
                }
            }
        </style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header"class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo" class="divcenter">
					<a href="index.php" class="standard-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Logo"></a>
					<a href="index.php" class="retina-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 center">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="current"><a href="index.php"><div>Home</div></a></li>
                            <li><a href="#"><div>Gallery</div></a>
                                <ul>
                                        <li><a href="product_picture.php"><div>Products Pictures</div></a></li>
                                        <li><a href="videos.php"><div>Products Videos</div></a></li> 
                                </ul>
							</li>
                            <li><a href="files/Bouncy Fun Events 1.6v.pdf" target= "_blank"><div>Download PDF</div></a></li>
                            <li ><a  class="page-scroll" href="contact.php"><div>Contact Us</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					
					<div class="swiper-slide dark">
						
						<div class="video-wrap">
							<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
								<source src='images/videos/explore.mp4' type='video/mp4' />
								<!-- <source src='images/videos/explore.webm' type='video/webm' /> -->
							</video>
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
						</div>
					</div>
					
				</div>
				
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
                    <div class="divider"><i class="icon-circle"></i></div>
                        <div class="row">
                            <div class="col-md-6">
							<div class="entry">
                                    <div  class="entry-image"> 
                                        <div  class="fslider" data-arrows="false" data-lightbox="gallery">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="images/g1.jpg" data-lightbox="gallery-item">
                                                            <img class="image_fade" src="images/g1.jpg" alt="Standard Post with Gallery"></a>
                                                        </div>
                                                    <div class="slide">
                                                        <a href="images/g2.jpg" data-lightbox="gallery-item">
                                                            <img class="image_fade" src="images/g2.jpg" alt="Standard Post with Gallery"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="images/g3.jpg" data-lightbox="gallery-item">
                                                            <img class="image_fade" src="images/g3.jpg" alt="Standard Post with Gallery"></a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="text"class="col-md-6">
                                    <div class="entry-c">
                                            <div class="entry-title">
                                                <h2 style="color: #1ABC9C;">Pictures</h2>
                                            </div>
                                            
                                            <div class="entry-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci.</p>
                                                <br/>
                                                <a href="product_picture.php" class="btn view_btn">Gallery</a>
                                                <br/>
                                            </div>
                                    </div>   
                            </div>
                        </div>
                        <div class="divider"><i class="icon-circle"></i></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="entry">
                                        <div class="entry-image">
                                            <iframe  src="https://www.youtube.com/embed/b_Ogi4KEV-s"  width="500" height="281" frameborder="0" webkitallowfullscreen
                                             mozallowfullscreen allowfullscreen></iframe>
                                        </div> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2 style="color: #1ABC9C;">Videos</h2>
                                    </div>
                                    
                                    <div class="entry-content">
                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis placeat quo unde reprehenderit eum facilis vitae.</p>
                                       <br/>
                                        <a href="videos.php" class="btn view_btn">Gallery</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
			</div>

		</section><!-- #content end -->
            		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">


            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2019 All Rights Reserved by XpertSpot<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a  target="_blank"  href="https://www.facebook.com/bouncyfunevents" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a target="_blank" href="https://www.instagram.com/bouncyfunevents/" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>

                            <a target="_blank" href="https://www.youtube.com/channel/UC7zjWm3ZlXSKsWEFnc8YzsA" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> info@bouncy.ae <span class="middot">&middot;</span> <i class="icon-headphones"></i> +971 54 444 9359
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->
	
    
        </div><!-- #wrapper end -->
    
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
    
        <!-- External JavaScripts
        ============================================= -->
        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
    
        <!-- Footer Scripts
        ============================================= -->
        <script src="js/functions.js"></script>

</body>
</html>
<script>
    $(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 600, 'easeInOutExpo');
        event.preventDefault();
    });
});

    // /* Back To Top Button */
    // // create the back to top button
    // $('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
    // var amountScrolled = 700;
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > amountScrolled) {
    //         $('a.back-to-top').fadeIn('500');
    //     } else {
    //         $('a.back-to-top').fadeOut('500');
    //     }
    // });
</script>

