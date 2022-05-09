<?php
require_once("includes/common.php");?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            #hello{
                margin-top: 100px;
            }          
        </style>
    </head>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/login.php';
        ?>
<div class="container">
    <div class="row" id="hello">
    <div class="col-sm-4 col-sm-offset-4">
                        
        <form action="forgot_script.php" method="POST">
                            <div>
                                <h2>Forgot Password</h2>
                                <p>Enter your registered E-mail ID</p>
                            </div><br>
                            
                            <div class="form-group">
                                
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required="true">
                                
                            </div><br>
                            
                            <button name="send_otp" type="submit" class="btn btn-primary btn-block">Send OTP</button>  
                            <?php
                            echo "<br><br><b class='red'>" . @$_GET['error'] . "</b>";
                            ?>
                            
                            </form>
                        
    </div>
    </div>
</div>
    </body>
</html>