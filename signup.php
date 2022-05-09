
<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | E Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .thumbnail{
                border: 0px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/login.php';
        ?>
        
        <div class="container-fluid decor_bg" id="content3">
            <div class="row">
                
                    <div class="col-sm-5 col-sm-offset-1">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo @$_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><?php echo @$_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                
                <div class="col-sm-4 col-sm-offset-1 home-feature">
                    <div class="thumbnail" id="sign">
                        <img src="img/sign3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>    
</html>