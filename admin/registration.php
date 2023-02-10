<?php
require_once('config/dbconfig.php');
session_start();
if(isset($_POST['registrationFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['username'])&& !empty($_POST['role']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['unit'])){
    global $conn;
    // Submitted form data
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $mobile     = $_POST['mobile'];
    $unit       = $_POST['unit'];
    $username   = $_POST['username'];
    $role       = $_POST['role'];
    $password   = "1234";
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    /*
     * Send  to DB
     */
    $sql = "INSERT INTO user_admin (name,email,mobile,username,password,unit,role) VALUES('$name ', '$email','$mobile','$username','$new_password','$unit','$role')";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

    if($resultset){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}elseif(isset($_POST['editFrmSubmit']) && !empty($_POST['edit_name']) && !empty($_POST['edit_mobile']) && !empty($_POST['edit_username'])&& !empty($_POST['edit_role']) && !empty($_POST['edit_email']) && (!filter_var($_POST['edit_email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['edit_unit'])) {
    global $conn;
    // Submitted form data
    $name       = $_POST['edit_name'];
    $email      = $_POST['edit_email'];
    $mobile     = $_POST['edit_mobile'];
    $unit       = $_POST['edit_unit'];
    $username   = $_POST['edit_username'];
    $role       = $_POST['edit_role'];
    $password   = "1234";
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    $id=$_POST['edit_id'];
    /*
     * Send  to DB
     */
    $sql = "UPDATE user_admin SET name='$name',email='$email',mobile='$mobile',username='$username',password='$new_password',unit='$unit',role='$role' WHERE id='$id' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

    if($resultset){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    echo $status;die;
}elseif(isset($_REQUEST['user_id']) && isset($_REQUEST['status'])) {
    global $conn;
    if($_REQUEST['status'] == 1){
        $status= 0;
    }else{
        $status = 1;
    }
    $sql = "UPDATE user_admin SET active ='$status' WHERE id='".$_REQUEST['user_id']."'";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    if($resultset) {
        echo "Status has been Changed";
    }
    else{
            echo "Failed to Change Status";
    }
}