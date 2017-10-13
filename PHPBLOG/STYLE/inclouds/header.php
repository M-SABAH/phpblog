<?php
include "style/libs/config.php";
include "style/libs/database.php";
include "style/libs/function.php";

$db = new database;

$query =  "SELECT * FROM `posts` ORDER BY `content` DESC";

$POSTS = $db->select($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags--> 
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>PHP Blog</title>

        <!--Bootstrap core CSS--> 
        <link href="STYLE/bootstrap.css" rel="stylesheet">

        <!--IE10 viewport hack for Surface/desktop Windows 8 bug--> 
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!--Custom styles for this template--> 
        <link href="STYLE/CUSTOM.css" rel="stylesheet">

        <!--Just for debugging purposes. Don't actually copy these 2 lines!  
        [if lt IE 9]>-->
        <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
        <!--<![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
        <!--
                HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries 
                [if lt IE 9]>-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!--<![endif]-->
    </head>

    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="INDEX.php">Home</a>
                    <a class="blog-nav-item" href="index.php">All Posts</a>
                    <a class="blog-nav-item" href="#">Services</a>
                    <a class="blog-nav-item" href="../inclouds/sidebar.php">About US</a>
                    <a class="blog-nav-item" href="#">Contact US</a>
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="blog-header">
                <h1 class="blog-title">PHP Tutorials Blog</h1>
                <p class="lead blog-description">All about php tutorials, New and guides.</p>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">
                    <?php while ($row = $POSTS-> fetch_array()) : ?>
                        <div class="blog-post">
                            <h2 class="blog-post-title"> <?php echo $row['title']; ?> </h2>
                            <p class="blog-post-meta">on <?php echo FormatDate($row['date']); ?> by <a href="#">
                                    <?php echo $row['autor']; ?></a></p>
                            
                            <img src="http://127.0.0.1/CMS/PHPBLOG/STYLE/images/<?PHP echo $row['image'];?>" width="600" height="400" /> 
                            <!--<img src="../images/PHP.png">-->
                                                             
                            <p><?php echo $row['content']; ?></p>

                        </div><!-- /.blog-post -->
                    <?php endwhile; ?>
               </div> <!-- /.blog-main  -->