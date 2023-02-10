<?php $page_title = "Student Login"; ?>
<?php
session_start();
if(!isset($_SESSION["user_verify"])){
    header("Location: new-login.php");
    exit(); }
require_once("../login-function.php");
$chnage = new USER();


if(isset($_POST['btn-change']))
{
	$exam_roll = strip_tags($_SESSION["user_verify"]);
	$password = strip_tags($_POST['txt_password']);

	if($chnage->changePass($exam_roll,$password))
	{
        $chnage->redirect('../welcome.php');
	}
	else
	{
		$error = "Something Wrong !";
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
        <p id="profile-name" class="profile-name-card">Student Login<br>(Change Password)</p><br>
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
            <input type="password" id="inputPassword"name="txt_password" class="form-control" placeholder="New password" required>
            <button type="submit" name="btn-change" class="btn btn-lg btn-primary btn-block btn-signin" >Submit</button>
        <!-- /form -->
        </form>
    </div>

    <?php include_once '../templates/footer.php'; ?>