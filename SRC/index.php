<!DOCTYPE html>
<html>

<?php include "index_header.php"?>




<!-- <div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid"> -->





<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */
        
        .carousel-inner img {
            width: 1370px;
            height: 600px;
        }
    </style>
</head>

<body>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../dist/img/img6.jpg" alt="" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="../dist/img/img7.jpg" alt="" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="../dist/img/img8.jpg" alt="" width="300" height="200">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</body>







</html>