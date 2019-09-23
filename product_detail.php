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
                background-color: white;
                color:#1ABC9C;
                border-color: #1ABC9C;
                border-radius: 16px;
                width: 200px;
            }
            .inquiry_btn:hover{ 
                background-color: #1ABC9C;
                color:white;
                border-radius: 16px;
            }
            .whatsapp_btn{
                background-color: white;
                /* //float:right; */
                position: fixed;
                color:#1ABC9C;
                z-index :1;
                border-color: #1ABC9C;
                border-radius: 16px;
                width:180;
            }
            .whatsapp_btn:hover{
                background-color: #1ABC9C;
                color:white;
                border-radius: 16px;
            }
            .send_btn{
                background-color: #1ABC9C;
                color: white;
                border-radius: 16px;
                width: 200px;
            }
            .send_btn:hover{
                background-color:white;
                color:#1ABC9C;
                border-color: #1ABC9C;
                border-radius: 16px;
            }
            @media screen and (max-width:414px) {
                #btn-size{ 
                        background-color: white;
                        position: fixed;
                        color:#1ABC9C;
                        z-index :1;
                        border-color: #1ABC9C;
                        border-radius: 16px;
                        width:120px;
                        margin-top:-50px;
                        font-size:10px;

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
                   
                    <div class=" notopmargin nobottommargin">

                        <div class="container clearfix">
                            <!-- whatsapp button-->
                                <div id="btn-size"class="widget widget-twitter-feed clearfix"> 
                                    <a id="btn-size" href="https://web.whatsapp.com/send?phone=971544449359&text="  target="_blank" class="btn whatsapp_btn">
                                    <i class="icon-whatsapp"></i>&nbsp;&nbsp;WhatsApp</a>
                                </div>
                            <!--end-->
                            <?php 
                            $id = $_GET['id'];
                                $result = mysqli_query($conn,"SELECT *  FROM image_table WHERE id = '$id'");
                                while ($row = $result->fetch_assoc()) { ?>
    
                            <div class="col_half nobottommargin topmargin-lg" >
    
                                <img src="<?php echo $row['image'] ; ?>" alt="Image" class="center-block" > 
    
                            </div>
                            <div class="col_half nobottommargin topmargin-lg col_last">
    
                                <div class="heading-block topmargin-lg">
                                    <h2 style="color: #1ABC9C;"><?php echo $row['title']; ?></h2>
                                </div>
    
                                <p><?php echo $row['description']; ?></p>
    
                                <a id="enquiry" href="#enquiry" class="btn button-large inquiry_btn noleftmargin" > Send an Enquiry</a>
    
                            </div>
                        <?php } ?>
    
                        </div>
                    </div>
                    <div class="divider"></div>
                    <!-- Contact Form
                        ============================================= -->
                    <div id="form_container" class="container clearfix" style="display: none;">
						<h3 style="color: #1ABC9C;">Send us an Email</h3>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="contact_form" name="contact_form">

								<!-- <div class="form-process"></div> -->

								<div class="col_one_third">
									<label for="template-contactform-name">Name <strong style="color:red;">*</strong></label>
									<input type="text" id="name" name="name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <strong style="color:red;">*</strong></label>
									<input type="email" id="email" name="email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Phone Number <strong style="color:red;">*</strong></label>
									<input type="text" id="phone" name="phone" value="" class="sm-form-control" />
								</div>

                                <div class="clear"></div>
                                
								<div class="col_full">
									<label for="template-contactform-message">Message <strong style="color:red;">*</strong></label>
									<textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="btn send_btn" type="submit" id="submit" name="submit">Send Message</button>
								</div>

							</form>
						</div>
                    </div>
                    
                       <!-- Contact Info
                            ============================================= -->
                    
                    <div class="container clearfix">

                        <div class="divider"></div>
                             
                            <div class="row clear-bottommargin">

                                <div class="col-lg-4 col-md-8 bottommargin clearfix">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-map-marker2"></i></a>
                                        </div>
                                        <h3>Our Headquarters<span class="subtitle">#406 Atrium Business Centre, Oud Metha, Dubai, 
                                           P.O: 18026</span></h3>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-8 bottommargin clearfix">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-phone3"></i></a>
                                        </div>
                                        <a href="tel:+971 54 444 9359"><h3>Speak to Us<span class="subtitle">+971 54 444 9359 <br/> <br/></span></h3></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-8 bottommargin clearfix">
                                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-mail"></i></a>
                                        </div>
                                        <h3>Send us an mail<span class="subtitle">info@bouncy.ae <br/> <br /></span></h3>
                                    </div>
                                </div>

                            </div><!-- Contact Info End -->
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
        $(document).ready(function(){
            $("#enquiry").click(function(){
              
                $("#form_container").show(); 
            });

            $(".send_btn").click(function(){
              
                var name   = $('#name').val();
                var email  = $('#email').val();
                var no     = $('#phone').val();
                var message= $('#message').val();
               // alert(name + email+ no + message);

                $.ajax({
                        url:"send_mail.php",
                        type:"post",
                        data:{name:name,email:email,no:no,message:message},
                        success:function(data){
                            
                            //alert(data);

                            if(data == 1)
                            {
                                alert("Your Message send Successfully");
                                $("#form_container").hide(); 
                            }
                            else{
                                alert("check your internet connection!");
                                window.location.reload(); 
                            } 
                        }
				})
          });
        });
</script>