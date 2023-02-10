<?php $page_title = "Update Profile"; ?>
<?php
session_start();
require_once 'get-data.php';
$student_details = getStudentInfo();
$academic_details = getAcademicInfo();
$result = getResult();
if( !empty( $_POST ) ){
	try{
		$data = updateInfo( $_POST );
		
		if( isset($data['success']) && $data['success']){
            $_SESSION['success'] = 'Info Updated Successfully!';
            header("Refresh:1");
		} else {
			$_SESSION['error'] = 'Info Update failed, try again.';
		}
	} catch (Exception $e) {
		$_SESSION['error'] = $e->getMessage();
	}
}
?>
<?php include_once 'templates/header.php'; ?>
<br>
<div class="col-lg-10 col-lg-offset-1 alert bg-primary" style="margin-bottom:0px!important;color:white">
    <?php include_once 'config/message.php'; ?>
    <h3 class="form-signin-heading text-center" style="margin-top:0px;margin-bottom:0px!important"><i class="glyphicon glyphicon-book"></i>&nbsp;Student
        Profile</h3>
</div>
<div class="col-lg-10 col-lg-offset-1" style="background-color:#eee"><br>
    <img src="images/man.png" style="display: block;margin-left:auto;margin-right:auto"
        class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
    <hr />
    <table class="table table-bordered table-stripped">
            <tr>
                <td>Exam Roll</td>
                <td><?php echo $result['exam_roll']; ?></td>
                <td>Merit Position</td>
                <td><?php echo $result['merit_position']; ?></td>
                <td>Department</td>
                <td><?php echo $result['department']; ?></td>
                <td>Academic Year</td>
                <td><?php echo $result['year']; ?></td>
            </tr>
        </table>
        <hr />
    <h4 class="form-signin-heading"><i class="glyphicon glyphicon-user"></i>&nbsp;Personal Info</h4>
    <hr />
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="info-form" method="post" role="form" accept-charset="utf-8">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td> <input type="text" name="full_name" class="form-control" value="<?php echo $student_details['full_name']; ?>"
                            required></td>
                    <td>Name in Bangla:</td>
                    <td> <input type="text" name="full_name_bn" class="form-control" value="<?php echo $student_details['full_name_bn']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Father's Name:</td>
                    <td> <input type="text" name="f_name" class="form-control" value="<?php echo $student_details['f_name']; ?>"
                            required></td>
                    <td>Father's Name in Bangla:</td>
                    <td> <input type="text" name="f_name_bn" class="form-control" value="<?php echo $student_details['f_name_bn']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Mothers Name:</td>
                    <td><input type="text" name="m_name" class="form-control" value="<?php echo $student_details['m_name']; ?>"
                            required></td>
                    <td>Mothers Name in Bangla:</td>
                    <td><input type="text" name="m_name_bn" class="form-control" value="<?php echo $student_details['m_name_bn']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Guardian Name:</td>
                    <td><input type="text" name="guardian_name" class="form-control" value="<?php echo $student_details['guardian_name']; ?>"
                            required></td>
                    <td>Guardian Name in Bangla:</td>
                    <td><input type="text" name="guardian_name_bn" class="form-control" value="<?php echo $student_details['guardian_name_bn']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select class="form-control" name="gender">
                            <option value="<?php echo $student_details['gender']?>" <?php echo
                                ($student_details['gender']=='1' ) ? ' selected="selected"' : '' ;?>>Male</option>
                            <option value="<?php echo $student_details['gender']?>" <?php echo
                                ($student_details['gender']=='2' ) ? ' selected="selected"' : '' ;?>>Female</option>
                        </select>
                    </td>
                    <td>Religion:</td>
                    <td>
                        <select class="form-control" name="religion">
                            <option>Islam</option>
                            <option>Hindu</option>
                            <option>Christian</option>
                            <option>Buddha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="text" name="date_of_birth" class="form-control" value="<?php echo $student_details['date_of_birth']; ?>"
                            required></td>
                    <td>Nationality:</td>
                    <td><input type="text" name="nationality" class="form-control" value="<?php echo $student_details['nationality']; ?>"
                            required></td>
                </tr>
            </tbody>
        </table>
        <hr />
        <h4 class="form-signin-heading"><i class="glyphicon glyphicon-phone"></i>&nbsp;Contact Info</h4>
        <hr />
        <div class="col-md-6" style="padding-left:0px!important;padding-right:0px!important">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="4" class=" text-center">Permanent Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>House</td>
                        <td><input type="text" name="permanent_house" class="form-control" value="<?php echo $student_details['permanent_house']; ?>"
                                required></td>
                        <td>Village</td>
                        <td><input type="text" name="permanent_vill" class="form-control" value="<?php echo $student_details['permanent_vill']; ?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Post:</td>
                        <td><input type="text" name="permanent_post" class="form-control" value="<?php echo $student_details['permanent_post']; ?>"
                                required></td>
                        <td>Police Station</td>
                        <td><input type="text" name="permanent_police_s" class="form-control" value="<?php echo $student_details['permanent_police_s']; ?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Distric</td>
                        <td><input type="text" name="permanent_dist" class="form-control" value="<?php echo $student_details['permanent_dist']; ?>"
                                required></td>
                        <td>Country</td>
                        <td><input type="text" name="permanent_country" class="form-control" value="<?php echo $student_details['permanent_country']; ?>"
                                required></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6" style="padding-left:0px!important;padding-right:0px!important">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="4" class=" text-center">Present Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>House</td>
                        <td><input type="text" name="present_house" class="form-control" value="<?php echo $student_details['present_house']; ?>"
                                required></td>
                        <td>Village</td>
                        <td><input type="text" name="present_vill" class="form-control" value="<?php echo $student_details['present_vill']; ?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Post:</td>
                        <td><input type="text" name="present_post" class="form-control" value="<?php echo $student_details['present_post']; ?>"
                                required></td>
                        <td>Police Station</td>
                        <td><input type="text" name="present_police_s" class="form-control" value="<?php echo $student_details['present_police_s']; ?>"
                                required></td>
                    </tr>
                    <tr>
                        <td>Distric</td>
                        <td><input type="text" name="present_dist" class="form-control" value="<?php echo $student_details['present_dist']; ?>"
                                required></td>
                        <td>Country</td>
                        <td><input type="text" name="present_country" class="form-control" value="<?php echo $student_details['present_country']; ?>"
                                required></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>Guardian Occupation</td>
                    <td><input type="text" name="g_occupation" class="form-control" value="<?php echo $student_details['g_occupation']; ?>"
                            required></td>
                    <td>Office Address</td>
                    <td><input type="text" name="g_address" class="form-control" value="<?php echo $student_details['g_address']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="g_mobile" class="form-control" value="<?php echo $student_details['g_mobile']; ?>"
                            required></td>
                    <td>Monthly Income</td>
                    <td><input type="text" name="g_monthly_income" class="form-control" value="<?php echo $student_details['g_monthly_income']; ?>"
                            required></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>Please mention Cause: Sickness/Financial problem/Or-</td>
                    <td colspan="3"><textarea type="text" name="study_gap_cause" class="form-control" 
                            required><?php echo $student_details['study_gap_cause']; ?></textarea></td>
                </tr>
                <thead>
                    <tr>
                        <th colspan="4" class=" text-center">If admitted other institution before</th>
                    </tr>
                </thead>
                <tr>
                    <td>Admitted institution</td>
                    <td colspan="3"><input type="text" name="admitted_institution" class="form-control" value="<?php echo $student_details['admitted_institution']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Admitted Department</td>
                    <td><input type="text" name="admitted_department" class="form-control" value="<?php echo $student_details['admitted_department']; ?>"
                            required></td>
                    <td>Academic Year</td>
                    <td><input type="text" name="admitted_year" class="form-control" value="<?php echo $student_details['admitted_year']; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Institution Address</td>
                    <td colspan="3"><textarea type="text" name="admitted_institution_addres" class="form-control"
                            required><?php echo $student_details['admitted_institution_addres']; ?></textarea></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th colspan="6" class=" text-center">If admitted JU before</th>
                </tr>
            </thead>
            <tr>
                <td>JU Admitted Department</td>
                <td><input type="text" name="previous_ju_department" class="form-control" value="<?php echo $student_details['previous_ju_department']; ?>"
                        required></td>
                <td>Academic Year</td>
                <td><input type="text" name="previous_ju_year" class="form-control" value="<?php echo $student_details['previous_ju_year']; ?>"
                        required></td>
                <td>Hall</td>
                <td><input type="text" name="previous_ju_hall" class="form-control" value="<?php echo $student_details['previous_ju_hall']; ?>"
                        required></td>
            </tr>
        </table>
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th colspan="6" class=" text-center">Local Guardian Contact</th>
                </tr>
            </thead>
            <tr>
                <td>Name</td>
                <td><input type="text" name="local_guardian_name" class="form-control" value="<?php echo $student_details['local_guardian_name']; ?>"
                        required></td>
                <td>Address/Mobile/Phone</td>
                <td><textarea  name="local_guardian_address" class="form-control" 
                        required><?php echo $student_details['local_guardian_address']; ?></textarea></td>
            </tr>
        </table>
        <div class='row'>
            <div class="col-xs-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                <div class="text-center">
                    <button data-loading-text="Saving Data..." type="submit" name="update_btn" class="btn btn-success submit_btn form-control">
                        <i class="fa fa-floppy-o"></i>Update Info </button>
                </div>
            </div>
        </div>

    </form><br>
</div>

<?php include_once 'templates/footer.php'; ?>
<!-- Modal -->
<div id="edit_info" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>