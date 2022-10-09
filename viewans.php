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
        $category_id = $_SESSION['category_id'];
        $questions = $_SESSION['randQuestions'];
        $total = count($questions);
        ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;"> Question & Answer <?php echo' of ' . $total; ?></h4>
                <div class="col-sm-2" style="min-height: 350px;margin-top:-18px;"></div>
                <div class="col-lg-8 well" style="min-height: 350px;margin-top:-18px;">
                    <?php
                    $getque = $exm->getQuestionByOrder($category_id, $questions);
                    if ($getque) {
                        $Qno = 1;
                        while ($question = $getque->fetch_assoc()) {
                            ?>
                            <div class="question"> Ques <?php echo $Qno++; ?>. <?php echo $question['ques'] ?> </div><hr>
                            <form action="" method="POST">
                                <?php
                                $number = $question['quesno'];
                                $answer = $exm->getAnswer($number);
                                if ($answer) {
                                    while ($result = $answer->fetch_assoc()) {
                                        ?>
                                        <div class="radio choice_ans" style="margin-top: -10px;">
                                            <label><input type="radio">
                                                <?php
                                                if ($result['rightans'] == '1') {
                                                    echo "<span style='color:blue;'>" . $result['ans'] . "</span>";
                                                } else {
                                                    echo $result['ans'];
                                                }
                                                ?>
                                            </label>
                                        </div>
                                    <?php }
                                } ?>
    <?php }
} ?>
                    </form>
                </div>
                <div class="col-sm-2" style="min-height: 350px;margin-top:-18px;"></div>
            </div>
        </div>
        <div style="margin-top: -20px;"><?php include 'inc/footer.php'; ?></div>
    </body>
</html>