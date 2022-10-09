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
        ?>
        <div class="container-fluid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $process = $pro->insertOrUpdateResult($_POST);
            }
            ?>
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;">You are Done ! </h4>
                <h4 style="text-align: center;"><?php
                    if (isset($process)) {
                        echo $process;
                    }
                    ?>
                </h4>
                <p class="text" style="margin-top: 10px;">Congrates ! you have just Complete the Exam.</p>
                <form action="" method="post">
                    <p class="text">Your Score : 
                        <?php
                        if (isset($_SESSION['score'])) {
                            echo $_SESSION['score'];
                            ?>                   
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                            <input type="hidden" name="score" value="<?php echo $_SESSION['score']; ?>">
                            <input type="hidden" name="cat" value="<?php echo $_SESSION['category']; ?>">
                            <a><button class="btn  btn-default navbar-btn" style="margin-left: 25px;font-size: 16px; height: 30px;line-height: 10px;width: 70px;color: green;"> Save </button></a>
                    </form>
                <?php } ?>
                </p>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h3 style="text-align: center;"><a href="viewans.php"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 250px;color: green;"> View Answer </button></a></h3>               
                    <h3 style="text-align: center;"><a href="starttest.php"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 250px;color: green;"> Start Again </button></a></h3>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
