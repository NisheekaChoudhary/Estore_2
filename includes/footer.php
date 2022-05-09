<?php
if (!isset($_SESSION['email'])) { ?>
<footer>    
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <h3>Information</h3>
                <a class="text-my-own-color" href="about.php"> About Us</a><br>
                <a class="text-my-own-color" href="contact.php"> Contact Us</a><br>
            </div>
            <div class="col-md-4">
                <h3>My Account</h3>
                <a class="text-my-own-color" href="#" data-target="#loginModal" data-toggle="modal"> Login</a><br>
                <a class="text-my-own-color" href="signup.php"> Signup</a><br>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <p> Contact: +91-123-000000</p>
            </div>
        </div>   
</footer>
<?php } else { ?>

<footer>    
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <h3>Information</h3>
                <a class="text-my-own-color" href="about.php"> About Us</a><br>
                <a class="text-my-own-color" href="contact.php"> Contact Us</a><br>
            </div>
            <div class="col-md-4">
                <h3>My Account</h3>
                <a class="text-my-own-color" href="#"> Login</a><br>
                <a class="text-my-own-color" href="#"> Signup</a><br>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <p> Contact: +91-123-000000</p>
            </div>
        </div>   
</footer>
<?php } 