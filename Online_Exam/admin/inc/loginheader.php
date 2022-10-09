<!DOCTYPE html>
<?php
    include_once ('../lib/Session.php');
    Session::checkAdminLogin();
?>
<?php
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
// Date in the past
//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=2592000");
//30days (60sec * 60min * 24hours * 30days)
?>
<html lang="en">
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta http-equiv="content-Type" content="text/html" />
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <link rel="stylesheet" type="text/css" href="css/admin_Login.css">
        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="container-fluid" style="height: 150px;margin-top:-3px;">
            <div class="container" style="margin-top: -20px;">
                <div class="row" style="height: 150px;margin-top: 25px;">
                    <div class="col-lg-12 col-sm-12 col-xs-12" style="height: 143px;padding:0px;">
                        <img src="images/login.jpg" width="100%" height="100%" />
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>