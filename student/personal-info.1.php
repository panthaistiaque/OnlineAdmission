<?php $page_title = "Profile"; ?>
<?php
session_start();
require_once 'get-data.php';

$student_details = getStudentInfo();

?>
<?php include_once 'templates/header.php'; ?>
<br>
<div class="col-lg-10 col-lg-offset-1 alert bg-primary" style="margin-bottom:0px!important;color:white">
<h3 class="form-signin-heading text-center"style="margin-top:0px;margin-bottom:0px!important"><i class="glyphicon glyphicon-book"></i>&nbsp;Student Profile</h3>
</div>
<div class="col-lg-10 col-lg-offset-1" style="background-color:#eee"><br>
<img src="https://www.w3schools.com/bootstrap/cinqueterre.jpg" style="display: block;margin-left:auto;margin-right:auto"class="img-thumbnail" alt="Cinque Terre" width="150" height="100"> 
<hr />
<a class="btn btn-primary" href="update-info.php"style="float:right;margin-top:-8px">EDIT INFO</a>
    <h4 class="form-signin-heading"><i class="glyphicon glyphicon-user"></i>&nbsp;Personal Info</h4>
    <hr />
    <table class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td>Name:</td>
        <td><?php echo $student_details['full_name']; ?></td>
        <td>Name in Bangla:</td>
        <td><?php echo $student_details['full_name_bn']; ?></td>
      </tr>
      <tr>
        <td>Father's Name:</td>
        <td><?php echo $student_details['f_name']; ?></td>
        <td>Father's Name in Bangla:</td>
        <td><?php echo $student_details['f_name_bn']; ?></td>
      </tr>
      <tr>
        <td>Mothers Name:</td>
        <td><?php echo $student_details['m_name']; ?></td>
        <td>Mothers Name in Bangla:</td>
        <td><?php echo $student_details['m_name_bn']; ?></td>
      </tr>
      <tr>
        <td>Guardian Name:</td>
        <td><?php echo $student_details['guardian_name']; ?></td>
        <td>Guardian Name in Bangla:</td>
        <td><?php echo $student_details['guardian_name_bn']; ?></td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td><?php echo $student_details['name']; ?></td>
        <td>Religion:</td>
        <td><?php echo $student_details['religion']; ?></td>
      </tr>
      <tr>
        <td>Date Of Birth:</td>
        <td><?php echo $student_details['date_of_birth']; ?></td>
        <td>Nationality:</td>
        <td><?php echo $student_details['nationality']; ?></td>
      </tr>
    </tbody>
  </table>
  <hr />
    <h4 class="form-signin-heading"><i class="glyphicon glyphicon-phone"></i>&nbsp;Contact Info</h4>
    <hr />
    <div class="col-md-6"style="padding-left:0px!important;padding-right:0px!important">
    <table class="table table-bordered table-striped">
    <thead>
     <tr>
     <th colspan="4" class=" text-center">Permanent Address</th>
     </tr>
     </thead>
    <tbody>
      <tr>
        <td>House</td>
        <td><?php echo $student_details['permanent_house']; ?></td>
        <td>Village</td>
        <td><?php echo $student_details['permanent_vill']; ?></td>
      </tr>
      <tr>
        <td>Post:</td>
        <td><?php echo $student_details['permanent_post']; ?></td>
        <td>Police Station</td>
        <td><?php echo $student_details['permanent_police_s']; ?></td>
      </tr>
      <tr>
        <td>Distric</td>
        <td><?php echo $student_details['permanent_dist']; ?></td>
        <td>Country</td>
        <td><?php echo $student_details['permanent_country']; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="col-md-6"style="padding-left:0px!important;padding-right:0px!important">
    <table class="table table-bordered table-striped">
    <thead>
     <tr>
     <th colspan="4" class=" text-center">Present Address</th>
     </tr>
     </thead>
    <tbody>
    <tr>
        <td>House</td>
        <td><?php echo $student_details['present_house']; ?></td>
        <td>Village</td>
        <td><?php echo $student_details['present_vill']; ?></td>
      </tr>
      <tr>
        <td>Post:</td>
        <td><?php echo $student_details['present_post']; ?></td>
        <td>Police Station</td>
        <td><?php echo $student_details['present_police_s']; ?></td>
      </tr>
      <tr>
        <td>Distric</td>
        <td><?php echo $student_details['present_dist']; ?></td>
        <td>Country</td>
        <td><?php echo $student_details['present_country']; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <table class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td>Guardian Occupation</td>
        <td><?php echo $student_details['g_occupation']; ?></td>
        <td>Office Address</td>
        <td><?php echo $student_details['g_address']; ?></td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td><?php echo $student_details['g_mobile']; ?></td>
        <td>Monthly Income</td>
        <td><?php echo $student_details['g_monthly_income']; ?></td>
      </tr>
    </tbody>
  </table>
</div>

<?php include_once 'templates/footer.php'; ?>
<!-- Modal -->
<div id="edit_info"class="modal fade">
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