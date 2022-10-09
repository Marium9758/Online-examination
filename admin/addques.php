<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/Exam.php');
$exm = new Exam();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $addques = $exm->addQuestion($_POST);
}
// Get Total Question no
$total = $exm->getTotalRowsForAdmin();
$next = $total + 1;
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style="min-height: 550px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <div class="col-lg-6 title">Admin Panel - Add Question </div>
                <div class="col-lg-6 msg">
                    <?php
                    if (isset($addques)) {
                        echo $addques;
                    }
                    ?>
                </div>
                <?php // Form Start  ?>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="" method="post" class="form-horizontal" style="margin-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Question No :</label>
                            <div class="col-sm-2">
                                <input type="number" name="quesno" style="width: 100px;" value="<?php
                                if (isset($next)) {
                                    echo $next;
                                }
                                ?>"  class="form-control" >
                            </div>
                            <label class="control-label col-sm-3">Question Category :</label>
                            <select class="form-control col-sm-4" name="cat" style="width: 150px;margin-left: 15px;" required="">
                                <option value="">Select Category</option>
                                <option value="1">PHP </option>
                                <option value="2">JAVA </option>
                                <option value="3">C++ </option>
                                <option value="4">PYTHON </option>
                                <option value="5">OS </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Question :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ques" placeholder="Enter Qusesion" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Option A :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans1" placeholder="Enter Option A" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Option B :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans2" placeholder="Enter Option B" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Option C :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans3" placeholder="Enter Option C" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Option D :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans4" placeholder="Enter Option D" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Correct Ans :</label>
                            <select class="form-control col-sm-6" name="rightans" style="width: 150px;margin-left: 15px;" required="">
                                <option value=''>Select Option</option>
                                <option value="1">Option A </option>
                                <option value="2">Option B </option>
                                <option value="3">Option C </option>
                                <option value="4">Option D </option>
                            </select>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-6 col-sm-6">
                                <button type="submit" class="btn btn-default">Add A Question</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2"></div>

            </div>
        </div>
    </body>
    <?php include 'inc/footer.php'; ?>
</html>


