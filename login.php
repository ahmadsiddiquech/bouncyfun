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

    <title>Bouncy</title>
    <style type="text/css">
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
        .card {
          box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }

    </style>
</head>

<body style="text-align: center">
    <div class="card col-md-4 row section" style="display: inline-block;">
        <div id="logo" class="divcenter">
            <a class="standard-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Logo"></a>
            <a  class="retina-logo" data-dark-logo="logo.jpg"><img class="divcenter" src="images/logo.jpg" alt="Logo"></a>
        </div>
        <form  action="login_user.php" method="POST">
                <div class="col-md-12">
                    <label>Email</label>
                    <input type="email" required id="email" name="email" class="form-control" />
                </div>
                <div class="col-md-12">
                    <label>Password</label>
                    <input type="Password" required id="Password" name="Password" class="form-control" />
                </div>
            <div style="padding-top: 30px;">
                <button class="btn send_btn" type="submit" id="submit" name="">Login</button>
            </div>
        </form>
    </div>

    
        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/functions.js"></script>

</body>
</html>