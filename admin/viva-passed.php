<?php $page_title = "Viva Passed Student List"; ?>
<?php $this_page = "students"; ?>
<?php $sub_menu_page = "vivapassed"; ?>
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
    <h4>List Of Student Who passed in Viva</h4>
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
                        <th>Viva Date</th>
                        <th>Unit</th>
                        <th>Name</th>
                        <th>Subject Choice</th>
                        <th>Viva Marks</th>
                        <th>Viva Status</th>
                        <th>Viva Controller</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>12-12-2018</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                        <td>10/15</td>
                        <td>Passed</td>
                        <td>Prof.Ahmed</td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>12-12-2018</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                        <td>10/10</td>
                        <td>Passed</td>
                        <td>Prof.Ahmed</td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>12-12-2018</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                        <td>10/10</td>
                        <td>Passed</td>
                        <td>Prof.Ahmed</td>
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

