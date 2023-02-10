<?php $page_title = "Home"; ?>
<?php
session_start();
require_once("login-function.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('dashboard.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['username']);
	$upass = strip_tags($_POST['password']);

	if($login->doLogin($uname,$upass))
	{
		$login->redirect('dashboard.php');
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
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- our custom CSS -->
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <br>
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="images/logo.png" />
        <p id="profile-name" class="profile-name-card">Admin Login</p><br>
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
        <div class="form-group">
            <input type="text" name="username"id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
            <input type="password" id="inputPassword" name="password"class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="btn-login" class="btn btn-lg btn-primary btn-block btn-signin" >Sign in</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div>
