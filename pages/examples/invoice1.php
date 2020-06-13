<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../../index.php");
}

?>

<?php
include('connection.php');
$r=$_GET['red'];
$query="select * from customer where id='$r'";
$date=mysqli_query($connection,$query);
$add ="";
$em="";
$phne="";
$im="";
while ($res = mysqli_fetch_assoc($date)){
    $add =$res['address'];
    $em=$res['email'];
    $phne=$res['phone'];
    $na=$res['name'];
   $im=$res['file_name'];
}
?>



<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>XorSoft | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();" class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>Mg</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Stock Management</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- Notifications: style can be found in dropdown.less -->
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                          <span class="hidden-xs">Alexander Pierce</span>
                      </a>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                      <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>Admin</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active">
                  <a href="../../index.php">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                      <span class="pull-right-container">

          </span>
                  </a>

              </li>
              <li class="">
                  <a href="../forms/general.php">
                      <i class="fa fa-files-o"></i>
                      <span>Add Customers</span>
                      <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
                  </a>
              </li>
              <li class="">
                  <a href="../forms/general1.php">
                      <i class="fa fa-files-o"></i>
                      <span>Add Clients</span>
                      <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
                  </a>
              </li>

              <li class="">
                  <a href="../../pages/tables/simple.php">
                      <i class="fa fa-pie-chart"></i>
                      <span>Customer Leger</span>
                      <span class="pull-right-container">

          </span>
                  </a>

              </li>
              <li class="">
                  <a href="../../pages/tables/simple1.php">
                      <i class="fa fa-laptop"></i>
                      <span>Personal Leger</span>
                      <span class="pull-right-container">
          </span>
                  </a>
              </li>
              <li class="">
                  <a href="../../pages/tables/customerdue.php">
                    <i class="fa fa-credit-card"></i>
                    <span>Customer Due List</span>
                    <span class="pull-right-container">

                    </span>
                  </a>

                </li>
                <li class="">
                  <a href="../../pages/tables/clientdue.php">
                    <i class="fa fa-credit-card"></i>
                    <span>Client Due List</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>
              <li class="">
                  <a href="../forms/print.php">
                      <i class="fa fa-edit"></i> <span>Invoice</span>
                      <span class="pull-right-container">
          </span>
                  </a>

              </li>
              <li class="">
                  <a href="../../pages/tables/simple2.php">
                      <i class="fa fa-edit"></i> <span>Invoice List</span>
                      <span class="pull-right-container">
          </span>
                  </a>

              </li>

              <li class="">
                  <a href="../../pages/tables/simple3.php">
                      <i class="fa fa-edit"></i> <span>Account</span>
                      <span class="pull-right-container">
          </span>
                  </a>

              </li>



              <li class="treeview">
                  <a href="#">
                      <i class="glyphicon glyphicon-list-alt"></i> <span>Bank</span>
                      <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="../../pages/examples/bank.php"><i class="fa fa-circle-o"></i> Bank Add & Summary</a></li>
                      <li><a href="../../pages/examples/bank_history.php"><i class="fa fa-circle-o"></i> Bank Transaction </a></li>
                  </ul>
              </li>

              <li>
                  <a href="../../pages/tables/stock_add_3.php">
                      <i class="fa fa-calendar"></i> <span>Stock Update</span>
                      <span class="pull-right-container">

            </span>
                  </a>
              </li>


              <li class="treeview">
                  <a href="#">
                      <i class="glyphicon glyphicon-list-alt"></i> <span>Personal SMS Services</span>
                      <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="../../pages/tables/clsms.php"><i class="fa fa-circle-o"></i> Client </a></li>
                      <li><a href="../../pages/tables/csms.php"><i class="fa fa-circle-o"></i>Customer </a></li>
                      <li><a href="../../pages/tables/inbox.php"><i class="fa fa-circle-o"></i>SMS History </a></li>

                  </ul>
              </li>



              <li>
                  <a href="../calendar.php">
                      <i class="fa fa-calendar"></i> <span>Calendar</span>
                      <span class="pull-right-container">

          </span>
                  </a>
              </li>


              <li>
                  <a href="../../pages/forms/changepass.php">
                      <i class="fa fa-th"></i> <span>Settings</span>
                      <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
                  </a>
              </li>











              <li>
                  <a href="login.php">
                      <i class="fa fa-th"></i> <span>Log Out</span>
                      <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
                  </a>
              </li>


          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="invoice" id="HTMLtoPDF">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Invoice.
            <small class="pull-right"><p id="date"></p>
                <script>
                    document.getElementById("date").innerHTML = Date();
                </script></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- title row -->
      <div class="row" >
          <div class="col-md-12">
            <div class="page-header">
              <h2 style=" text-align: center;">মের্সাসঃ ভাই ভাই সীডস্</h2>
              <h3 style=" text-align: center;"> প্রোঃ মোঃ আল-আমিন শেখ </h3>
              <h4 style=" text-align: center;">গোনারহাট রামপাল বাগেরহাট</h4>
              <h5 style=" text-align: center;">01711812282 01972812282</h5>
              <h6 style=" text-align: center;">bhaibhaiseeds@gmail.com</h6>

            </div>
              <h2 class="">

              </h2>
          </div>
          <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          To,
          <address>
        <?php echo "
                    <strong>".$na."</strong><br>"
              .$add."<br>"
              .$em."<br>"
             . $phne."<br>



        ";


        ?>

          </address>
        </div>
        <!-- /.col -->

        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
            <img class="profile-user-img img-responsive img-circle" src="../forms/images/<?php echo $im ?>" height="128" width="128" alt="User profile picture">

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ক্রয় & জমা বিবরনি</h4>
        <div class="col-xs-6 table-responsive">
          <table class="table table-striped">
              <tr>
                  <th>
                      ক্রয় তারিখ
                  </th>
                  <th>
                      বিবরণ
                  </th>
                  <th>
                      পরিমাণ
                  </th>
                  <th>
                      টাকা
                  </th>
                  <th>
                   মোট টাকা
                  </th>
              </tr>
              <?php
              $total=0;
              $query="select * from record1 where cid='$r' ORDER BY date DESC";
              $date=mysqli_query($connection,$query);
              while ($res = mysqli_fetch_assoc($date)){
                  echo "<tr>
                         <td>".$res['date']."</td>
                         <td>".$res['purpose']."</td>
                         <td>".$res['quantity']."</td>
                           <td>".$res['amount']."</td>
                             <td>".$res['total']."</td>
                         </tr>";
                  $total=$total+(double)$res['total'];


              }


              ?>

          </table>
        </div>
          <div class="col-xs-6 table-responsive">
              <table class="table table-striped">
                  <tr>
                      <th>
                          জমা তারিখ
                      </th>
                      <th>
                          বিবরণ
                      </th>
                      <th>
                          টাকা
                      </th>
                  </tr>
                  <?php
                  $total1=0;
                  $query="select * from record2 where cid='$r' ORDER BY date DESC";
                  $date=mysqli_query($connection,$query);
                  while ($res = mysqli_fetch_assoc($date)){
                      echo "<tr>
                         <td>".$res['date']."</td>
                         <td>".$res['purpose']."</td>
                         <td>".$res['amount']."</td>
                         </tr>";
                      $total1=$total1+(double)$res['amount'];


                  }


                  ?>

              </table>
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">

        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Total Calculation</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">সর্বমোট টাকা:</th>
                <td> <?php echo $total ?></td>
              </tr>
              <tr>
                <th>পরিশোধিত: </th>
                <td> <?php echo $total1 ?></td>
              </tr>
              <tr>
                <th>বকেয়া:</th>
                <td><?php echo $total-$total1?></td>
              </tr>

            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>


      <!-- /.row -->

      <!-- this row will not appear when printing -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://www.atlassoftwarepark.com/">Atlas Software Park</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="jspdf.js"></script>
<script src="jquery-2.1.3.js"></script>
<script src="pdfFromHTML.js"></script>
</body>
</html>
