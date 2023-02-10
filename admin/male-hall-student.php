<?php $page_title = "Merit List"; ?>
<?php $this_page = "halls"; ?>
<?php $sub_menu_page = "malehall"; ?>
<?php include_once 'templates/header.php'; ?>

<div class="col-lg-12">
<h4 style="color:#F44336">Student List OF ABC Hall-Level-3, Room-101</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6 text-left">
                   <input type="text"class="form-control"style="width:150px"placeholder="Search..."/>
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
                        <th>Student ID</th>
                        <th>Batch</th>
                        <th>Name</th>
                        <th>Seat No</th>
                        <th>Entry Date</th>
                        <th>Operator</th>
                        <th style="width:150px;text-align:center">Status</th>
                        <th style="width:100px;;text-align:center"><em class="fa fa-cog"></em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td>1001</td>
                        <td>40</td>
                        <td>Md.Rahim</td>
                        <td>1W</td>
                        <td>12-12-2018</td>
                        <td>Mr.Ahmed</td>
                        <td style="text-align:center"> <span class="label label-success">Active</span></td>
                        <td text-align="center">
                            <a href="viva-student.php"class="btn btn-info"><em class="fa fa-list"></em></a>
                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                        </td>
                    </tr>
                    <tr >
                        <td>1002</td>
                        <td>40</td>
                        <td>Md.Rahim</td>
                        <td>2M</td>
                        <td>12-12-2018</td>
                        <td>Mr.Ahmed</td>
                        <td style="text-align:center"> <span class="label label-success">Active</span></td>
                        <td text-align="center">
                            <a href="viva-student.php"class="btn btn-info"><em class="fa fa-list"></em></a>
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

