<?php $page_title = "Viva List"; ?>
<?php $this_page = "halls"; ?>
<?php $sub_menu_page = "femalehall"; ?>
<?php include_once 'templates/header.php'; ?>

<div class="col-lg-12">
    <h4>Female Hall Seat Plan</h4>
    <hr>
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6 text-left">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">
                        Add New</button>
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
                        <th>Floor No</th>
                        <th> Room No</th>
                        <th>Seats</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Level-1</td>
                        <td>Room-150</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">1</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">2</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create"disabled>3</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">4</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">5</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">6</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>151</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">1</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">2</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">3</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">4</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">5</button>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success btn-create">6</button>
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
                <h4 class="modal-title text-center" id="myModalLabel">Add New Student</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Student ID</label>
                        <input type="text" class="form-control" id="inputName" />
                    </div>
                    <div class="form-group">
                        <label for="inputName">Effected From</label>
                        <input type="date" class="form-control" id="inputName" />
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