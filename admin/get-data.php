<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
require_once('config/dbconfig.php');

function getPendingRequest(){

    global $conn;
    $admin_role= $_SESSION['admin_role'];
    if(!$admin_role == 'admin'){
        
        $data = [];
        $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll";
        if ( $result = mysqli_query($conn, $query) ){
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        } 
        return $data;
    }else{
        $unit= $_SESSION['admin_unit'];
        $get=getRole();
        $col= $get[0];
        $col2=$get[1];
        $NUL=$get[2];
        $data = []; //TODO::need to check year
        $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll where admission_result.unit='$unit' AND $NUL IS NULL AND $col IS NOT NULL";
        if ( $result = mysqli_query($conn, $query) ){
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        } 
        return $data;
    }
    
}
function getAdminPendingRequest(){
    global $conn;
    $admin_role= $_SESSION['admin_role'];
    if($admin_role == 'admin'){
        $data = [];
        $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll";
        if ( $result = mysqli_query($conn, $query) ){
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        } 
        return $data;
    }
}
function getAdminArchiveRequest(){
    global $conn;
    $admin_role= $_SESSION['admin_role'];
    if($admin_role == 'admin'){
        $data = [];
        $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll";
        if ( $result = mysqli_query($conn, $query) ){
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        } 
        return $data;
    }
}
function getArchiveRequest(){
    global $conn;
    $admin_role= $_SESSION['admin_role'];
    if(!$admin_role == 'admin'){
        $data = [];
        $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll";
        if ( $result = mysqli_query($conn, $query) ){
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
        } 
        return $data;
    }
   else{
    $get=getRole();
    $col= $get[0];
    $col2=$get[1];
    $col3=$get[2];
    $unit= $_SESSION['admin_unit'];
    $data = [];
    $query = "SELECT student_info.*,academic_info.ssc_roll,admission_result.unit,admission_result.merit_position,admission_result.test_score,admission_result.total_score,admission_result.year,subject_allocation.department FROm student_info LEFT JOIN academic_info on student_info.exam_roll=academic_info.exam_roll LEFT JOIN admission_result on student_info.exam_roll=admission_result.exam_roll LEFT JOIN subject_allocation on student_info.exam_roll=subject_allocation.exam_roll where admission_result.unit='$unit' AND $col3 ='YES'";
    if ( $result = mysqli_query($conn, $query) ){
        while($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
    } 
    return $data;
  }
}
function getUsers(){
    global $conn;
	$data = [];
	$query = "SELECT * FROM user_admin";
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
	} 
    return $data;
}
function getRole(){
    $cols=[];
    $i=$_SESSION['admin_role'];
    switch ($i) {
        case "dean":
        return $cols= array('0'=>'dean_approv','1'=>'dean_approv_by','2'=>'dean_approv');
            break;
        case "chairman":
        return $cols= array('0'=>'dean_approv','1'=>'hod_approv_by','2'=>'hod_approv');
            break;
        case "rep_dean":
        return $cols= array('0'=>'hod_approv','1'=>'dr_approv_by','2'=>'dr_approv');
            break;
        case "admin_office":
        return $cols= array('0'=>'dr_approv','1'=>'admin_off_approv_by','2'=>'admin_off_approv');
            break;
        case "asst_register":
        return $cols= array('0'=>'admin_off_approv','1'=>'assistant_register_approv_by','2'=>'assistant_register_approv');
            break;
        case "deuty_register":
        return $cols= array('0'=>'assistant_register_approv','1'=>'deputy_registrar_approv_by','2'=>'deputy_registrar_approv');
            break;

    }

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
    
function getStudentInfo($exam_roll){
	global $conn;
	$data = [];
	$query = "SELECT * FROM student_info s left join gender g on g.id =  s.gender WHERE exam_roll='$exam_roll'" ;
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}
function getAcademicInfo($exam_roll){
	global $conn;
	$data = [];
	$query = "SELECT * FROM academic_info WHERE exam_roll='$exam_roll'";
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}
function getResult($exam_roll){
	global $conn;
	$data = [];
	$query = "SELECT admission_result.*,subject_allocation.department FROM admission_result left join subject_allocation on subject_allocation.exam_roll=admission_result.exam_roll WHERE admission_result.exam_roll='$exam_roll'";
	if ( $result = mysqli_query($conn, $query) ){
		while($row = mysqli_fetch_assoc($result)) {
			$data= $row;
		}
	} 
	return $data;
}

function getCount($unit){
    global $conn;
    $year=date('Y');
	$query = "SELECT COUNT(st.exam_roll) AS total_student FROM admission_result ds LEFT JOIN student_info st ON st.exam_roll = ds.exam_roll WHERE ds.unit ='$unit' AND ds.year='$year'";
	if ( $result = mysqli_query($conn, $query) ){
		$total_student = mysqli_fetch_assoc($result);
    } 
    $query2 = "SELECT COUNT(st.exam_roll) AS admission_done FROM admission_result ds LEFT JOIN student_info st ON st.exam_roll = ds.exam_roll WHERE st.admission_status = 1 AND ds.year='$year' AND ds.unit ='$unit'";
	if ( $result = mysqli_query($conn, $query2) ){
			$admission_done= mysqli_fetch_assoc($result);
		
	} 
	return $count=array_merge($total_student,$admission_done);
}

?>