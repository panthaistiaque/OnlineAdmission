<?php $page_title = "Allocation List"; ?>
<?php $this_page = "allocation"; ?>
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
    <h4>List Of Allocation Processes</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">
                       New Allocation</button>
                </div>
                <div class="col col-xs-6 text-right">
                    <button type="button" onClick="window.print()" class="btn btn-sm btn-primary btn-create">
                        Print</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th class="hidden-xs">ID</th>
                        <th>Allocation Name</th>
                        <th>Unit</th>
                        <th>Total Student</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th style="width:100px;"><em class="fa fa-cog"></em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="hidden-xs">1</td>
                        <td>Allocation-1</td>
                        <td>A</td>
                        <td>150</td>
                        <td>Md.Ahmed</td>
                        <td>12-12-2018-10.50</td>
                        <td text-align="center">
                            <a href="allocation-student.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="hidden-xs">1</td>
                        <td>Allocation-2</td>
                        <td>A</td>
                        <td>50</td>
                        <td>Md.Ahmed</td>
                        <td>12-12-2018-10.50</td>
                        <td text-align="center">
                            <a href="allocation-student.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Create New Allocation</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Allocation Name</label>
                        <input type="text" class="form-control" id="inputName" />
                    </div>
                    <div class="form-group">
                        <label for="inputName">Unit</label>
                        <select class="form-control" id="inputEmail">
                            <option disabled>Select Unit</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
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