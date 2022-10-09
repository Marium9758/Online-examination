<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/Exam.php');
$exm = new Exam();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<?php
$q =$_GET['q'];
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
                <div class="col-lg-6 title">Admin Panel - Question List</div>
                <div class="col-lg-6 msg">
                    <?php
                    if (isset($delque)) {
                        echo $delque;
                    }
                    ?>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr class="info">
                            <th style="text-align: center; border: 1px solid #999;width: 30px;">No.</th>
                            <th style="text-align: center; border: 1px solid #999;">Question</th>
                            <th class="danger" style="padding-left: 40px; border: 1px solid #999; width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $getdata = $exm->getAllQuestionByOrder($q);
                    if ($getdata) {
                        $i = 0;
                        while ($result = $getdata->fetch_assoc()) {
                            $i++;
                            ?>
                            <tbody>
                                <tr class="writesize">
                                    <th style="width: 30px;"><?php echo $i; ?></th>
                                    <td><?php echo $result['ques']; ?></td>
                                    <td class="adminac" style="width: 200px;">
                                        <a href="viewQues.php?viewq=<?php echo $result['quesno'];?>"> View Question </a> | |            
                                        <a onclick="return confirm('Are You Sure To Delete ?')" href="?q=<?php echo $q;?> &&delque=<?php echo $result['quesno']; ?>"> Remove </a>
                                    </td>

                                </tr>
                            </tbody>
                        <?php }
                    } ?>
                </table>
            </div>
        </div>
    </body>
<?php include 'inc/footer.php'; ?>
</html>


