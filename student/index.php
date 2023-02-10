
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
        <img id="profile-img" class="profile-img-card" src="images/login.png" />
        <p id="profile-name" class="profile-name-card">Welcome</p><br>
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
        <div class="login-div">
            <a href="login/login.php" name="btn-login" class="btn btn-lg btn-info btn-block btn-signin" >Returning Student login</a>
            <a href="login/new-login.php" name="btn-login" class="btn btn-lg btn-warning btn-block btn-signin" >First time login here</a>
            <a href="forgot-password.php" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>

    <?php include_once 'templates/footer.php'; ?>