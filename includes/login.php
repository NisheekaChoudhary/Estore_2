
<div class="container">
    <div class="row">
        <div class="col-xs-12">
<div class="modal fade" tabindex="-1" id="loginModal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Login</h3>
            </div>
        <form role="form" method="POST" action="login_submit.php">
            <div class="modal-body">               
                    <div class="form-group">
                        <label for="inputUserName">Username</label>
                        <input class="form-control" placeholder="Enter registered E-mail" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" placeholder="Enter Password" name="password" type="password">
                    </div>
                <br>
                <?php echo @$_GET['error']; ?>
                <div class="text-right">
                    <a href="forgot.php">Forget Password ?</a>
                </div><br>            
                <div class="modal-footer">               
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="login" class="btn btn-primary">Login</button>               
                </div>
            </div>
        </form>
                
        </div>
    </div>
</div>
        </div>
    </div>
</div>