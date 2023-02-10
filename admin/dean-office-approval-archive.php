<?php $page_title = "Pending Approval List"; ?>
<?php $this_page = "approval"; ?>
<?php $sub_menu_page = "archive"; ?>
<?php 
require_once 'get-data.php';
$students = getAdminArchiveRequest();
?>
<?php include_once 'templates/header.php'; ?>
<div class="col-lg-12">
    <h4>Archive Approval List</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h4 class="panel-title">Student List</h4>
                </div>
                <div class="col col-xs-6 text-right">
                    <button type="button" onClick="window.print()" class="btn btn-sm btn-primary btn-create">Print</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
        <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                    <th>Exam ROll</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Dept</th>
                        <th>Dean</th>
                        <th>HOD</th>
                        <th>Dean Rep</th>
                        <th>Admin Office</th>
                        <th>Ast.Regi</th>
                        <th>Dept.Regi</th>
                        <th style="width:120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
						if( !empty( $students ) ){ 
							foreach ($students as $value) {
					?>
                <tr>
                <td><?= isset($value['exam_roll']) ? $value['exam_roll'] : '-' ?></td>
                        <td><?= isset($value['full_name']) ? $value['full_name'] : '-' ?></td>
                        <td><?= isset($value['unit']) ? $value['unit'] : '-' ?></td>
                        <td><?= isset($value['department']) ? $value['department'] : '-' ?></td>
                        <td><?= isset($value['dean_approv']) ? $value['dean_approv'] : 'NO' ?></td>
                        <td><?= isset($value['hod_approv']) ? $value['hod_approv'] : 'NO' ?></td>
                        <td><?= isset($value['dr_approv']) ? $value['dr_approv'] : 'NO' ?></td>
                        <td><?= isset($value['admin_off_approv']) ? $value['admin_off_approv'] : 'NO' ?></td>
                        <td><?= isset($value['assistant_register_approv']) ? $value['assistant_register_approv'] : 'NO' ?></td>
                        <td><?= isset($value['deputy_registrar_approv']) ? $value['deputy_registrar_approv'] : 'NO' ?></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li><a href="personal-info.php?exam_roll=<?php echo $value['exam_roll']?>"class=""><em class="fa fa-list"></em> View</a></li>
                            <li><a data-admin_role="rep_dean"data-action_type="reset"data-exam_roll="<?php echo $value["exam_roll"];?> "class="btn  approve_button"><em class="fa fa-check"></em> Reset</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <?php } } else { ?>
					<tr colspan="9">
						<td>No Pending request Found</td>
					</tr>
					<?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script>
$(document).ready(function(){
$('.approve_button').click(function(e){
e.preventDefault();
var exam_roll = $(this).attr('data-exam_roll');
var admin_role = $(this).attr('data-admin_role');
var action_type = $(this).attr('data-action_type');
var parent = $(this).parent("td").parent("tr");
bootbox.dialog({
message: "Are you sure you want to Reset ?",
title: "<i class='glyphicon glyphicon-trash'></i> Reset !",
size: "small",
buttons: {
success: {
label: "No",
className: "btn-success",
callback: function() {
$('.bootbox').modal('hide');
}
},
danger: {
label: "Reset!",

className: "btn-danger",
callback: function() {
$.ajax({
type: 'POST',
url: 'adminAction.php',
data: 'exam_roll='+exam_roll+'&admin_role='+admin_role+'&action_type='+action_type,
})
.done(function(response){
    bootbox.alert({ 
  size: "small",
  title: "Approve",
  message: "Successfully Approved", })
parent.fadeOut('slow');
})
.fail(function(response){
    bootbox.alert({ 
  size: "small",
  title: "Your Title",
  message: response, 
})
})
}
}
}
});
});
});
</script>
<?php include_once 'templates/footer.php'; ?>

