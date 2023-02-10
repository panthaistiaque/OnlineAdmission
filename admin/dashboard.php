<?php $page_title = "Subject-Preference-Collection"; ?>
<?php $this_page = "dashboard"; ?>
<?php include_once 'templates/header.php'; ?>
<?php 
require_once 'get-data.php';
$unit=$_SESSION['admin_unit'];
$count=getCount($unit);
?>
<style>
  .card-counter {
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    transition: .3s linear all;
  }

  .card-counter:hover {
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary {
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger {
    background-color: #ef5350;
    color: #FFF;
  }

  .card-counter.success {
    background-color: #66bb6a;
    color: #FFF;
  }

  .card-counter.info {
    background-color: #26c6da;
    color: #FFF;
  }

  .card-counter i {
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers {
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name {
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  body{
    height:100vh!important;
  }
</style>
<div class="col-lg-12">
  <!-- <div class="jumbotron text-center">
    <h1>WELCOME</h1> 
    <h2><?php echo ($_SESSION['admin_name']); ?></h2> 
    <p><?php echo ($_SESSION['admin_role']); ?></p> 
  <p>Unit: <?php echo ($_SESSION['admin_unit']); ?></p> 
  </div> -->
 
    <div class="col-md-4">
      <div class="card-counter primary">
        <i class="fa fa-graduation-cap"></i>
        <span class="count-numbers"><?php echo $count['total_student']; ?></span>
        <span class="count-name">Total Student <?php echo date("Y"); ?></span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers"><?php echo $count['admission_done']; ?></span>
        <span class="count-name">Admission Done</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?php echo ($count['total_student']-$count['admission_done']); ?></span>
        <span class="count-name">Admission Pending</span>
      </div>
    </div>
  </div>
</div>

<?php include_once 'templates/footer.php'; ?>
