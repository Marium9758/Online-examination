<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/Exam.php');
$exm = new Exam();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<?php
if (isset($_GET['viewq'])) {
    $number = (int) $_GET['viewq'];
    $question = $exm->getQuestionAdminView($number);
}
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style="min-height: 450px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <h4 class="well" style="text-align: center;margin-top: -15px;background: #9d9d9d;"> View Question no : <?php echo $question['quesno']; ?></h4>
                <div class="col-sm-2" style="height: 350px;margin-top:-18px;"></div>
                <div class="col-lg-8 well" style="height: 350px;margin-top:-18px;">
                    <div class="question"> Ques <?php echo $question['quesno']; ?>. <?php echo $question['ques'] ?> </div><hr>
                    <form action="" method="POST">
                        <?php
                        $answer = $exm->getAnswer($number);
                        if ($answer) {
                            while ($result = $answer->fetch_assoc()) {
                                ?>
                                <div class="radio choice_ans">
                                    <label><input type="radio" name="ans" value="<?php echo $result['id']; ?>"><?php echo $result['ans']; ?></label>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </form>

                    <h3 style="padding-left: 80px;margin-top: 30px;"><a href="">
                            <a href="update.php?viewq=<?php echo $number;?>"><button class="btn  btn-default navbar-btn" style="font-size: 16px; width: 150px;color: green;"> Edit Question </button></a>
                    </h3>
                </div>
                <div class="col-sm-2" style="height: 350px;margin-top:-18px;"></div>
            </div>
        </div>
    </body>
    <?php include 'inc/footer.php'; ?>
</html>


