<?php 
    session_start();
    include 'dbConnection.php'; 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/logo.jpg"/>

	<!-- Document Title
	============================================= -->
    <title>Bouncy</title>
    <style>
            .inquiry_btn{
                background-color: #1ABC9C;
                color:white;
                border-radius: 16px;
                height: 30px;
                width:200px;
                font-size: 12px;
            }
            .inquiry_btn:hover{
                background-color: white;
                border-color: #1ABC9C;
                border-radius: 16px;
                color: #1ABC9C;
    
            }
            .view_btn{
                
                height: 30px;
                width:200px;
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
            .small{
                font-size:13px;
                color: #999;
                font-family: 'Crete Round', serif;
                font-style: italic;
                margin-top:2px;
            }
        </style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo" class="divcenter">
					<a href="index.php" class="standard-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Logo"></a>
                    <a href="index.php" class="retina-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Logo"></a>
                   
				</div><!-- #logo end -->

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 center">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li><a href="index.php"><div>Home</div></a>
								
							</li>
                            <li class="current"><a href="#"><div>Gallery</div></a>
                                <ul>
                                        <li><a href="product_picture.php"><div>Products Pictures</div></a></li>
                                        <li><a href="videos.php"><div>Products Videos</div></a></li>
                                       
                                </ul>
                            </li>
                            <li><a href="files/Bouncy Fun Events 1.6v.pdf" target= "_blank"><div>Download PDF</div></a></li>
							<li><a href="contact.php"><div>Contact Us</div></a>
								
							</li>
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

		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="heading-block center">
						<h2 style="color:#1ABC9C;">Pictures Gallery</h2>
					
					</div>

					
				</div><!-- .postcontent end -->	
				<div class="container clear-bottommargin clearfix">
                        <div class="row">
                        <?php 
                                $result = mysqli_query($conn,"SELECT *  FROM image_table");
                                while ($row = $result->fetch_assoc()) { ?>
                                    <div class="col-lg-3 col-md-6 bottommargin">
                                    <div class="ipost clearfix" style="text-align: center;"> 
                                    <div class="entry-image">
                                        <a href="#"><img class="image_fade" src="<?php echo $row['image'] ; ?>" alt="Image" style="height: 320px;width: 300px"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3 style="color:#1ABC9C;"> <?php echo $row['title']; ?> </h3>
                                        <p class="small"><?php echo $row['description']; ?><p>
                                    </div>
                                   
                                    <!-- <button>whatsapp</button> -->
                                    <a href="product_detail.php?id=<?php echo $row['id']; ?>" class="btn inquiry_btn">View Detail</a>
                                    
                                </div>
                            </div>

                        <?php } ?>
    
                        </div>
                    </div>
                    <div class="divider"></div>

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