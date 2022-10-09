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
        unset($_SESSION['category_id']);
        unset($_SESSION['score']);
        ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;">Welcome to Online Exam </h4>
                <div class="col-lg-6 well" style="height: 350px;margin-top: -15px">
                    <img src="images/hom.jpg" width="100%" height="100%">
                </div>
                <div class="col-lg-6 well" style="height: 350px;margin-top: -15px">
                    <h2 style="text-align: center; font-weight: bold;">Start Exam </h2><hr>
                    <h3 style="text-align: center;"><a href="starttest.php?category_id=1"><button class="btn  btn-default navbar-btn" style="margin-top: -5px;font-size: 16px; width: 250px;color: green;"> PHP </button></a></h3>
                    <h3 style="text-align: center;"><a href="starttest.php?category_id=2"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> JAVA </button></a></h3>
                    <h3 style="text-align: center;"><a href="starttest.php?category_id=3"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> C++ </button></a></h3>
                    <h3 style="text-align: center;"><a href="starttest.php?category_id=4"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> PYTHON </button></a></h3>
                    <h3 style="text-align: center;"><a href="starttest.php?category_id=5"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> OS </button></a></h3>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
