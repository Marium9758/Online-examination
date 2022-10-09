<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style=" min-height: 450px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <div class="col-sm-2"></div>
                <div class="col-sm-8" style="min-height: 300px;border: 2px solid #A9A9A9;background: #F8F8F8;margin-top: 30px;">
                    <h1 style="text-align: center;font-style: bold;margin-top: 100px;">Welcome to Control Admin Panel</h1>
                    <p style="text-align: center; font-size: 18px;">You can manage your user and exam system from here.</p>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </body>
    <?php include 'inc/footer.php'; ?>
</html>

