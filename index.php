<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

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
        <title>Welcome | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function () {
        $('[data-toggle="popover"]').popover({html: true});});
        </script>  
    </head>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/login.php';
        ?>
        

                <div id="imageCarousel" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/4.jpg" class="img-responsive">
                            <div class="carousel-caption">
                        <div id="banner_content">
                            <h1>We sell Mobiles.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="#index" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                            </div>
                        </div>
                       
                        <div class="item">
                            <img src="img/7.jpg" class="img-responsive">
                            <div class="carousel-caption">
                                <h2>Best Place to Buy Mobiles and that's our promise.</h2>
                                <p>We never break promises because "Making promises and keeping them is a great way to build a brand".</p>
                            </div>
                        </div>
                        
                        <div class="item">
                            <img src="img/13.jpg" class="img-responsive">
                            <div class="carousel-caption">
                                <h1>“Our job is to bring the dead boring peoples back to life.”</h1>
                                
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
        <br><br><br>
        


        <div id="content1">
            <div class="container-fluid decor_bg" id="index">
                <div class="row mt-50">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h4>Mobile 1</h4>
                            </div>
                            <div class="panel-body">
                                <img class="img-rounded img-responsive" src="img/s3.jpg" alt="Mobile-1"><br>
                                <p><b>Samsung Galaxy M31</b><br>Android v10.0, Price: Rs14,999<br><b>Login</b> for more details.
                                </p>
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
                                <p><b>Xiaomi Redmi Note 8 Pro</b><br>Android v9.0, Price: Rs13,999<br><b>Login</b> for more details.
                               </p>
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
                                <p><b>Realme 3</b><br>Android v9.0, Price: Rs8,999<br><b>Login</b> for more details.
                                </p>
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
                                <p><b>Apple iPhone X</b><br>iOS v11.1.1, Price: Rs81,000<br><b>Login</b> for more details.
                                </p>
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
                                <p><b>Nokia 6.1 Plus</b><br>Android v8.0, Price: Rs12,899<br><b>Login</b> for more details.
                                </p>
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
                                <p><b>Lava Spark i8</b><br>Price: Rs1,459<br><b>Login</b> for more details.
                                </p>
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
        
        

        <?php
                include 'includes/footer.php';
        ?>
  
    </body>
</html>
