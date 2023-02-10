<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $page_title; ?>
    </title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- our custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

</head>

<body>

    <div class="nav-side-menu">
        <div class="brand"><a href="#"><img src="images/logo.png" width="190" alt="JNU"></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li <?=echoSelectedClassIfRequestMatches("dashboard")?>>
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-lg fa-fw sidebar-icon"></i> Dashboard</a>
                </li>
                <?php if(isset($_SESSION['admin_role']) && $_SESSION['admin_role'] =='dean'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#dean-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="dean-approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
               <?php } ?>

                <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='chairman'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#department-chairman-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Chairman Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="department-chairman-approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <?php } ?>

                 <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='rep_dean'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Office <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <?php } ?>

                <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='admin_office'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Administrative <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <?php } ?>

                 <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='asst_register'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Assistant Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
               <?php } ?>

                 <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='deuty_register'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Deputy  Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <?php } ?>

                 <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='admin'){?>
                <li <?=echoSelectedClassIfRequestMatches("dean-approval-list")?><?=echoSelectedClassIfRequestMatches("dean-approval-archive")?> data-toggle="collapse" data-target="#dean-approval" class="collapsed">
                <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="dean-approval">
                    <li <?=echoSelectedClassIfRequestMatches("dean-approval-list")?>><a href="dean-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("dean-approval-archive")?>><a href="dean-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <li <?=echoSelectedClassIfRequestMatches("chairman-approval-list")?><?=echoSelectedClassIfRequestMatches("chairman-approval-archive")?>data-toggle="collapse" data-target="#department-chairman-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Chairman Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="department-chairman-approval">
                    <li <?=echoSelectedClassIfRequestMatches("chairman-approval-list")?>><a href="chairman-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("chairman-approval-archive")?>><a href="chairman-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
 

                 
                <li <?=echoSelectedClassIfRequestMatches("dean-office-approval-list")?><?=echoSelectedClassIfRequestMatches("dean-office-approval-archive")?>data-toggle="collapse" data-target="#dean-office-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Office <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="dean-office-approval">
                    <li <?=echoSelectedClassIfRequestMatches("dean-office-approval-list")?>><a href="dean-office-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("dean-office-approval-archive")?>><a href="dean-office-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
        

               
                <li <?=echoSelectedClassIfRequestMatches("admin-approval-list")?><?=echoSelectedClassIfRequestMatches("admin-approval-archive")?>data-toggle="collapse" data-target="#admin-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Administrative <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="admin-approval">
                    <li <?=echoSelectedClassIfRequestMatches("admin-approval-list")?>><a href="admin-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("admin-approval-archive")?>><a href="admin-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>


               
                <li <?=echoSelectedClassIfRequestMatches("ast-regi-approval-list")?><?=echoSelectedClassIfRequestMatches("ast-regi-approval-archive")?>data-toggle="collapse" data-target="#ast-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Assistant Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="ast-approval">
                    <li <?=echoSelectedClassIfRequestMatches("ast-regi-approval-list")?>><a href="ast-regi-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("ast-regi-approval-archive")?>><a href="ast-regi-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>


                
                <li <?=echoSelectedClassIfRequestMatches("regi-approval-list")?><?=echoSelectedClassIfRequestMatches("regi-approval-archive")?>data-toggle="collapse" data-target="#regi-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Deputy  Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="regi-approval">
                    <li <?=echoSelectedClassIfRequestMatches("regi-approval-list")?>><a href="regi-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?=echoSelectedClassIfRequestMatches("regi-approval-archive")?>><a href="regi-approval-archive.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
   

                <?php } ?>
                
                <?php if(isset($_SESSION['admin_role'])&&  $_SESSION['admin_role']=='admin'){?>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="user" ) echo " class=\" active\""; ?>>
                    <a href="users.php"><i class="fa fa-user fa-lg fa-fw sidebar-icon"></i> System Users</a>
                </li>
                <?php } ?>
                <li <?php if (isset($this_page) && $this_page=="settings" ) echo " class=\" active\""; ?> data-toggle="collapse" data-target="#settings" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i> Settings <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="settings">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="profile" ) echo " class=\" active\""; ?>> <a href="change-password.php"><i class="fa fa-angle-double-right"></i> Password Chnage</a></li>
                </ul>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="well">
            <h4><?php echo $_SESSION['admin_name']?>  <a href="logout.php?logout=true" class="pull-right"><span class="glyphicon glyphicon-user"></span> Logout</a></h4>
        </div>