<?php $page_title = "Collected Subject Choice"; ?>
<?php $this_page = "students"; ?>
<?php $sub_menu_page = "subjectchoice"; ?>
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
    <h4>Students Who submit Subject choice</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
            <div class="col col-xs-6 text-left">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">Call For VIVA</button>
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
                        <th style="width:30px;"><em class="fa fa-cog"></em></th>
                        <th>Exam ROll</th>
                        <th>Unit</th>
                        <th>Name</th>
                        <th>Subject Choice</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td text-align="center">
                        <input type="checkbox"/>
                        </td>
                        <td>1001</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                    </tr>
                    <tr>
                        <td text-align="center">
                        <input type="checkbox"/>
                        </td>
                        <td>1002</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                    </tr>
                    <tr>
                        <td text-align="center">
                        <input type="checkbox"/>
                        </td>
                        <td>1003</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
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
                <h4 class="modal-title text-center" id="myModalLabel">Call For Interview</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Viva Date</label>
                        <input type="date" class="form-control" id="inputName" placeholder="allocation no"/>
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