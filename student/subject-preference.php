<?php $page_title = "Subject-Choice"; ?>
<?php
require_once 'config/session.php';
require_once 'get-data.php';
$result = getResult();
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
<div class="col-lg-8 col-sm-8 col-xs-8 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2 alert bg-primary text-center"style="margin-bottom:0px!important">
<table class="table table-bordered table-stripped">
            <tr>
                <td>Total Score</td>
                <td><?php echo $result['total_score']; ?></td>
                <td>Merit Position</td>
                <td><?php echo $result['merit_position']; ?></td>
                <td>Unit</td>
                <td><?php echo $result['unit']; ?></td>
            </tr>
        </table>
<i class="glyphicon glyphicon-info-sign"></i> Once you submited preferences it can not be undone
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2 col-sm-offset-2 col-xs-offset-2 " style="background-color:#eee3">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-sm-offset-3 col-xs-offset-3">
<?php include_once 'config/message.php'; ?>
<form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="info-form" method="post"  id="choice-form">

    <h4 class="form-signin-heading text-center"><i class="glyphicon glyphicon-book">&nbsp;</i>Subject Choice</h4>
    <hr />


     <table class="table table-bordered">
    <thead>
      <tr>
        <th>Subject List</th>
        <th>Choice order</th>
      </tr>
    </thead>
    <tbody>
	  <?php
		include('config/dbconfig.php');
		$result_2 = $conn->query("SELECT exam_roll, eligible_subject_id,department,choice_order FROM choice_list e left join department_info d on d.id =  e.eligible_subject_id where exam_roll =".$_SESSION['user_session']);
		$row_num_2 =$result_2->num_rows;
		if($row_num_2>0){

			for($i=0; $row = mysqli_fetch_array($result_2, MYSQLI_ASSOC); $i++){
				echo '<tr><td>';
				echo $row['department'];
				echo '</td><td>
					<select disabled class="form-control" name="order[]">';
						echo'<option>'.$row['choice_order'].'</option>';
					echo '</select>
					</td></tr>';
			}
		}else{
		$result  = $conn->query("SELECT exam_roll, department_id,department FROM eligible_subject e left join department_info d on d.id =  e.department_id where exam_roll =".$_SESSION['user_session']);
		$row_num=$result->num_rows;
		for($i=0; $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $i++){
      echo '<tr><td>';
      echo ' <input type="hidden"name="department[]"value="'.$row['department_id'].'">';
			echo $row['department'];
			echo '</td><td>
				<select class="form-control" name="order[]">';
				for($n=1;  $row_num>=$n; $n++){
					echo'<option>'.$n.'</option>';
				}
				echo '</select>
				</td></tr>';
    }
  }
	  ?>
    </tbody>
  </table>
    <div class="row">
    <?php
		if($row_num_2<1){
        echo '<button type="submit" class="btn btn-block btn-success">
            <i class="glyphicon glyphicon-log-in"></i> &nbsp; SUBMIT
        </button>';
		}
	?>
    </div>
    <br />

</form>
</div>
</div>
<?php include_once 'templates/footer.php'; ?>