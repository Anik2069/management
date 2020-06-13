<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../../index.php");
}

?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
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
<body class="hold-transition skin-blue sidebar-mini">
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
    <section class="content-header">
      <h1>
        Add Customers Information
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

        </div>
        <!-- left column -->
        <div class="col-md-6 ">
          <!-- general form elements -->
          <div class="box box-primary ">
            <div class="box-header with-border">
              <h3  style="text-align: center">Stock Management</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

<?php

include ('connection.php');
$sql = "SELECT bid FROM client1 order by bid desc limit 1 ";
     $result = mysqli_query($connection, $sql);

     if (mysqli_num_rows($result)>0) {


         while($row = mysqli_fetch_assoc($result)) {

             $newid = $row['bid'] +1;
         }
     }
     else {
         $newid=100;
     }
$newid=$newid-1;
error_reporting(0);
$_GET['red'];

$query1 = "select * from client1 where bid='$newid'";
$result1 = mysqli_query($connection, $query1);
$name = " ";
$address = "";
$phone ="";
$email = "";

$date="";
while($data=mysqli_fetch_assoc($result1)){
    $name =   $data['name'];
    $address =   $data['address'];
    $phone =  $data['phone'];
    $email = $data['email'];

    $date=$data['date'];





}

?>


              <div class="box-body">
                <div class="form-group">
                  <label for="cname">Date</label>
                  <input type="text" class="form-control" id="date" name="date" value="<?php echo $date?>" disabled>
                </div>

                <div class="form-group">
                  <label for="cname">Bill id</label>
                  <input type="text" class="form-control"  name="bid" value=<?php echo $newid?> disabled>
                </div>

                <div class="form-group">
                  <label for="cname">Customer Name</label>
                  <input type="text" class="form-control" id="cname" name="cname" value=<?php echo $name?> disabled>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" value=<?php echo $address?> disabled>
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" value=<?php echo $phone?> disabled>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" class="form-control" id="email" name="email" value=<?php echo $email?>  disabled >
                </div>
                <div class="form-group">

                <label>Product Details</label> <br>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>


              </div>
               <form action="" method="post">
                   <div class="form-group">
                       <br>
                     <td>
                         <input type="text" class="form-control" name="purpose1" placeholder="name"  >

                     </td>
                       <td>
                           <input type="text" class="form-control"  name="quantity1" placeholder="quantity"  >
                       </td>
                       <td>
                           <input type="text" class="form-control"  name="amount1" placeholder="amount"  >
                       </td>
                       <td>
                         <button type="submit" value="submit"  name="submit" class="btn btn-block btn-success">Add</button>

                       </td>











                   </div>
                   </table>

               </form>

                  <?php
                  if(isset ($_POST['submit'])){

                      $purpose1 = $_POST['purpose1'];
                      $quantity1 = $_POST['quantity1'];
                      $amount1 = $_POST['amount1'];
                      $cal=(double)$quantity1*(double)$amount1;
                      $query1 = "INSERT INTO record5 VALUES(NULL,'$date','$purpose1', '$quantity1','$amount1','$newid','$cal')";
                      $result = mysqli_query($connection, $query1);


                  }

                  ?>
                <div class="form-group">
                  <br>
                  <label>Product View</label> <br>
                   <table class="table table-striped">
                       <tr>
                           <th>Name</th>
                           <th>Quantity</th>
                           <th>Unit Price</th>
                           <th>Total</th>
                           <th>Action</th>


                       </tr>

                </div>
                  <?php
                  $total=0;
                  $query1 = "select * from record5 where cid='$newid'";
                  $result = mysqli_query($connection, $query1);
                  while($data=mysqli_fetch_assoc($result)){
                     $total=(double)$data['total']+$total;
                      echo "<tr>
                           <th>".$data['purpose']."</th>
                           <th>".$data['quantity']."</th>
                           <th>".$data['amount']."</th>
                            <th>".$data['total']."</th>
                           <th>

                  <a onclick='javascript:confirmationDelete($(this));return false;' href='delete.php?red=$data[Serial]'><div class='col-md-3 col-sm-4'><i class='fa fa-fw fa-remove'></i></a> </td>


</th>


                       </tr>";





                  }
                  ?>




                  </table>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <h2 style='text-align: right; padding-right:30px'>
                    <form method="post">
                        <input type="hidden" name="bal1" value="<?php echo $phone;?>">
                        <input type="hidden" name="bal2" value="<?php echo $name;?>">

                        <input type="hidden" name="bal" value="<?php echo $total;?>">
                        <input type="submit" class="btn btn-warning" value="SMS" name="submit1">
                    </form>
                    <button class='btn btn-default'><a href='../examples/invoice.php'>Print</a> </button></h2>

              </div>

          </div>





<?php
if(isset($_POST['submit1'])){

include "connection.php";


$name = $_POST['bal2'];
$phone = (double)$_POST['bal1'];

$a = $_POST['bal'];
$sms = "Dear " . $name . ",\nAssalamualikum.You are purchased " . $a . " BDT product from bhai-bhaiseeds.\nThank You.\n Powered by Team Atlas Software Park.";
$to = $phone;
$token = "ff5cdfa30225fbc5575facf8a181ae34";
$message = $sms;

$url = "http://api.greenweb.com.bd/api.php";


$data = array(
    'to' => "$to",
    'message' => "$message",
    'token' => "$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result

    $phone = $_POST['bal1'];

//header("location:../tables/clsms.php");
date_default_timezone_set('Asia/Dhaka');
$d = date("Y-m-d");
$tu = date("h:i:sa");
$query = mysqli_query($connection, "insert into inbox values ('','$name','$phone','$d','$tu','$sms')")
?>
            <script type="text/javascript">
                window.alert("Message Send Successfully!!!");
            </script>
<?php
            }
?>











        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://www.atlassoftwarepark.com/">Atlas Software Park</a>.</strong> All rights
    reserved.
  </footer>
</div>



<script>
    function confirmationDelete(anchor)
    {
        var conf = confirm('Are you sure want to delete this record?');
        if(conf)
            window.location=anchor.attr("href");
    }
</script>
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
</body>
</html>
