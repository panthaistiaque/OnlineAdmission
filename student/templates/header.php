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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  
    <!-- our custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>
<body>

<nav class="navbar navbar-default" style="border-radius:0px;padding:10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" style="padding:0px" href="#"><img class="img-responsive" src="images/logo.png" width="160" height="50" alt="JNU"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li <?=echoSelectedClassIfRequestMatches("dashboard")?>><a href="dashboard.php">DASHBOARD</a></li>
        <li <?=echoSelectedClassIfRequestMatches("personal-info")?>><a href="personal-info.php">PROFILE</a></li>
        <li <?=echoSelectedClassIfRequestMatches("update-info")?>><a href="update-info.php">UPDATE PROFILE</a></li> 
        <li <?=echoSelectedClassIfRequestMatches("subject-preference")?>><a href="subject-preference.php">SUBJECT CHOICE</a></li> 
        <li <?=echoSelectedClassIfRequestMatches("admission-status")?>><a href="admission-status.php">ADMISSION STATUS</a></li>
        <li <?=echoSelectedClassIfRequestMatches("logout")?>> <a href="logout.php?logout=true"><i class="glyphicon glyphicon-user"></i>&nbsp;LOGOUT</a></li> 
      </ul>
    </div>
  </div>
</nav>
    <!-- container -->
    <div class="container">
 
       