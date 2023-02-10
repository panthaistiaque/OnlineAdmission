<?php $page_title = "Subject-Choice"; ?>
<?php
require_once 'config/session.php';
require_once 'get-data.php';
$exam_roll=$_SESSION['user_session'];
$result = getResult($exam_roll);
$info = getStudentInfo();

if( !empty( $_POST ) ){
  
  
	try{
		$data = submitChoice( $_POST );
		
		if( isset($data['success']) && $data['success']){
            $_SESSION['success'] = 'Choice submitted Successfully!';
            header("Refresh:0");
		} else {
			$_SESSION['error'] = 'Choice submit failed, try again.';
		}
	} catch (Exception $e) {
		$_SESSION['error'] = $e->getMessage();
	}
}
?>
<?php include_once 'templates/header.php'; ?>

<br>
<div class="col-lg-8 col-sm-8 col-xs-8 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2 alert bg-primary text-center"
  style="margin-bottom:0px!important">
  <table class="table table-bordered table-stripped">
    <thead>
      <tr>
        <th class="text-center" colspan="2"style="background: #5583ab;"><i class="glyphicon glyphicon-info-sign"></i>Admission Status</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <td  style="width:50%" class="text-right">Total Score</td>
      <td class="text-left">
        <?php echo $result['total_score']; ?>
      </td>
    </tr>
    <tr>
      <td class="text-right">Merit Position</td>
      <td class="text-left">
        <?php echo $result['merit_position']; ?>
      </td>
    </tr>
    <tr>
      <td class="text-right">Unit</td>
      <td class="text-left">
        <?php echo $result['unit']; ?>
      </td>
    </tr>
    <tr>
      <td class="text-right">Allocated Subject</td>
      <td class="text-left">
      <?php echo $result['department']; ?>
      </td>
    </tr>
    <tr>
      <td class="text-right">Dean/Director</td>
      <td class="text-left">
         <?= isset($info['dean_approv']) ? $info['dean_approv'] : 'PENDING' ?>
      </td>
    </tr>
    <tr>
      <td class="text-right">Departmental chairman Approval</td>
      <td class="text-left">
         <?= isset($info['hod_approv']) ? $info['hod_approv'] : 'PENDING' ?> 
      </td>
    </tr>
    <tr>
      <td class="text-right">Departmental Representatives  of dean office Approval</td>
      <td class="text-left">
      <?= isset($info['dr_approv']) ? $info['dr_approv'] : 'PENDING' ?> 
      </td>
    </tr>
    <tr>
      <td class="text-right">Administrative Officer(Education) Approval</td>
      <td class="text-left">
      <?= isset($info['admin_off_approv']) ? $info['admin_off_approv'] : 'PENDING' ?> 
      </td>
    </tr>
    <tr>
      <td class="text-right">Assistant Register (Education) Approval</td>
      <td class="text-left">
      <?= isset($info['	assistant_register_approv']) ? $info['	assistant_register_approv'] : 'PENDING' ?> 
      </td>
    </tr>
    <tr>
      <td class="text-right">Deputy  Register (Education) Approval</td>
      <td class="text-left">
      <?= isset($info['deputy_registrar_approv']) ? $info['deputy_registrar_approv'] : 'PENDING' ?> 
      </td>
    </tr>
  </tbody>
  </table>
</div>


<?php include_once 'templates/footer.php'; ?>