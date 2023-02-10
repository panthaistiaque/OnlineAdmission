<?php $page_title = "PSystem User List"; ?>
<?php $this_page = "settings"; ?>
<?php $sub_menu_page = "profile"; ?>
<?php 
require_once 'registration.php';

?>
<?php
require_once("login-function.php");

$data = new USER();
if(isset($_POST['btn-change']))
{
	$id = strip_tags($_SESSION["admin_id"]);
	$password = strip_tags($_POST['txt_password']);
   
	if($data->changePass($id,$password)){
        $_SESSION['success'] = 'Password Chnaged Successfully!';
        header("Refresh:2");
    } else {
        $_SESSION['error'] = 'Info Update failed, try again.';
    }	
}
?>
<?php include_once 'templates/header.php'; ?>

<div class="card card-container">
        <p id="profile-name" class="profile-name-card">Chnage Password</p><br>
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
      <?php include_once 'config/message.php'; ?>
        </div>
        <form class="form-signin" method="post" id="login-form">
            <input type="password" id="inputPassword"name="txt_password" class="form-control" placeholder="New password" required>
            <button type="submit" name="btn-change" class="btn btn-lg btn-primary btn-block btn-signin" >Submit</button>
        <!-- /form -->
        </form>
    </div>
<?php include_once 'templates/footer.php'; ?>