<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body style="background: #A9A9A9;">
        <?php include 'inc/header.php'; ?>
        <?php
        Session::checkSession();
        $userid = Session::get("userid");
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $updatUser = $user->updateUserData($userid, $_POST);
        }
        ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;"> Your Profile </h4>
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="border: 2px solid #1b6d85; height: 310px;">
                    <div class="col-sm-12" style="height: 60px; text-align: center; line-height: 60px; font-size : 18px;">
                        <span id="msg" >
                            <?php
                            if (isset($updatUser)) {
                                echo $updatUser;
                            }
                            ?>
                        </span>
                    </div>
                    <?php // Form Start..?>
                    <?php
                    $getData = $user->getUserData($userid);
                    if ($getData) {
                        $result = $getData->fetch_assoc();
                        ?>
                        <form action="" method="post" class="form-horizontal">
                            <div class="form-group"  style="margin-top: 50px;">
                                <label class="control-label col-sm-3">Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $result['name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">User Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $result['username'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email :</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $result['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" id="update" class="btn btn-default">Update</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
