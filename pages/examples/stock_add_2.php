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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                Bank Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Customer profile</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <!-- /.row -->

            <div class="row">

                <div class="col-md-12">
                    <form method="post" action="pf.php">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Product Buying and Selling stock Information</h3>
                            </div>
                            <div class="box-body">
                                <div class="row">


                                    <div class="col-xs-1">Product Group:

                                    </div>
                                    <div class="col-xs-2"> <select class="form-control" name="bank" onchange="myfun(this.value)">
                                            <option>Select One</option>
                                            <?php
                                            $query = mysqli_query($connection, "select distinct name from gp");
                                            while ($res = mysqli_fetch_assoc($query)) {
                                                ?>

                                                <option value="<?php echo $res['name'] ?>"><?php echo $res['name'] ?></option>

                                            <?php }
                                            ?>
                                        </select>
                                    </div>   <div class="col-xs-1">Product Name:

                                    </div>
                                    <div class="col-xs-2">
                                        <select name="dataset" id="dataset" CLASS="form-control">

                                        </select>
                                    </div>


                                    <div class="col-xs-2">
                                        <button type="submit" name="submit1" value="Add"
                                                class="btn btn-block btn-danger">Go to Next pART
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div

                    </form>

                    <?php
                    if (isset ($_POST['submit'])) {

                        $d = $_POST['date'];
                        $bname = mysqli_real_escape_string($connection, $_POST['bank']);
                        $type = mysqli_real_escape_string($connection, $_POST['dataset']);
                        $id = mysqli_real_escape_string($connection, $_POST['opp']);
                        $bal = mysqli_real_escape_string($connection, $_POST['amount']);


                        $query1 = mysqli_query($connection, "insert into bankhistory values('','$d','$bname','$type','$id','$bal')");

                        if ($id == 'deposit') {
                            $query = mysqli_query($connection, "select * from bank where number='$type'");
                            while ($res = mysqli_fetch_assoc($query)) {
                                $te = (double)$res['balance'] + (double)$bal;
                                $query = mysqli_query($connection, "Update bank set balance='$te' where number='$type'");

                            }

                        } else {
                            $query = mysqli_query($connection, "select * from bank where number='$type'");
                            while ($res = mysqli_fetch_assoc($query)) {
                                $te = (double)$res['balance'] - (double)$bal;
                                $query = mysqli_query($connection, "Update bank set balance='$te' where number='$type'");

                            }
                        }


                    }

                    ?>


                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="nav-tabs-custom box-body table-responsive no-padding">
                        <table id="example1" class="table ">
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Bank Name
                                </th>
                                <th>
                                    Account Number
                                </th>
                                <th>
                                    Operation Number
                                </th>
                                <th>
                                    Amount
                                </th>

                                <th>
                                    Action
                                </th>
                            </tr>
                            <?php
                            $total = 0;
                            $query = "select * from bankhistory ORDER By id desc";
                            $date = mysqli_query($connection, $query);
                            while ($res = mysqli_fetch_assoc($date)) {
                                echo "<tr>
 <td>" . $res['date'] . "</td>
                         <td>" . $res['bname'] . "</td>
                         <td>" . $res['account'] . "</td>
                         <td>" . $res['operation'] . "</td>
                           <td>" . $res['amount'] . "</td>
                   
                         <td>
                         <a onclick='javascript:confirmationDelete($(this));return false;' href='bankdh.php?xxx=$res[id]'><div class='col-md-3 col-sm-4'><i class='fa fa-fw fa-remove'></i></a> </td>
                         </tr>";
                                $total = $total + (double)$res['total'];


                            }


                            ?>


                        </table>
                    </div>
                </div>
            </div>
            <!--    <div class="row box">
                <h4 style="text-align: center">Total Amount: <?php /*echo $total */ ?></h4>
                <h4 style="text-align: center">Total Payment: <?php /*echo $total1 */ ?> </h4>

                <h4 style="text-align: center">Total Due:<?php /*echo $total - $total1 */ ?></h4>
                <?php /*echo "

      <h2 style='text-align: right; padding-right:30px'>
      <a href='search1.php?rex=$r'>  <button class='btn btn-danger'>Monthly Search Report</button></a>

     <a href='search1.php?rex=$r'>  <button class='btn btn-success'> Search</button></a>
     <a href='invoice2.php?red=$r'> <button class='btn btn-primary'>Print </button> </a></h2>
  "; */ ?>

            </div>
-->

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

<script type="text/javascript">
    function myfun(value1) {
        $.ajax({
            url: "new1.php",
            type: "POST",
            data: {datapost: value1},
            success: function (result) {

                $("#dataset").html(result);

            }


        });

    }

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

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

</body>
</html>
