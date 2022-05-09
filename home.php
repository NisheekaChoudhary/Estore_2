<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | E Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            #banner{

    left: -20%;
    position: relative;
    padding-top: 6%;
    padding-bottom: 1%;
    margin-top: 12%;
    margin-bottom: 1%;

    max-width: 450px;
}
#banner h1{
    color: blueviolet;
}
@media(max-width:768px){
    #banner{

    left: -20%;
    position: relative;
    padding-top: 1%;
    padding-bottom: 1%;
    margin-top: 1%;
    margin-bottom: 1%;

    max-width: 450px;
}
}
        </style>
        <script>
        $(document).ready(function () {
        $('[data-toggle="popover"]').popover({html: true});});
        </script>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?><br><br>
        
        
    <center>
        <div class="container-fluid" id="home-jumbotron">
        <div class="jumbotron home-spacer">
                <h1>Welcome to our E-Store!</h1>
                <p>We have the best mobiles for you. No need to hunt around, we have all in one place.</p>
        </div>
        </div>
    </center>
    <hr><br>
        
        

                <div id="imageCarousel" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>                       
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/h1.jpg" class="img-responsive">
                            <div class="carousel-caption">
                        <div id="banner">
                            <h1>MOBILE PHONES</h1><h1><b>SALE</b></h1>
                             
                            <h3>Exciting Offers on all Brands.</h3><h1><span class = "glyphicon glyphicon-gift"></span></h1>
                            
                        </div>
                            </div>
                        </div>
                       
                        <div class="item">
                            <img src="img/h2.jpg" class="img-responsive">
                            <div class="carousel-caption">
                                <h2>Capture The Beauty!</h2>
                                <p>Choose the Mobiles with the best Cameras.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
    <hr><br><br>
    
        
    <center>
        <div class="container">
        <div class="jumbotron home-spacer">
            <h1>Our Products!</h1>
            <h1><span class = "glyphicon glyphicon-hand-down"></span></h1>
        </div>
        </div>
    </center>
    <br><hr><br>
        
        
        
        <?php
        include 'includes/check-if-added.php';
        ?>        
        

        <div id="content">
            <div class="container-fluid decor_bg">
                <div class="row mt-50">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 1</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/s3.jpg" alt="Mobile-1"><br>
                                <p><b>Samsung Galaxy M31</b><br>6GB Ram + 64GB inbuilt storage, Android v10.0, Price: Rs14,999<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Dual Sim, 3G, 4G, VoLTE, Wi-Fi</li>
                                <li>Exynos 9611, Octa Core, 2.3 GHz Processor</li>
                                <li>6 GB RAM, 64 GB inbuilt</li>
                                <li>6000 mAh Battery with Fast Charging</li>
                                <li>6.4 inches, 1080 x 2340 px Display with Water Drop Notch</li>
                                <li>64 MP Quad Rear & 32 MP Front Camera</li>
                                <li>Memory Card Supported, upto 512 GB</li>
                                <li>Android v10.0</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 2</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/mi8.jpg" alt="Mobile-1"><br>
                                <p><b>Xiaomi Redmi Note 8 Pro</b><br>6GB Ram + 64GB inbuilt storage, Android v9.0, Price: Rs13,999<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Dual Sim, 3G, 4G, VoLTE, Wi-Fi, IR Blaster</li>
                                <li>Helio G90T, Octa Core, 2.05 GHz Processor</li>
                                <li>6 GB RAM, 64 GB inbuilt</li>
                                <li>4500 mAh Battery with Fast Charging</li>
                                <li>6.53 inches, 1080 x 2340 px Display with Water Drop Notch</li>
                                <li>64 MP Quad Rear & 20 MP Front Camera</li>
                                <li>Memory Card Supported, upto 512 GB</li>
                                <li>Android v9.0 (Pie)</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 3</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/r2.jpg" alt="Mobile-1"><br>
                                <p><b>Realme 3</b><br>4GB Ram + 64GB inbuilt storage, Android v9.0, Price: Rs8,999<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Dual Sim, 3G, 4G, VoLTE, Wi-Fi</li>
                                <li>Helio P70, Octa Core, 2.1 GHz Processor</li>
                                <li>4 GB RAM, 64 GB inbuilt</li>
                                <li>4230 mAh Battery</li>
                                <li>6.22 inches, 720 x 1520 px Display with Water Drop Notch</li>
                                <li>13 MP + 2 MP Dual Rear & 13 MP Front Camera</li>
                                <li>Memory Card Supported, upto 256 GB</li>
                                <li>Android v9.0 (Pie)</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 4</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/i2.jpg" alt="Mobile-1"><br>
                                <p><b>Apple iPhone X</b><br>3GB Ram + 64GB inbuilt storage, iOS v11.1.1, Price: Rs81,000<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Single Sim, 3G, 4G, VoLTE, Wi-Fi, NFC</li>
                                <li>Apple A11, Hexa Core, 2.39 GHz Processor</li>
                                <li>3 GB RAM, 64 GB inbuilt</li>
                                <li>2716 mAh Battery with Fast Charging</li>
                                <li>5.8 inches, 1125 x 2436 px Display with Small Notch</li>
                                <li>12 MP + 12 MP Dual Rear & 7 MP Front Camera</li>
                                <li>Memory Card Not Supported</li>
                                <li>iOS v11.1.1</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 5</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/no1.jpg" alt="Mobile-1"><br>
                                <p><b>Nokia 6.1 Plus</b><br>6GB Ram + 64GB inbuilt storage, Android v8.0, Price: Rs12,899<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Dual Sim, 3G, 4G, VoLTE, Wi-Fi</li>
                                <li>Qualcomm Snapdragon 636, Octa Core, 1.8 GHz Processor</li>
                                <li>6 GB RAM, 64 GB inbuilt</li>
                                <li>3060 mAh Battery with Fast Charging</li>
                                <li>5.8 inches, 1080 x 2280 px Display with Small Notch</li>
                                <li>16 MP + 5 MP Dual Rear & 16 MP Front Camera</li>
                                <li>Memory Card (Hybrid), upto 400 GB</li>
                                <li>Android v8.1 (Oreo)</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 6</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/lava.jpg" alt="Mobile-1"><br>
                                <p><b>Lava Spark i8</b><br>32MB Ram + 32MB inbuilt storage, Price: Rs1,459<br>For more details about the device :
                                <a href="#" title="<h4>Product Features:</h4>"
                                data-toggle="popover"
                                data-trigger="hover"
                                data-placement="top"
                                data-content="<ul>
                                <li>Dual Sim</li>
                                <li>32 MB RAM, 32 MB inbuilt</li>
                                <li>1200 mAh Battery</li>
                                <li>2.8 inches, 320 x 240 px Display</li>
                                <li>1.3 MP Rear Camera</li>
                                <li>Memory Card Supported, upto 32 GB</li>
                                <li>Bluetooth</li>
                                </ul>">   hover here
                                </a></p>
                            </div>
                            <div class="panel-footer">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <button class="btn btn-primary btn-block" data-target="#loginModal" data-toggle="modal">Order Now</button>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    <br><hr><br><br>
        

  
    </body>
</html>
