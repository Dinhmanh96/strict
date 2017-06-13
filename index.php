<?php
    include_once('Admin/connect/connect.php');
    // Banner
    $sql_banner = "SELECT * FROM banner";
    $query_banner = mysql_query($sql_banner);
    $totalrows_banner = mysql_num_rows($query_banner);

    // Simple
    $sql_simple = "SELECT * FROM simple LIMIT 3";
    $query_simple = mysql_query($sql_simple);
    $totalrows_simple = mysql_num_rows($query_simple);

    // Showcase
    $sql_showcase = "SELECT * FROM showcase LIMIT 6";
    $query_showcase = mysql_query($sql_showcase);
    $totalrows_showcase = mysql_num_rows($query_showcase);

    // Social
    $sql_social = "SELECT * FROM social";
    $query_social = mysql_query($sql_social);
    $totalrows_social = mysql_num_rows($query_social);

    // Insert Message
    if(isset($_POST['submit'])){
        $time_cmt = gmdate("Y-m-d H:i:s",time()+7*3600);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "INSERT INTO message(name, email, message, time_cmt)VALUES('$name','$email','$message','$time_cmt')";
        $query = mysql_query($sql);
        // echo "ok";
        // header("location:Admin/index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Strict</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/strict.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
</head>
<body>
<header class="container logo">
    <img src="image/logo.png">
</header>
<div class="main">
    <div class="container-fluid banner">
        <div id="carousel-example-generic" class="carousel slide img-banner" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                 <?php
                    $i = 0;
                    while ($rows_banner = mysql_fetch_array($query_banner)) {

                ?>
                    <!-- In một Item active -->
                    <?php if($i==0){echo "<div class='item active' transition: 0.1s>";}else{echo "<div class='item' transition: 0.8s>";} ?>
                        <!-- In thông tin một banner -->
                        <img src="image/<?php echo $rows_banner['anh']?>">
                        <div class="text-banner text-center">
                            <h1><?php echo $rows_banner['title']?></h1>
                            <hr>
                            <p><?php echo $rows_banner['description']?></p>
                        </div>
                        <!-- Kết thúc in thông tin 1 banner -->
                    <?php echo "</div>";?>
                <?php
                    $i +=1;
                }
                ?>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- <img src="image/banner.jpg"> -->
        </div>
        <div class="text-banner text-center contact-scroll">
            <a href="#contact">
                <button type="button" class="button btn-blue">Call to action</button>
            </a>
        </div>
        <a href="#simple"><span class="down"><i class="fa fa-angle-down fa-2x"></i></span></a>

    </div>
    <a id="simple"></a>
    <div class="container">
        <div class="row text-simple text-center">
            <h1>Simple & pure design.</h1>
            <span>Designers everywhere gush with admiration upon seeing a web design and exclaim "its beautiful, it's so clean!". There are a countless number of webdesign round-ups dedicated to 'clean' design and it is a term thrown around quite a a bit the web design communit. It can be easy to spot a good example of clean design.</span>
        </div>
    </div>
    <div class="icon-fluid">
        <div class="container">
            <div class="row icon-simple">
                <?php
                    while ($rows_simple = mysql_fetch_array($query_simple)) {
                    ?>
                        <div class="col-md-4 icon">
                            <img src="image/<?php echo $rows_simple['anh'];?>">
                            <h3><?php echo $rows_simple['title'];?></h3>
                            <span><?php echo $rows_simple['description'];?></span>
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="container showcase">
        <div class="row title-showcase">
            <h2>Showcase your work like a pro.</h2>
            <p>Contact me if you like my work</p>
        </div>
        <div class="row pic-showcase">
            <?php
                while ($rows_showcase = mysql_fetch_array($query_showcase)) {
                ?>
                    <div class="col-sm-12 col-sm-6 col-md-4 pic">
                        <img src="image/<?php echo $rows_showcase['anh'];?>" class="image">
                        <div class="pic-hover flex-container">
                            <button type="button" class="btn btn-primary btn-lg flex-item zoom" data-toggle="modal"
                                    data-target=".bs-example-modal-lg-1"><span class="glyphicon glyphicon-zoom-in"></span>
                            </button>
                            <a href="#">
                                <button class="btn btn-primary btn-lg flex-item"><i class="fa fa-link" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>   
                    </div>
                <?php
                }
            ?>
            
           
        </div>
        <div class="modal fade bs-example-modal-lg-1" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <!-- Header modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Project</h4>
                            </div>
                            <!-- Body modal -->
                            <div class="modal-body">
                                <div class="flex-container">
                                    <a href="#">
                                       <i class="fa fa-angle-left fa-3x flex-item prv" aria-hidden="true"></i>
                                    </a>
                                    <img src="" id="modal-image" class="flex-item">
                                     <a href="#">
                                        <i class="fa fa-angle-right fa-3x flex-item next" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <h4>Thông tin dự án</h4>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            </div>
                            <div class="modal-footer">
                                Link project: <a href="http://abc.xyz">http:/abc.xyz</a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<a id="contact"></a>
<div class="contact text-center">
    <h2>Stay with us</h2>
    <p>We ansure quality & support</p>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <form class="form" id="my-form" enctype="multipart/form-data" method="post">
                    <div class="form-group form__item">
                        <span class="error" id="name_errors"></span>
                        <label for="name"></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <span class="error" id="email_errors"></span>
                        <label for="email"></label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
                    <span class="error" id="message_errors"></span>
                    <textarea type="text" name="message" class="form-control" placeholder="Message" id="message"></textarea>
                    <div class="checkbox">
                        <input type="checkbox" name="check" id="checkbox">
                        <label for="checkbox">Subscribe Newsletter</label>
                    </div>
                    <button id="submit" type="submit" name="submit" class="btn btn-blue">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="container copyright">
    <div class="row">
        <div class="col-xs-12 col-sm-6 coppy">
            <span>Coppyright 2014, STRICT</span>
        </div>
        <div class="col-xs-12 col-sm-6 icon-social">
            <?php
                while ($rows_social = mysql_fetch_array($query_social)) {
                ?>
                    <a href="<?php echo $rows_social['link'] ;?>"><i class="fa fa-<?php echo $rows_social['class'];?>"></i></a>
                <?php
                }
            ?>
            
           
        </div>
    </div>
</footer>
<!-- <script type="text/javascript" src="js/show-image.js"></script> -->
</body>
</html>