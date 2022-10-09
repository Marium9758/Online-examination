<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/Exam.php');
$exm = new Exam();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<?php
if (isset($_GET['viewq'])) {
    $number = $_GET['viewq'];
    $question = $exm->getQuestionAdminView($number);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $update = $exm->updateQuestion($number,$_POST);
}
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style="min-height: 550px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <div class="col-lg-6 title">Admin Panel - Edit Question </div>
                <div class="col-lg-6 msg">
                    <?php
                    if (isset($update)) {
                    echo $update;
                    }
                    ?>
                </div>
                <?php // Form Start  ?>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="" method="post" class="form-horizontal" style="margin-top: 20px;">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Question No :</label>
                            <div class="col-sm-10">
                                <input type="text" name="quesno" style="width: 100px;" value="<?php echo $question['quesno']; ?>"  readonly="" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Question :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ques" value="<?php echo $question['ques'] ?>" required="">
                            </div>
                        </div>
                        <?php
                        $i = 0;
                        $answer = $exm->getAnswer($number);
                        while ($result = $answer->fetch_assoc()) {
                            $next[$i] = $result['ans'];
                            $i++;
                        }
                        ?>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Option A :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans1" value="<?php echo $next[0]; ?>" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2"> Option B :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans2" value="<?php echo $next[1]; ?>" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Option C :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans3" value="<?php echo $next[2]; ?>" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Option D :</label>
                            <div class="col-sm-10">          
                                <input type="text" class="form-control" name="ans4" value="<?php echo $next[3]; ?>" required="">
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
                        <input type="hidden" name="aid" value="$ansid[$i]">
                        <div class="form-group">        
                            <div class="col-sm-offset-6 col-sm-6">
                                <button type="submit" class="btn btn-default"> Update </button>
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


