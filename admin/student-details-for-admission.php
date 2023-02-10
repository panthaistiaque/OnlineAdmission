<?php $page_title = "Waiting List"; ?>
<?php $this_page = "admissionlist"; ?>
<?php include_once 'templates/header.php'; ?>
<div class="col-md-12" style="margin-bottom:50px">
    <h4>Student Details</h4>
    <!-- tabs -->
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#admission" data-toggle="tab">Admission Info</a></li>
            <li><a href="#personal" data-toggle="tab">Personal Info</a></li>
            <li><a href="#contact" data-toggle="tab">Contact Info</a></li>
            <li><a href="#academic" data-toggle="tab">Academic Info</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="admission">
                <div class="col-lg-12" style="padding-left:0px!important"><br>
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-8 text-left">
                                    <div class="btn-group">
                                        <a href="#" data-toggle="modal" data-target="#unitModal" class="btn btn-warning">Unit
                                            Approval</a>
                                        <a href="#" data-toggle="modal" data-target="#departmentModal" class="btn btn-primary">Department
                                            Approval</a>
                                        <a href="#" data-toggle="modal" data-target="#registerModal" class="btn btn-success">Register
                                            Update</a>
                                           
                                    </div>
                                </div>
                                <div class="col col-xs-4 text-right">
                                    <button type="button" onClick="window.print()" class="btn btn-sm btn-primary btn-create">Print</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list admission-table">
                                <tbody>
                                    <tr>
                                        <th style="width:50%">Exam Roll</th>
                                        <td>1001</td>
                                    </tr>
                                    <tr>
                                        <th>Bill No</th>
                                        <td>1001</td>
                                    </tr>
                                    <tr>
                                        <th>TRX No</th>
                                        <td>1001</td>
                                    </tr>
                                    <tr>
                                        <th>Admission Test Result</th>
                                        <td>Point :75(Merit)</td>
                                    </tr>
                                    <tr>
                                        <th>Viva Status</th>
                                        <td>Passed</td>
                                    </tr>
                                    <tr>
                                        <th>Subject Preferences</th>
                                        <td>Physic,Chemistry,Math</td>
                                    </tr>
                                    <tr>
                                        <th>Allocated Subject</th>
                                        <td>Physics</td>
                                    </tr>
                                    <tr>
                                        <th>Allocation Type</th>
                                        <td>Migration</td>
                                    </tr>
                                    <tr>
                                        <th>Unit Approval</th>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <th>Unit Approved by</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Department Approval</th>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <th>Department Approved by</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Admission Fees Receipt No</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Register Approval</th>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <th>Register Approved by</th>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th>Hall Allotment</th>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <th>Hall alloted by</th>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane" id="personal">
                <br>
                <div class="col-lg-12"style="padding-left:0px!important">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td>Md Ahmed seikh</td>
                                <th>Name in Bangla:</th>
                                <td>Ahmed</td>
                            </tr>
                            <tr>
                                <th>Father's Name:</th>
                                <td>Ahmed</td>
                                <th>Father's Name in Bangla:</th>
                                <td>Ahmed</td>
                            </tr>
                            <tr>
                                <th>Mothers Name:</th>
                                <td>Ahmed</td>
                                <th>Mothers Name in Bangla:</th>
                                <td>Ahmed</td>
                            </tr>
                            <tr>
                                <th>Gender:</th>
                                <td>Male</td>
                                <th>Date Of Birth:</th>
                                <td>26-02-2000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="contact">
                <br>
                <div class="col-lg-12"style="padding-left:0px!important">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>E-mail:</th>
                                <td>example@gmail.com</td>
                                <th>Mobile:</th>
                                <td>014454545</td>
                            </tr>
                            <tr>
                                <th>Post Code:</th>
                                <td>5800</td>
                                <th>District</th>
                                <td>Faridpur</td>
                            </tr>
                            <tr>
                                <th>Division</th>
                                <td>Dhaka</td>
                                <th>Emergency Mobile No</th>
                                <td>012144545</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="academic">
                <br>
                <div class="col col-xs-6 text-left">
                    <table class="table table-striped table-bordered table-responsive">
                        <tbody>
                            <thead>
                                <tr style="background-color:#FFF">
                                    <th class="text-center" colspan="2">SSC</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Subject</th>
                                    <th class="text-center">Marks/GPA</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>Subject 1</td>
                                <td>78</td>
                            </tr>
                            <tr>
                                <td>Subject2</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Subject-3</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th>Total marks/GPA</th>
                                <th>750(A)</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col col-xs-6 text-left">
                    <table class="table table-striped table-bordered table-responsive">
                        <tbody>
                            <thead>
                                <tr style="background-color:#FFF">
                                    <th class="text-center" colspan="2">HSC</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Subject</th>
                                    <th class="text-center">Marks/GPA</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>Subject 1</td>
                                <td>78</td>
                            </tr>
                            <tr>
                                <td>Subject2</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Subject-3</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th>Total marks/GPA</th>
                                <th>850(A+)</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /tabs -->

</div>


<?php include_once 'templates/footer.php'; ?>
<!-- unit modal -->
<div class="modal fade" id="unitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Unit Approval</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                    <label for="inputName">Aprove/Reject</label>
                        <select class="form-control" id="inputEmail">
                            <option>Approve</option>
                            <option>Reject</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn btn-success" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Department Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Department Approval</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                    <label for="inputName">Aprove/Reject</label>
                        <select class="form-control" id="inputEmail">
                            <option>Approve</option>
                            <option>Reject</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn btn-success" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- register modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Register Update</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Student ID</label>
                        <input type="text" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Payment Document NO</label>
                        <input type="date" class="form-control" required/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn btn-success" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
