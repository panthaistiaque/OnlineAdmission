<?php $page_title = "Admission List"; ?>
<?php $this_page = "admissionlist"; ?>
<?php include_once 'templates/header.php'; ?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-inline">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="email_id" class="control-label">Year</label>
                        <select class="form-control" id="inputEmail">
                            <option disabled>Select Year</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email_id" class="control-label">Unit</label>
                        <select class="form-control" id="inputEmail">
                            <option disabled>Select Unit</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <h4>Admission List</h4>
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
                        <th>Type</th>
                        <th>Unit</th>
                        <th>Name</th>
                        <th>Subject Alocated</th>
                        <th>Total Marks</th>
                        <th>Viva Status</th>
                        <th class="text-center">Admission Status</th>
                        <th class="text-center">Status</th>
                        <th style="width:50px;text-align:center"><em class="fa fa-cog"></em></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>1001</td>
                        <td>Merit</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>IIT</td>
                        <td>80</td>
                        <td>Passed</td>
                        <td style="text-align:center"><span class="label label-warning">Migrated</span></td>
                        <td style="text-align:center"><span class="label label-success">Active</span></td>
                        <td text-align="center">
                            <a href="student-details-for-admission.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>Merit</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>Physics</td>
                        <td>80</td>
                        <td>Passed</td>
                        <td style="text-align:center"><span class="label label-success">Done</span></td>
                        <td style="text-align:center"><span class="label label-success">Active</span></td>
                        <td text-align="center">
                            <a href="student-details-for-admission.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Merit</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>IIT</td>
                        <td>80</td>
                        <td>Passed</td>
                        <td style="text-align:center"><span class="label label-warning">Pending</span></td>
                        <td style="text-align:center"><span class="label label-success">Active</span></td>
                        <td text-align="center">
                            <a href="student-details-for-admission.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>Waiting</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>IIT</td>
                        <td>80</td>
                        <td>Passed</td>
                        <td style="text-align:center"><span class="label label-danger">Expired</span></td>
                        <td style="text-align:center"><span class="label label-danger">Inactive</span></td>
                        <td text-align="center">
                            <a href="student-details-for-admission.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col col-xs-4">Page 1 of 5
                </div>
                <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php'; ?>

