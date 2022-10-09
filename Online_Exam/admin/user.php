<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath . '/inc/adheader.php');
include_once ($filepath . '/../classes/User.php');
$user = new User();
?>
<link rel="stylesheet" type="text/css" href="css/user.css">
<?php 
    if(isset($_GET['dis'])){
        $dsblId   = (int)$_GET['dis'];
        $dsblUser = $user->disableUser($dsblId);
    }
    if(isset($_GET['ena'])){
        $enblId   = (int)$_GET['ena'];
        $enblUser = $user->enableUser($enblId);
    }
    if(isset($_GET['del'])){
        $delId   = (int)$_GET['del'];
        $delUser = $user->deleteUser($delId);
    }
?>
<!DOCTYPE html>
<html>
    <body style="background:#A9A9A9">
        <div class="container-fluid">
            <div class="container" style="min-height: 450px;background: #F8F9FB;margin-top: -3px;">
                <?php include 'inc/admenu.php'; ?>
                <div class="col-sm-6 title">Admin Panel - Manage User</div>
                <div class="col-sm-6 msg">
                    <?php
                        if(isset($dsblUser)){
                            echo $dsblUser;
                        }
                        if(isset($enblUser)){
                            echo $enblUser;
                        }
                        if(isset($delUser)){
                            echo $delUser;
                        }
                    ?>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr class="info">
                            <th style="text-align: center; border: 1px solid #999;">No.</th>
                            <th style="text-align: center; border: 1px solid #999;">Name</th>
                            <th style="text-align: center; border: 1px solid #999;">Username</th>
                            <th style="text-align: center; border: 1px solid #999;">Email</th>
                            <th class="danger" style="padding-left: 40px; border: 1px solid #999; width: 200px;">Action</th>
                        </tr>
                    </thead>
                    <?php 
                        $userdata = $user->getAllUser();
                        if($userdata){
                            $i = 0; 
                        while ($result = $userdata->fetch_assoc()){
                            $i++;
                    ?>
                    <tbody>
                        <tr class="writesize">
                            <th>
                            <?php 
                                if($result['status'] == 1){
                                    echo "<span class='error'>$i</span>";
                                } else {
                                    echo "<span class='success'>$i</span>";
                                }
                            ?></th>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['username'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td class="adminac" style="width: 200px;">
                                <?php if($result['status'] == '0'){?>
                                <a onclick="return confirm('Are You Sure To Disable ?')" href="?dis=<?php echo $result['userid'];?>"> Disable </a>
                                <?php } else {?>
                                <a onclick="return confirm('Are You Sure To Enable ?')" href="?ena=<?php echo $result['userid'];?>"> Enable </a>
                                <?php }?>
                                || <a onclick="return confirm('Are You Sure To Remove ?')" href="?del=<?php echo $result['userid'];?>"> Remove </a>
                            </td>
                            
                        </tr>
                    </tbody>
                        <?php } }?>
                </table>
            </div>
        </div>
    </body>
    <?php include 'inc/footer.php'; ?>
</html>


