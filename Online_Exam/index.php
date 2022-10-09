<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body style="background: #A9A9A9;">
        <?php include 'inc/header.php'; ?>
        <?php
        Session::checkLogin();
        ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;">Online Exam System - User Log In </h4>
                <div class="col-sm-6 well" style="min-height: 350px;margin-top: -15px">
                    <img src="images/exm.jpg" width="100%" height="100%">
                </div>
                <div class="col-sm-6 well" style="min-height: 400px;margin-top: -15px">
                    <div class="col-sm-12 msg_box" style="margin-top: 10px;">
                        <span class="empty" style="display: none;">Field Must Not Be Empty ! </span>
                        <span class="disable" style="display: none;">User Id Disabled ! </span>
                        <span class="error" style="display: none;">User Id or Password Not Matched ! </span>
                    </div>
                    <?php // Form Start..?>
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group" style="margin-top: 60px;">
                            <label class="control-label col-sm-3">Email :</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password :</label>
                            <div class="col-sm-7">          
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" id="loginsubmit" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12 regnote">New User ? <a href="register.php"> Sign up </a> Here.</div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php'; ?>
    </body>
</html>
