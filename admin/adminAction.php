<?php
require_once('config/dbconfig.php');
session_start();
if(isset($_REQUEST['exam_roll'])) {
    $admin_role=$_REQUEST['admin_role'];
    $admin=$_SESSION["admin_name"];
    $action_type=$_REQUEST['action_type'];
    $get=getRole($admin_role);
    $col= $get[0];
    $col2=$get[1];
    if($action_type=='approve'){
        $sql = "UPDATE student_info SET $col ='YES', $col2 ='$admin' WHERE exam_roll='".$_REQUEST['exam_roll']."'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        //TODO Prevent multiple submit same data other wise class roll will be increment
        //TODO Send NOtice for payment
        //TODO view notice in student dashboard
        if($resultset) {
            echo "Approved Success";
            }
            else{
                echo "Failed to approve";
            }
        }
    else{
        $sql = "UPDATE student_info SET $col =NULL, $col2 ='$admin' WHERE exam_roll='".$_REQUEST['exam_roll']."'";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        if($resultset) {
            echo "Approved Success";
            }
            else{
                echo "Failed to approve";
            }
        }
    }
   function getRole($admin_role){
        $cols=[];
        $i=$admin_role;
        switch ($i) {
            case "dean":
            return $cols= array('0'=>'dean_approv','1'=>'dean_approv_by');
                break;
            case "chairman":
            return $cols= array('0'=>'hod_approv','1'=>'hod_approv_by');
                break;
            case "rep_dean":
            return $cols= array('0'=>'dr_approv','1'=>'dr_approv_by');
                break;
            case "admin_office":
            return $cols= array('0'=>'admin_off_approv','1'=>'admin_off_approv_by');
                break;
            case "asst_register":
            return $cols= array('0'=>'assistant_register_approv','1'=>'assistant_register_approv_by');
                break;
            case "deuty_register":
            return $cols= array('0'=>'deputy_registrar_approv','1'=>'deputy_registrar_approv_by');
                break;

        }

    }
    
?>
