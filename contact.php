<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <style>
            .thumbnail{
                border: 0px;
            }
            #row1{
                margin-bottom: 50px;
            }
            #col1{
                margin-left: 25px;
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/login.php';
        ?>
        
        <div class="container-fluid" id="contact">
            
            <div class="row" id="row1">
                <div class="col-md-9">
                    <h2><b>LIVE SUPPORT :</b></h2>
                    <h2>24 hours | 7 days a week | 365 days a year Live Technical Support </h2>
                  <br><p>
                  The first function of a Contact page is to get visitors interested.
                  If they like what they see and it is easy to contact you, why won’t they make a call or fill a form.
                  The second but probably the most important reason to build Contact page wisely is the collaboration facilitation.
                  The ‘Contact Us’ section helps users to contact the webmaster and so the website owner so gets the information 
                  on his customers.Contact page is the last one that visitors see before they decide if they need your project. 
                  There are little chances that users will change their mind if your home page is brilliant but contact page has a so-so design.
                  Still, it is better not to risk with it! If a user likes your website thanks to a perfect website design, 
                  the Contact page will just emphasize how cool you are.
            
                  </p>
                </div>
                  <div class="col-md-3">
                            <div class="thumbnail">
                                <img class="img-rounded img-responsive" src="img/contact.png" alt="">
                            </div>                           
                    </div>       
            </div>
            </div>
            
            
            <div class="row" id="cameras">
                <div class="col-md-7 home-feature" id="col1">
                    <h2>CONTACT US</h2>
                    <form  action="contact_submit.php" method="POST">
                            <label for="name">Name:</label>
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <label for="email">Email:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php echo @$_GET['m1']; ?>
                            </div>
                            <label for="text">Message:</label>
                            <textarea name="message" class="form-control" placeholder="Other Feedback" cols="75" rows="7" id="text"></textarea>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <?php
                        echo "<br><br><b class='red'>" . @$_GET['error'] . "</b><br>";
                        ?>
                        </form>
                </div>
                <div class="col-md-3 col-md-offset-1 home-feature">
                    <h1>Company Information:</h1>
                    <p>500 Lorem Ipsum Dolor st,<br>
                        22-58-2-9 St Amet,Lorem ,<br>
                        USA<br>
                        Phone:(00)222 666 444<br>
                        Fax:(000) 000 00 00 0<br>
                        Email: info@mycompany.com<br>
                         Follow on: Facebook,Twitter
                    </p>
                </div>
            </div>
            
            
        </div>
        
        <?php
            include 'includes/footer.php';
        ?>
    </body>    
</html>