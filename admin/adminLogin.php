<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/loginheader.php');
    include_once "../classes/Admin.php";
    $ad = new Admin();
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $adminData = $ad->getAdminData($_POST);
    }
?>

<body style="background:#A9A9A9;">
    <div class="container-fluid">
        <div class="container" style=" height: 380px;background: #F8F9FB"><h3 style="text-align: center"> Admin Login</h3><hr/>
            <div class="admin_login">
                <div class="col-lg-3"></div>
                <div class="col-lg-5">
                    <form class="form-horizontal" action="" role="form" method="post">
                        <div class="form-group" style="margin-top:50px;">
                            <label class="control-label col-sm-3" for="email">User Name :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="adminUser" placeholder="Enter Username" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="password">Password :</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="adminPass" placeholder="Enter password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-default" name="submit">Log in</button>
                                <span style="margin-left: 20px;"><input type="checkbox"> Remember me</span>
                            </div>
                        </div>
                        <span>
                            <?php 
                                if(isset($adminData)){
                                    echo $adminData ;
                                }
                            ?>
                        </span>
                    </form>
                </div>
                
                <div class="col-lg-6"><h4 style="line-height: 30px; text-align: center;height: 30px; width: 60px;border: 1px solid  #245580;">
                        <a href="../index.php" style="text-decoration: none;display: block;">Back</a>
                    </h4></div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php';?>
</body>
