<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/Exam.php');
$exm = new Exam();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<?php
if (isset($_GET['delque'])) {
    $quesno = (int) $_GET['delque'];
    $delque = $exm->deleteQuestion($quesno);
}
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style="min-height: 450px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <div class="col-lg-6 title">Admin Panel - Question Category </div>
                <div class="col-lg-6 msg">
                    <?php
                    if (isset($delque)) {
                        echo $delque;
                    }
                    ?>
                    <h3 style="text-align: center;"><a href="quelist.php?q=1"><button class="btn  btn-default navbar-btn" style="margin-top: 50px;font-size: 16px; width: 250px;color: green;"> PHP </button></a></h3>
                    <h3 style="text-align: center;"><a href="quelist.php?q=2"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> JAVA </button></a></h3>
                    <h3 style="text-align: center;"><a href="quelist.php?q=3"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> C++ </button></a></h3>
                    <h3 style="text-align: center;"><a href="quelist.php?q=4"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> PYTHON </button></a></h3>
                    <h3 style="text-align: center;"><a href="quelist.php?q=5"><button class="btn  btn-default navbar-btn" style="margin-top: -25px;font-size: 16px; width: 250px;color: green;"> OS </button></a></h3>
                </div>
                <table class="table table-hover">


                </table>
            </div>
        </div>
    </body>
    <?php include 'inc/footer.php'; ?>
</html>


