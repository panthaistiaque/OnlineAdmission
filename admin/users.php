<?php $page_title = "PSystem User List"; ?>
<?php $this_page = "user"; ?>
<?php $sub_menu_page = "user"; ?>
<?php 
require_once 'get-data.php';
$users = getUsers();
?>
<?php include_once 'templates/header.php'; ?>
<style>
.panel-table .panel-body .table-list>tbody>tr>td,th{
    text-align: center!important;
}

</style>
<div class="col-lg-12">
    <h4>System User List</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h4 class="panel-title">User List</h4>
                </div>
                <div class="col col-xs-6">
                    <div class="col btn-group pull-right">
                        <button type="button" onClick="window.print()" class="btn btn-group btn-sm btn-primary btn-create">Print</button>
                        <button  class="btn btn-group btn-sm btn-success btn-create"data-toggle="modal" data-target="#modalForm">Add User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
        <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>User Name</th>
                        <th>Unit</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th style="width:120px">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
						if( !empty( $users ) ){ 
							foreach ($users as $i=> $value) {
					?>
                <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?= isset($value['name']) ? $value['name'] : '-' ?></td>
                        <td><?= isset($value['email']) ? $value['email'] : '-' ?></td>
                        <td><?= isset($value['mobile']) ? $value['mobile'] : '-' ?></td>
                        <td><?= isset($value['username']) ? $value['username'] : '-' ?></td>
                        <td><?= isset($value['unit']) ? $value['unit'] : '-' ?></td>
                        <td><?= isset($value['role']) ? $value['role'] : '-' ?></td>
                        <td style="text-align:center"><span class="<?php if($value['active'] =='1'){echo 'label label-success';}else{echo 'label label-warning';}?>"><?php if($value['active'] =='1'){echo 'active';}else{echo 'Deactive';}?></span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                            <li><a href="student-details-for-admission.php"class=""><em class="fa fa-list"></em> View</a></li>
                            <li><a href=""data-toggle="modal" data-target="#modalEdit" data-id="<?php echo $value["id"];?> "data-name="<?php echo $value["name"];?> "data-username="<?php echo $value["username"];?> "data-email="<?php echo $value["email"];?> "data-mobile="<?php echo $value["mobile"];?> "data-unit="<?php echo $value["unit"];?> "data-role="<?php echo $value["role"];?> "class="btn  edit_button"><em class="fa fa-check"></em> Edit User</a></li>
                            <li><a href="student-details-for-admission.php"data-user_id="<?php echo $value["id"];?> "data-status="<?php echo $value["active"];?> "class="btn  approve_button"><em class="fa fa-check"></em> Deactive</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <?php } } else { ?>
					<tr colspan="9">
						<td>No User Found</td>
					</tr>
					<?php } ?>
                </tbody>
            </table>

        </div>
        
    </div>
    <br><br><br><br>
</div>

<script>
$(document).ready(function(){
    $('.approve_button').click(function(e){
    e.preventDefault();
    var user_id = $(this).attr('data-user_id');
    var status = $(this).attr('data-status');
    var parent = $(this).parent("td").parent("tr");
    bootbox.dialog({
    message: "Are you sure to Change Account Status ?",
    title: "<i class='glyphicon glyphicon-check'></i> Confirmation !",
    size: "small",
    buttons: {
        success: {
            label: "No",
            className: "btn-warning",
            callback: function() {
            $('.bootbox').modal('hide');
            }
            },
        danger: {
            label: "Change Status!",

            className: "btn-success",
            callback: function() {
                $.ajax({
                type: 'POST',
                url: 'registration.php',
                data: 'user_id='+user_id+'&status='+status
                })
                .done(function(response){
                    bootbox.alert({ 
                size: "small",
                title: "Account Status",
                message: response, })
                parent.fadeOut('slow');
                })
                    .fail(function(response){
                        bootbox.alert({ 
                    size: "small",
                    title: "Error",
                    message: response, 
                    })
                    })
                }
            }
        }
    });
    });
});
$('.edit_button').click(function(e){
    e.preventDefault();
    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var username = $(this).attr('data-username');
    var email = $(this).attr('data-email');
    var mobile = $(this).attr('data-mobile');
    var unit = $(this).attr('data-unit');
    var role = $(this).attr('data-role');
    $('#edit_inputName').val(name);
    $('#edit_inputId').val(id);
    $('#edit_inputEmail').val(email);
    $('#edit_inputMobile').val(mobile);
    $('#edit_inputUserName').val(username);
    $('#edit_inputUnit option[value = '+ unit + ']').prop('selected', true);
    $("#edit_inputRole option[value =  " + role + "]").prop('selected', true);
});
function submitEditForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#edit_inputName').val();
    var email = $('#edit_inputEmail').val();
    var mobile = $('#edit_inputMobile').val();
    var username = $('#edit_inputUserName').val();
    var unit = $('#edit_inputUnit').val();
    var role = $('#edit_inputRole').val();
    var id = $('#edit_inputId').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#edit_inputName').focus();
        return false;
    }else if(username.length < 4){
        alert('User Name minimum 4 Letter.');
        $('#vinputEmail').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#edit_inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#edit_inputEmail').focus();
        return false;
    }else if(mobile.trim() == '' ){
        alert('Please enter your mobile no.');
        $('#edit_inputMobile').focus();
        return false;
    }else if(username.trim() == '' ){
        alert('Please enter your username.');
        $('#edit_inputUserName').focus();
        return false;
    }else if(unit.trim() == '' ){
        alert('Please enter unit.');
        $('#edit_inputUnit').focus();
        return false;
    }else if(role.trim() == '' ){
        alert('Please enter role.');
        $('#edit_inputRole').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'registration.php',
            data:'editFrmSubmit=1&edit_name='+name+'&edit_email='+email+'&edit_username='+username+'&edit_id='+id+'&edit_mobile='+mobile+'&edit_unit='+unit+'&edit_role='+role,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#edit_inputName').val('');
                    $('#edit_inputEmail').val('');
                    $('#edit_inputMobile').val('');
                    $('#edit_inputUserName').val('');
                    $('#edit_inputUnit').val('');
                    $('#edit_inputRole').val('');
                    $('.statusMsg').html('<span style="color:green;">User Account Edited Successfully</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}

function submitUserForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var mobile = $('#inputMobile').val();
    var username = $('#inputUserName').val();
    var unit = $('#inputUnit').val();
    var role = $('#inputRole').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(username.length < 4){
        alert('User Name minimum 4 Letter.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else if(mobile.trim() == '' ){
        alert('Please enter your mobile no.');
        $('#inputMobile').focus();
        return false;
    }else if(username.trim() == '' ){
        alert('Please enter your username.');
        $('#inputUserName').focus();
        return false;
    }else if(unit.trim() == '' ){
        alert('Please enter unit.');
        $('#inputUnit').focus();
        return false;
    }else if(role.trim() == '' ){
        alert('Please enter role.');
        $('#inputRole').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'registration.php',
            data:'registrationFrmSubmit=1&name='+name+'&email='+email+'&username='+username+'&mobile='+mobile+'&unit='+unit+'&role='+role,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputUserName').val('');
                    $('#inputMobile').val('');
                    $('#inputUnit').val('');
                    $('#inputRole').val('');
                    $('.statusMsg').html('<span style="color:green;">User Account Created Successfully</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">User Name</label>
                        <input type="text" class="form-control" id="inputUserName" placeholder="Enter user name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">User Mobile</label>
                        <input type="text" class="form-control" id="inputMobile" placeholder="Enter user mobile"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Unit</label>
                        <select  class="form-control"id="inputUnit">
                            <option selected=""value="A">A</option>
                            <option selected=""value="B">B</option>
                            <option selected=""value="C">C</option>
                            <option selected=""value="D">D</option>
                            <option selected=""value="E">E</option>
                            <option selected=""value="F">F</option>
                            <option selected=""value="G">G</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Role</label>
                        <select  class="form-control"id="inputRole">
                            <option value="admin">Admin</option>
                            <option value="dean">Dean/Director</option>
                            <option value="chairman">Departmental chairman </option>
                            <option value="rep_dean">Departmental Representatives  of dean office </option>
                            <option value="admin_office">Administrative Officer(Education) </option>
                            <option value="asst_register">Assistant Register (Education) </option>
                            <option value="deuty_register">Deputy  Register (Education) </option>
                        </select>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitUserForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit User</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="edit_inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">User Name</label>
                        <input type="text" class="form-control" id="edit_inputUserName" placeholder="Enter user name"/>
                    </div>
                    <input type="hidden" class="form-control" id="edit_inputId"value=""/>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="edit_inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">User Mobile</label>
                        <input type="text" class="form-control" id="edit_inputMobile" placeholder="Enter user mobile"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Unit</label>
                        <select  class="form-control"id="edit_inputUnit">
                            <option selected=""value="A">A</option>
                            <option selected=""value="B">B</option>
                            <option selected=""value="C">C</option>
                            <option selected=""value="D">D</option>
                            <option selected=""value="E">E</option>
                            <option selected=""value="F">F</option>
                            <option selected=""value="G">G</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Role</label>
                        <select  class="form-control"id="edit_inputRole">
                            <option value="admin">Admin</option>
                            <option value="dean">Dean/Director</option>
                            <option value="chairman">Departmental chairman </option>
                            <option value="rep_dean">Departmental Representatives  of dean office </option>
                            <option value="admin_office">Administrative Officer(Education) </option>
                            <option value="asst_register">Assistant Register (Education) </option>
                            <option value="deuty_register">Deputy  Register (Education) </option>
                        </select>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitEditForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>

