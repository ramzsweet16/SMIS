<?php
    session_start();
    include "../classes/functions.php";
    if(isset($_SESSION['login_user'])){
        //header("location: main.php");
        $get_pic = new sqlfunction();
        $pic_name = array();
        $pic_name = $get_pic->show_user_pic_full_name($_SESSION['login_user'],$_SESSION['login_password']);
    }else{
        header("location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
    <link rel='stylesheet' type='text/css' href='../themes/base/jquery.ui.all.css'/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <!--link type="text/css" rel="stylesheet" href="../css/payment.css"/-->
    <link type="text/css" rel="stylesheet" href="../css/assessment1.css"/>

    <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js-ui/jquery-ui-darkhive.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <script src="../js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="../js/bootstrap-transition.js" type="text/javascript"></script>
    <script src="../js/DT_bootstrap.js" type="text/javascript"></script>
    <script src="../js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../js/tool_tip.js" type="text/javascript"></script>
    <script src="../js/scripts.js" type="text/javascript"></script>
    <script src="../js/payment.js" type="text/javascript"></script>
    <script src="../js/file_upload.js" type="text/javascript"></script>
    <script src="../js/assessmnt.js" type="text/javascript"></script>

    <link rel="icon" href='../images/sms.ico'/>
    <title>S M I S</title>

</head>
<body>
<nav>
 <div class="navbar navbar-fixed-top navbar-inverse"><!-- navbar -->
    <div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="main.php"><img src='../images/smis2.png' /></a>
        <div class="nav-collapse container-fluid">
            <ul class="nav">
                <li id="home"><a href="?page=home" target="_self" id="a_home" data-placement="bottom" data-toggle="tooltip" title="Dashboard">Dashboard</a></li>
                <li><a href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown" role="button">Teachers</a></li>
                <li><a href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown" role="button">Students</a></li>
                <li id="new-ass"><a href="?page=new-ass" id="a_new_ass" data-placement="bottom" data-toggle="tooltip" title="Create new assessment">New assessment</a></li>
                <li id="pay"><a href="?page=pay" id="a_pay" data-placement="bottom" data-toggle="tooltip" title="Payment">Payment</a></li>

            </ul>
            <ul class="nav pull-right">
                <li><a href="#">Logged in as <span id="user_full_name" class="label label-info"><?php echo $pic_name[0] ?> </span></a></li>
                <li class='dropdown'>
                    <a id="username" class="dropdown-toggle" href="#" data-target="#" data-placement="bottom" data-toggle="dropdown" role="button"><img style="width: 20px; height: 20px; border-radius: 3px;" src=
                    <?php
                         if(isset($pic_name[1])){
                             echo "../upload_pic/".$pic_name[1];
                         }else{
                             echo "../images/avatar.gif";
                         }
                    ?>
                    />
                        <b class='caret'></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i>Profile</a></li>
                        <div class="divider"></div>
                        <li><a href="../process/logout.php" id="logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </div>
 </div>
 <!-- END navbar -->
</nav>
<br>
<br>
<br>
<div class="container"><!-- main content -->
<!--div class="thumbnail" style="border: 0 none;"-->
    <?php
        if(isset($_SESSION['success_msg'])){
            echo "<div class='alert alert-info' id='alert_success' style='text-align: center;height: 20px;'>".$_SESSION['success_msg']."</div>";
            $_SESSION['success_msg'] = "";
        }
    ?>
    <?php
        if(isset($_REQUEST['page'])){
            if($_REQUEST['page']== "home"){
     ?>
          <input type="hidden" class="current_page" value="home"/>
    <?php
          include "home.php";
            }else if($_REQUEST['page']=="new-ass"){
    ?>
           <input type="hidden" class="current_page" value="new-ass"/>
    <?php
         include "assessment1.php";
            }else{
    ?>
           <input type="hidden" class="current_page" value="pay"/>
    <?php
         include "payment.php";
            }
        }else{
    ?>
           <input type="hidden" class="current_page" value="home"/>
    <?php
        include "home.php";

        }
    ?>





<!--/div-->
</div>
<!-- END main content -->

<br>
<div class="navbar"> <!-- footer -->
    <div class="navbar-inner">
        <p>
        <center><span>&copy; Copyright 2013. Developers </span><a href="#">icotp-ict section atis Group 4</a></center>
    </div>
</div>
<!-- END footer -->
</body>
</html>