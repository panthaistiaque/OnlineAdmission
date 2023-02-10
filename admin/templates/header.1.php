<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <div class="nav-side-menu">
        <div class="brand"><a href="#"><img src="images/logo.png" width="190" alt="JNU"></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li <?php if (isset($this_page) && $this_page=="dashboard" ) echo " class=\" active\""; ?>>
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-lg fa-fw sidebar-icon"></i> Dashboard</a>
                </li>

                <li <?php if (isset($this_page) && $this_page=="students" ) echo " class=\" active\""; ?> data-toggle="collapse" data-target="#students" class="collapsed">
                    <a href="#"><i class="fa fa-graduation-cap fa-lg fa-fw sidebar-icon"></i> Students <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="students">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="meritlist" ) echo " class=\" active\""; ?>><a href="merit-list.php"><i class="fa fa-angle-double-right"></i> Merit List</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="waitinglist" ) echo " class=\" active\""; ?>><a href="waiting-list.php"><i class="fa fa-angle-double-right"></i> Wating List</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="subjectchoice" ) echo " class=\" active\""; ?>><a href="student-submitted-subject-choice.php"><i class="fa fa-angle-double-right"></i>
                            Sub.Choice Collected</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="vivapassed" ) echo " class=\" active\""; ?>><a href="viva-passed.php"><i class="fa fa-angle-double-right"></i> Viva Passed</a></li>
                </ul>
                <li <?php if (isset($this_page) && $this_page=="admissionlist" ) echo " class=\" active\""; ?>>
                    <a href="admission-list.php"><i class="fa fa-check-square fa-lg fa-fw sidebar-icon"></i> Admission</a>
                </li>
                <li <?php if (isset($this_page) && $this_page=="academic" ) echo " class=\" active\""; ?> data-toggle="collapse" data-target="#academic" class="collapsed">
                    <a href="#"><i class="fa fa-university  fa-lg fa-fw sidebar-icon"></i> Academic <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="academic">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="department" ) echo " class=\" active\""; ?>><a href="#"><i class="fa fa-angle-double-right"></i> Departments</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="unit" ) echo " class=\" active\""; ?>><a href="#"><i class="fa fa-angle-double-right"></i> Units</a></li>
                </ul>
                <?php if(isset($_SESSION['admin_role'])=='dean'){?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#dean-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="dean-approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
               <?php } ?>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#department-chairman-approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Chairman Approval<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="department-chairman-approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>

                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Dean Office <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Administrative <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Assistant Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <li <?php if (isset($this_page) && $this_page=="approval" ) echo " class=\" active\""; ?>data-toggle="collapse" data-target="#approval" class="collapsed">
                    <a href="#"><i class="fa fa-check  fa-lg fa-fw sidebar-icon"></i> Deputy  Register <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="approval">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="pending" ) echo " class=\" active\""; ?>><a href="pending-approval-list.php"><i class="fa fa-angle-double-right"></i> Pending</a></li>
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="archive" ) echo " class=\" active\""; ?>><a href="archive-approval-list.php"><i class="fa fa-angle-double-right"></i> Archive</a></li>
                </ul>
                <li <?php if (isset($sub_menu_page) && $sub_menu_page=="user" ) echo " class=\" active\""; ?>>
                    <a href="users.php"><i class="fa fa-user fa-lg fa-fw sidebar-icon"></i> System Users</a>
                </li>
                <li <?php if (isset($this_page) && $this_page=="settings" ) echo " class=\" active\""; ?> data-toggle="collapse" data-target="#settings" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i> Settings <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="settings">
                    <li <?php if (isset($sub_menu_page) && $sub_menu_page=="profile" ) echo " class=\" active\""; ?>> <a href="change-password.php"><i class="fa fa-angle-double-right"></i> Password Chnage</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Security</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Notifications</a></li>
                </ul>
                


            </ul>
        </div>
    </div>

    <div class="main">
        <div class="well">
            <h4>Admin Panel <a href="logout.php?logout=true" class="pull-right"><span class="glyphicon glyphicon-user"></span> Logout</a></h4>
        </div>