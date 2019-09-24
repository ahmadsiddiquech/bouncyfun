<?php 
    session_start();
    include 'dbConnection.php'; 
    if (isset($_SESSION["login_session"]) && !empty($_SESSION["login_session"])) { ?>
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
    </style>
</head>

<body >
    <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2 center">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <ul>
                            <li class="current"><a href="image_dashboard.php"><div>Image</div></a></li>
                            <li><a href="video_dashboard.php"><div>Video</div></a></li>
                            <li><a href="Logout.php" class="fa fa-lock"><div>Logout</div></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
    <div class="section">
        <h1>UPLOAD IMAGE</h1>
        <form  action="upload_image.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-8">
                <label>Title</label>
                <input type="text" required id="title" name="title" class="form-control" />
            </div>
            <div class="col-md-8">
                <label>Description</label>
                <textarea type="text" required id="description" name="description" class="form-control" rows="6" cols="30"></textarea>
            </div>
            <div style="padding-left: 30px;padding-top: 30px">
                 <input type="file" id="inputFile" accept="image/*" data-title="Drag and drop a file" name="my_file" required></input>
            </div>
            <div style="padding-left: 30px;padding-top: 30px">
                <button class="btn send_btn" type="submit">Upload</button>
            </div>
        </form>
    </div>
    <div class="section">
        <h1>DELETE IMAGE</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="delete_image.php" method="POST">
                    <div class="col-md-8">
                        <label>ID:</label>
                        <input type="number" required id="id_no" name="id_no" class="form-control" />
                    </div>
                    <div style="padding-left: 30px;padding-top: 30px">
                        <button class="btn send_btn" type="submit">Delete</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6" style="height: 250px;">
                <h3>ID----title</h3>
                <div style="height: 249px;overflow: auto;">
                    <?php
                        $result = mysqli_query($conn,"SELECT *  FROM image_table");
                        while ($row = $result->fetch_assoc()) { 
                            echo $row['id'].'-----'.$row['title'];
                            echo '<hr>';
                        } 
                    ?>

                </div>
            </div>
        </div>
    </div>

    
        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/functions.js"></script>

</body>
</html>
<?php } else {
    echo "Unauthorized Access";
} ?>