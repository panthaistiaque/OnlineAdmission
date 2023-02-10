
            <?php $page_title = "Student Login"; ?>
<?php

require_once("login-function.php");
require_once 'config/session.php';

require_once 'get-data.php';
$exam_roll=$_SESSION['user_session'];
$result = getResult($exam_roll);
$info = getStudentInfo();
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
<?php include_once 'templates/header.php'; ?>
    <br>
    <div class="card card-container"style="max-width:600px;margin-top:0px">
    <div class="header">
   <h3 class="text-center">WELCOME</h3>
   <h4 class="text-center"> <?php echo $info['full_name']; ?></h4>
</div>
        <div class="card card-container"style="margin-top: 0px;padding:25px;">
    <p id="profile-name" class="profile-name-card">Admission Score - <?php echo $result['total_score']; ?></p>
    </div>
    <div class="card card-container"style="margin-top: 0px;padding:25px;">
    <p id="profile-name" class="profile-name-card">Merit Position - <?php echo $result['merit_position']; ?></p>
    </div>
    <div class="card card-container"style="margin-top: 0px;margin-bottom: 0px;padding:25px;">
    <p id="profile-name" class="profile-name-card">Unit - <?php echo $result['unit']; ?></p>
    </div>
    <?php include_once 'templates/footer.php'; ?>