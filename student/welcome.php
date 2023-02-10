
            <?php $page_title = "Student Login"; ?>
<?php

require_once("login-function.php");
session_start();
if(!isset($_SESSION["welcome"])){
header("Location: ../login.php");
exit(); }

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
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <br>
    <div class="card card-container"style="margin-top: 15%;">
    <img id="profile-img" class="profile-img-card" src="images/login.png" />
    <div class="alert alert-success">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                Welcome! Your Password Has been chnaged successfully <a href="login/login.php">Login here</a>
            </div>
    </div>

    <?php include_once 'templates/footer.php'; ?>