<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/../lib/Session.php');
Session::init();
include_once ($filepath . '/../lib/Database.php');
include_once ($filepath . '/../helpers/Format.php');
spl_autoload_register(function($class) {
    include_once "classes/" . $class . ".php";
});
$db = new Database();
$fm = new Format();
$user = new User();
$exm = new Exam();
$pro = new Process();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>
    </head>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        Session::destroy();
        header("Location:index.php");
        exit();
    }
    ?>
    <div class="container-fluid" style="height: 212px;margin-top:-3px;">
        <div class="container" style="margin-top: -20px;background: #F8F8F8;">
            <div class="row" style="height: 150px;margin-top: 25px;">
                <div class="col-lg-12 col-sm-12 col-xs-12" style="height: 150px;padding:0px;">
                    <img src="images/baner.jpg" width="100%" height="100%" />
                </div>
            </div>
            <nav class="navbar navbar-default" style="margin-top:4px;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav col-sm-9">
                            <?php
                            $login = Session::get("login");
                            if ($login == TRUE) {
                                ?>
                                <a href="profile.php"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 110px;"> Profile </button></a>
                                <a href="exam.php"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 110px;"> Exam </button></a>
                                <a href="result.php"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 110px;"> Result </button></a>
                                <a href="?action=logout"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 110px;"> Logout </button></a>
                            <?php } else { ?>
                                <a href=""><button class="btn glyphicon glyphicon-log-in btn-default navbar-btn" style="font-size: 16px; width: 100px;"> Login </button></a>
                                <a href="register.php"><button class="btn glyphicon glyphicon-user btn-default navbar-btn" style="font-size: 16px; width: 120px;"> Register </button></a>       
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav col-sm-3">    
                            <?php
                            $login = Session::get("login");
                            if ($login == TRUE) {
                                ?>
                                Username :<span style="font-size: 26px; line-height: 50px; font-family: bold;"> <?php echo Session::get("username");
                        } else{
                            ?>
                                    <a href="admin/index.php"><button class="btn glyphicon glyphicon-user btn-default navbar-btn navbar-right" style="font-size: 16px; width: 120px;"> ADMIN </button></a>     
                        <?php }?> </span>                         
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</html>