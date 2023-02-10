<?php $page_title = "Student Login"; ?>
<?php
session_start();
require_once("../login-function.php");
$verify = new USER();

require_once '../get-data.php';
$exam_roll=strip_tags($_GET['exam_roll']);
$otp_code = getOTP($exam_roll);


if(isset($_POST['btn-verify']))
{
	$code = strip_tags($_POST['code']);
    $exam_roll =strip_tags($_GET['exam_roll']);
	if($verify->verify($code,$exam_roll))
	{
		$verify->redirect('chnage-password.php');
	}
	else
	{
		$error = "Wrong Verification Code !";
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
        <p id="profile-name" class="profile-name-card">Mobile No Verification</p>
        <p id="profile-name" class="profile-name-card">(we sent a code in your phone)<br><?php echo $otp_code['otp']; ?></p><br>
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
            <input type="password" id="inputPassword"name="code" class="form-control" placeholder="5-Digit Code" required>
            <button type="submit" name="btn-verify" class="btn btn-lg btn-primary btn-block btn-signin" >Verify</button>
        <!-- /form -->
        </form>
    </div>

    <?php include_once '../templates/footer.php'; ?>