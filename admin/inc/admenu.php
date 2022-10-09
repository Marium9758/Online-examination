<?php include_once "../lib/Session.php"; ?>
<nav class="navbar navbar-default" style="margin-top: 3px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">ADMIN HOME</a>
        </div>
        <?php
            if(isset($_GET['action']) && $_GET['action'] == 'logout'){
                Session::destroy();
                header("Location:adminLogin.php");
                exit();
        }
        ?>
        <a href="user.php"><button class="btn navbar-btn">Manage User</button></a>
        <a href="addques.php"><button class="btn navbar-btn">Add Question</button></a>
        <a href="qcat.php"><button class="btn navbar-btn">Question List</button></a>
        <a href="?action=logout"><button class="btn navbar-btn">Log Out</button></a>
    </div>
</nav>