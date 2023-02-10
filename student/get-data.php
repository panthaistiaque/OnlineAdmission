<?php
require_once('config/dbconfig.php');
function getStudentInfo(){
	global $conn;
	$data = [];
	$query = "SELECT * FROM student_info s left join gender g on g.id =  s.gender WHERE exam_roll=".$_SESSION["user_session"];
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}
function getAcademicInfo(){
	global $conn;
	$data = [];
	$query = "SELECT * FROM academic_info WHERE exam_roll=".$_SESSION["user_session"];
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}
function getResult(){
	global $conn;
	$data = [];
	$query = "SELECT admission_result.*,subject_allocation.department FROM admission_result left join subject_allocation on subject_allocation.exam_roll=admission_result.exam_roll WHERE admission_result.exam_roll=".$_SESSION["user_session"];
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}
function getOTP($exam_roll){
    global $conn;
    $data = [];
    $query = "SELECT * FROM user_student WHERE exam_roll=".$exam_roll;
    if ( $result = mysqli_query($conn, $query) ){
        while($row = mysqli_fetch_assoc($result)) {
            $data= $row;
        }
    } 
    return $data;
}
function updateInfo( array $data){
    global $conn;
    if( !empty( $data)){
        $full_name = mysqli_real_escape_string( $conn, trim( $data['full_name'] ) );
        $full_name_bn = mysqli_real_escape_string( $conn, trim( $data['full_name_bn'] ) );
        $f_name = mysqli_real_escape_string( $conn, trim( $data['f_name'] ) );
        $f_name_bn = mysqli_real_escape_string( $conn, trim( $data['f_name_bn'] ) );
        $m_name = mysqli_real_escape_string( $conn, trim( $data['m_name'] ) );
        $m_name_bn = mysqli_real_escape_string( $conn, trim( $data['m_name_bn'] ) );
        $guardian_name = mysqli_real_escape_string( $conn, trim( $data['guardian_name'] ) );
        $guardian_name_bn = mysqli_real_escape_string ( $conn, trim ( $data['guardian_name_bn'] ) );
        $gender = mysqli_real_escape_string ( $conn, trim ( $data['gender'] ) );
        $religion = mysqli_real_escape_string ( $conn, trim ( $data['religion'] ) );
        $date_of_birth = mysqli_real_escape_string ( $conn, trim ( $data['date_of_birth'] ) );
        $nationality = mysqli_real_escape_string ( $conn, trim ( $data['nationality'] ) );
        $permanent_house = mysqli_real_escape_string ( $conn, trim ( $data['permanent_house'] ) );
        $permanent_vill = mysqli_real_escape_string ( $conn, trim ( $data['permanent_vill'] ) );
        $permanent_post = mysqli_real_escape_string ( $conn, trim ( $data['permanent_post'] ) );
        $permanent_police_s = mysqli_real_escape_string ( $conn, trim ( $data['permanent_police_s'] ) );
        $permanent_dist = mysqli_real_escape_string ( $conn, trim ( $data['permanent_dist'] ) );
        $permanent_country = mysqli_real_escape_string ( $conn, trim ( $data['permanent_country'] ) );
        $present_house = mysqli_real_escape_string ( $conn, trim ( $data['present_house'] ) );
        $present_vill = mysqli_real_escape_string ( $conn, trim ( $data['present_vill'] ) );
        $present_post = mysqli_real_escape_string ( $conn, trim ( $data['present_post'] ) );
        $present_police_s = mysqli_real_escape_string ( $conn, trim ( $data['present_police_s'] ) );
        $present_dist = mysqli_real_escape_string ( $conn, trim ( $data['present_dist'] ) );
        $present_country = mysqli_real_escape_string ( $conn, trim ( $data['present_country'] ) );
        $g_occupation = mysqli_real_escape_string ( $conn, trim ( $data['g_occupation'] ) );
        $g_address = mysqli_real_escape_string ( $conn, trim ( $data['g_address'] ) );
        $g_mobile = mysqli_real_escape_string ( $conn, trim ( $data['g_mobile'] ) );
        $g_monthly_income = mysqli_real_escape_string ( $conn, trim ( $data['g_monthly_income'] ) );

        $study_gap_cause = mysqli_real_escape_string ( $conn, trim ( $data['study_gap_cause'] ) );
        $admitted_institution = mysqli_real_escape_string ( $conn, trim ( $data['admitted_institution'] ) );
        $admitted_department = mysqli_real_escape_string ( $conn, trim ( $data['admitted_department'] ) );
        $admitted_year = mysqli_real_escape_string ( $conn, trim ( $data['admitted_year'] ) );
        $admitted_institution_addres = mysqli_real_escape_string ( $conn, trim ( $data['admitted_institution_addres'] ) );
        $previous_ju_department = mysqli_real_escape_string ( $conn, trim ( $data['previous_ju_department'] ) );
        $previous_ju_year = mysqli_real_escape_string ( $conn, trim ( $data['previous_ju_year'] ) );
        $previous_ju_hall = mysqli_real_escape_string ( $conn, trim ( $data['previous_ju_hall'] ) );
        $local_guardian_name = mysqli_real_escape_string ( $conn, trim ( $data['local_guardian_name'] ) );
        $local_guardian_address = mysqli_real_escape_string ( $conn, trim ( $data['local_guardian_address'] ) );



            $query = "UPDATE `student_info` SET 
                 `full_name` = '$full_name',
                 `full_name_bn`  ='$full_name_bn',
                 `f_name`='$f_name',
                 `f_name_bn`='$f_name_bn',
                 `m_name` ='$m_name',
                 `m_name_bn` = '$m_name_bn',
                 `guardian_name` = '$guardian_name',
                 `guardian_name_bn` = '$guardian_name_bn', 
                 `gender` = '$gender',
                 `religion` = '$religion', 
                 `date_of_birth` = '$date_of_birth',
                 `nationality`  ='$nationality',
                 `permanent_house`='$permanent_house',
                 `permanent_vill`='$permanent_vill',
                 `permanent_post` ='$permanent_post',
                 `permanent_police_s` = '$permanent_police_s',
                 `permanent_dist` = '$permanent_dist',
                 `permanent_country` = '$permanent_country', 
                 `present_house` = '$present_house',
                 `present_vill` = '$present_vill',
                 `present_post` = '$present_post', 
                 `present_police_s` = '$present_police_s', 
                 `present_dist` = '$present_dist', 
                 `present_country` = '$present_country', 
                 `g_occupation` = '$g_occupation', 
                 `g_address` = '$g_address', 
                 `g_mobile` = '$g_mobile', 
                 `g_monthly_income` = '$g_monthly_income',
                  `study_gap_cause` = '$study_gap_cause',
                  `admitted_institution` = '$admitted_institution',
                  `admitted_department` = '$admitted_department',
                  `admitted_year` = '$admitted_year',
                  `admitted_institution_addres` = '$admitted_institution_addres',
                  `previous_ju_department` = '$previous_ju_department',
                  `previous_ju_year` = '$previous_ju_year',
                  `previous_ju_hall` = '$previous_ju_hall',
                  `local_guardian_name` = '$local_guardian_name',
                  `local_guardian_address` = '$local_guardian_address',
                 `updated_at`  = CURRENT_TIMESTAMP
                 WHERE `exam_roll` =".$_SESSION["user_session"];

        if(!mysqli_query($conn, $query)){
            throw new Exception(  mysqli_error($conn) );
        }
        return [
            'success' => true,
            'message' => 'Info Updated Successfully.'
        ];
    }else{
        throw new Exception( "Please check, some of the required fileds missing" );
    }
} 
function submitChoice( array $data){
    global $conn;
    $department = $_POST['department'];
    $order = $_POST['order'];
    $exam_roll=$_SESSION["user_session"];

        if(count(array_unique($order))== count($order)){
            foreach ($department  as $i => $departments) {

                $exam_roll  =  mysqli_real_escape_string( $conn, trim( $exam_roll) );
                $eligible_subject_id =  mysqli_real_escape_string( $conn, trim( $departments ) );
                $choice_order    =  mysqli_real_escape_string( $conn, trim( $order[$i] ) );
                        $query = "INSERT INTO `choice_list`(`exam_roll`, `eligible_subject_id`, `choice_order`) VALUES ($exam_roll,$eligible_subject_id,$choice_order)";
                if(!mysqli_query($conn, $query)){
                 throw new Exception(  mysqli_error($conn) );
             }
            
            }
               
            return [
                'success' => true,
                'message' => 'Info Updated Successfully.'
            ];
        }
    else{
        throw new Exception( "Same order set for more then one subject! try again" );
    }     
}
    



?>