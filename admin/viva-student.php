<?php $page_title = "Viva Student List"; ?>
<?php include_once 'templates/header.php'; ?>

<div class="col-lg-12">
    <h4>List Of Student Called for viva today</h4>
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
                        <th style="width:140px;"><em class="fa fa-cog"></em></th>
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
                        <td text-align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>12-12-2018</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                        <td>5/15</td>
                        <td>Failed</td>
                        <td>Prof.Ahmed</td>
                        <td text-align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>12-12-2018</td>
                        <td>A</td>
                        <td>Md.Rahim</td>
                        <td>English,Math,Physics</td>
                        <td>-</td>
                        <td>Absent</td>
                        <td>Prof.Ahmed</td>
                        <td text-align="center">
                            <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
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

