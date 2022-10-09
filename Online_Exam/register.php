<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body style="background: #A9A9A9;">
        <?php include 'inc/header.php'; ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;">Online Exam System - User Registration </h4>
                <div class="col-lg-6 well" style="height: 350px;margin-top: -15px">
                    <img src="images/images.jpg" width="100%" height="100%">
                </div>
                <div class="col-lg-6 well" style="height: 350px;margin-top: -15px">
                    <div class="col-sm-12 msg_box"><span id="msg"></div>
                    <?php // Form Start..?>
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group"  style="margin-top: 40px;">
                            <label class="control-label col-sm-3">Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">User Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password :</label>
                            <div class="col-sm-7">          
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email :</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" id="regsubmit" class="btn btn-default">SignUp</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12 regnote">Already Registered ? <a href="index.php"> Login </a> Here.</div>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php'; ?>
    </body>
</html>
