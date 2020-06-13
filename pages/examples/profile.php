<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../../index.php");
}

?>

<?php


include('connection.php');

error_reporting(0);
$_GET['xxx'];
$_GET['red'];
$_GET['rex'];
$r = $_GET['re'];
$query = "select * from customer where id='$r'";
$date = mysqli_query($connection, $query);
$add = "";
$em = "";
$phne = "";
$im = "";
while ($res = mysqli_fetch_assoc($date)) {
    $add = $res['address'];
    $em = $res['email'];
    $phne = $res['phone'];
    $na = $res['name'];
    $im = $res['file_name'];;

}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | User Profile</title>
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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                        <li><a href="../../pages/examples/bank.php"><i class="fa fa-circle-o"></i> Bank Add &
                                Summary</a></li>
                        <li><a href="../../pages/examples/bank_history.php"><i class="fa fa-circle-o"></i> Bank
                                Transaction </a></li>
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
                User Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Customer profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div>
                    <div class="">

                        <!-- Profile Image -->
                        <div class="col-md-6">
                            <div class="box box-primary p">
                                <div class="box-body box-profile">
                                    <h3 class="profile-username text-center"><?php ?></h3>


                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Address</b> <a class="pull-right"><?php echo $add; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Phone</b> <a class="pull-right"><?php echo $phne; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="pull-right"><?php echo $em; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="box box-primary p">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle"
                                         src="../forms/images/<?php echo $im ?>" height="128" width="128"
                                         alt="User profile picture">
                                    <?php
                                    echo "<h3 text-align='center'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" . $na . "</h3>";


                                    ?>

                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>
                        <!-- /.box -->

                        <!-- About Me Box -->

                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-md-6">
                    <form method="post">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Due Field</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="date" name="date" class="form-control pull-right" id="datepicker"
                                               required>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" name="pur" class="form-control" placeholder="Purpose"
                                               required>
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="quantity" class="form-control" placeholder="Quantity"
                                               required>
                                    </div>


                                    <div class="col-xs-3">
                                        <input type="text" name="amount" class="form-control" placeholder="amount"
                                               required>
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" name="submit2" value="Add"
                                                class="btn btn-block btn-danger">Add
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </form>

                    <?php
                    $total = 0;
                    $total1 = 0;

                    if (isset ($_POST['submit2'])) {


                        $age = mysqli_real_escape_string($connection, $_POST['date']);
                        $Email = mysqli_real_escape_string($connection, $_POST['pur']);
                        $HomeTown = mysqli_real_escape_string($connection, $_POST['amount']);
                        $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
                        $cal = (double)$quantity * (double)$HomeTown;

                        $total1 = $total1 + (double)$HomeTown;
                        $name = $na;
                        $phone = (double)$phne;
                        $sms = "Dear customer,\nAssalamualikum. You are purchased " . $cal . " BDT product.\n \nThanks Bhai-bhaiseeds";

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
//echo $smsresult;

//Error Display
//echo curl_error($ch);

                        $phone = $phne;

//header("location:../tables/clsms.php");
                        date_default_timezone_set('Asia/Dhaka');
                        $d = date("Y-m-d");
                        $t = date("h:i:sa");
                        $query = mysqli_query($connection, "insert into inbox values (NULL,'$name','$phone','$d','$t','$sms')");


                        $query1 = mysqli_query($connection, "insert into record1 values(NULL,'$age','$Email','$HomeTown','$r','$quantity','$cal')");


                    }

                    ?>


                </div>
                <div class="col-md-6">
                    <form method="post">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Collection Field</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="date" name="date" class="form-control pull-right" id="datepicker"
                                               required>
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" name="pur" class="form-control" placeholder="Purpose"
                                               required>
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="text" name="amount" class="form-control" placeholder="amount"
                                               required>
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="submit" name="submit1" value="Add"
                                                class="btn btn-block btn-success">Add
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </form>


                </div>


                <?php
                if (isset ($_POST['submit1'])) {
                    $age = mysqli_real_escape_string($connection, $_POST['date']);
                    $Email = mysqli_real_escape_string($connection, $_POST['pur']);
                    $HomeTown = mysqli_real_escape_string($connection, $_POST['amount']);


                    $total = 0;
                    $total1 = 0;
                    $query = "select * from record1 where cid='$r' ORDER BY date DESC";
                    $date = mysqli_query($connection, $query);
                    while ($res = mysqli_fetch_assoc($date)) {
                        $total = $total + (double)$res['total'];

                    }

                    $query = "select * from record2 where cid='$r' ORDER BY date DESC";
                    $date = mysqli_query($connection, $query);
                    while ($res = mysqli_fetch_assoc($date)) {

                        $total1 = $total1 + (double)$res['amount'];
                    }


                    $tbbb = 0;

                    $total1 = $total1 + (double)$HomeTown;
                    $tbbb = $total - $total1;
                    $name = $na;
                    $phone = (double)$phne;
                    $sms = "Dear customer,\nAssalamualikum.Today You Pay " . $HomeTown . " BDT & Your due " . $tbbb . " BDT.\nThanks Bhai-bhaiseeds";

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
//echo $smsresult;

//Error Display
//echo curl_error($ch);

                    $phone = $phne;

//header("location:../tables/clsms.php");
                    date_default_timezone_set('Asia/Dhaka');
                    $d = date("Y-m-d");
                    $t = date("h:i:sa");
                    $query = mysqli_query($connection, "insert into inbox values ('','$name','$phone','$d','$t','$sms')");


                    $query1 = mysqli_query($connection, "insert into record2 values(NULL,'$age','$Email','$HomeTown','$r')");


                }

                ?>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="nav-tabs-custom box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Purpose
                                </th>
                                <th>
                                    Quantity
                                </th>

                                <th>
                                    Amount(Per Quantity)
                                </th>

                                <th>
                                    Total Amount
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            <?php
                            $total = 0;
                            $query = "select * from record1 where cid='$r' ORDER BY date DESC";
                            $date = mysqli_query($connection, $query);
                            while ($res = mysqli_fetch_assoc($date)) {
                                echo "<tr>
                         <td>" . $res['date'] . "</td>
                         <td>" . $res['purpose'] . "</td>
                         <td>" . $res['quantity'] . "</td>
                          <td>" . $res['amount'] . "</td>
                           <td>" . $res['total'] . "</td>
                         <td>
                         <a onclick='javascript:confirmationDelete($(this));return false;' href='delete.php?xxx=$res[Serial]'><div class='col-md-3 col-sm-4'><i class='fa fa-fw fa-remove'></i></a> </td>
                         
                         </tr>";
                                $total = $total + (double)$res['total'];


                            }


                            ?>


                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nav-tabs-custom box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Purpose
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $total1 = 0;
                            $query = "select * from record2 where cid='$r' ORDER BY date DESC";
                            $date = mysqli_query($connection, $query);
                            while ($res = mysqli_fetch_assoc($date)) {
                                echo "<tr>
                         <td>" . $res['date'] . "</td>
                         <td>" . $res['purpose'] . "</td>
                         <td>" . $res['amount'] . "</td>
                         <td><a  onclick='javascript:confirmationDelete($(this));return false;' href='delete1.php?xxx=$res[Serial]'><div class='col-md-3 col-sm-4'><i class='fa fa-fw fa-remove'></i></a> </td>
                         </tr>";
                                $total1 = $total1 + (double)$res['amount'];
                            }


                            ?>


                        </table>

                    </div>
                </div>

            </div>
            <div class="row box">
                <h4 style="text-align: center">Total Amount: <?php echo $total ?></h4>
                <h4 style="text-align: center">Total Payment: <?php echo $total1 ?> </h4>

                <h4 style="text-align: center">Total Due: <?php echo $total - $total1 ?></h4>
                <?php echo "
      <h2 style='text-align: right; padding-right:30px'>
          <form action='sendsms1.php' method='post'>
      <input type='hidden' name='a' value='" . $total . "'>
            <input type='hidden' name='b' value='" . $total1 . "'>
      <input type='hidden' name='c' value='" . $na . "'>
      <input type='hidden' name='d' value='" . $phne . "'>

      <input type='submit' class='btn btn-warning' value='Send SMS'> 
</form>
      
      
        <a href='search.php?rex=$r'>  <button class='btn btn-danger'>Monthly Search Report</button></a> 

     <a href='search.php?rex=$r'>  <button class='btn btn-success'> Search</button></a> 
     <a href='invoice1.php?red=$r'> <button class='btn btn-primary'>Print </button> </a></h2>
  "; ?>

            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2019-2020 <a href="https://www.atlassoftwarepark.com/">Atlas Software
                Park</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->
<script>
    function confirmationDelete(anchor) {
        var conf = confirm('Are you sure want to delete this record?');
        if (conf)
            window.location = anchor.attr("href");
    }
</script>
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
