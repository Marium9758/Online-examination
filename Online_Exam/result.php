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
        $userid = Session::get("userid");
        ?>
        <div class="container-fluid">
            <div class="container" style="min-height: 400px;background: #F8F9FB;">
                <h4 class="well" style="text-align: center;margin-top:3px;background: #9d9d9d;">Your Exam Score </h4>
                <?php
                $getData = $user->getResultData($userid);
                if ($getData) {
                    $result = $getData->fetch_assoc();
                ?>
                <table class="table">
                    <thead>
                        <tr style="font-size: 20px;">
                            <th style="padding-left: 20px;">Subject</th>
                            <th>Score</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <tr class="success">
                            <td style="padding-left: 20px;">PHP</td>
                            <td><?php echo $result['p1'];?></td>
                            <td>john@example.com</td>
                        </tr>
                        <tr class="danger">
                            <td style="padding-left: 20px;">JAVA</td>
                            <td><?php echo $result['j2'];?></td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr class="info">
                            <td style="padding-left: 20px;">C++</td>
                            <td><?php echo $result['c3'];?></td>
                            <td>july@example.com</td>
                        </tr>
                        <tr class="active">
                            <td style="padding-left: 20px;">PYTHON</td>
                            <td><?php echo $result['p4'];?></td>
                            <td>act@example.com</td>
                        </tr>
                        <tr class="warning">
                            <td style="padding-left: 20px;">OS</td>
                            <td><?php echo $result['o5'];?></td>
                            <td>bo@example.com</td>
                        </tr>
                    </tbody>
                </table>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>
