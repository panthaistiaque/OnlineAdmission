<?php $page_title = "Student Login"; ?>
<?php

require_once("../login-function.php");
$otp = new USER();


if(isset($_POST['btn-register']))
{
	$exam_roll = strip_tags($_POST['exam_roll']);
	$bill_id = strip_tags($_POST['bill_id']);

	if($otp->otp($exam_roll,$bill_id))
	{
		$otp->redirect('otp.php?exam_roll='.urlencode($exam_roll));
	}
	else
	{
		$error = "Wrong Information !";
	}	
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
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- our custom CSS -->
    <link rel="stylesheet" href="../css/login.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <br>
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="../images/login.png" />
        <p id="profile-name" class="profile-name-card">Student Login</p><br>
        <div id="error">
            <?php
          if(isset($error))
          {
              ?>
            <div class="alert alert-danger">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                <?php echo $error; ?> !
            </div>
            <?php
          }
      ?>
        </div>
        <form class="form-signin" method="post" id="login-form">
            <input type="text" id="inputEmail" name="exam_roll"class="form-control" placeholder="Exam roll" required autofocus>
            <input type="text" id="inputPassword"name="bill_id" class="form-control" placeholder="Bill No" required>
            <button type="submit" name="btn-register" class="btn btn-lg btn-primary btn-block btn-signin" >Submit</button>
        <!-- /form -->
        </form>
    </div>

    <?php include_once '../templates/footer.php'; ?>