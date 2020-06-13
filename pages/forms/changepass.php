<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:../../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
                <li class="">
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

                <li class="active">
                    <a href="../../pages/forms/changepass.php">
                        <i class="fa fa-th"></i> <span>Settings</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
                    </a>
                </li>


                <li>
                    <a href="../../pages/examples/login.php">
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
                            <h3 style="text-align: center">Stock Management</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <?php
                        include("connection.php");
                        $old = $_SESSION['user'];
                        $n = "";
                        $query1 = mysqli_query($connection, "select * from user where email='$old'");
                        while ($row = mysqli_fetch_assoc($query1)) {
                            $n = $row['email'];
                        }

                        ?>

                        <form method="post">

                            <div class="box-body">

                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" name="email" value="<?php echo $n ?>">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="pass2" placeholder="Old Password"
                                           required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>


                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="pass" placeholder="New Password"
                                           required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" name="pass1"
                                           placeholder="Retype password" required>
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>


                                <div class="form-group">


                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">GO</button>
                                </div>

                            </div>
                        </form>


                        <?php

                        if (isset ($_POST['submit'])) {


                            $email = $_POST['email'];
                            $pass = $_POST['pass'];
                            $pass1 = $_POST['pass1'];
                            $old = $_SESSION['user'];
                            $oldp = $_POST['pass2'];
                            if ($oldp == $_SESSION['password']) {


                                if ($pass == $pass1) {
                                    $query1 = mysqli_query($connection, "update user set email='$email',password='$pass' where email='$old'");
                                    $_SESSION['user'] = $email;
                                    echo '<script type="text/javascript">';
                                    echo ' alert("Passowrd Change successfully")';  //not showing an alert box.

                                    echo '</script>';

                                    echo "Please Reload the page <button onclick='location.reload()'>Reload</button>";
                                    $_SESSION['password'] = $pass;

                                } else {
                                    echo "Password are not same. Re enter the password ";
                                }
                            } else {
                                echo "Old Password is not same. Re enter the password ";
                            }


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
        <strong>Copyright &copy; 2019-2020 <a href="https://www.atlassoftwarepark.com/">Atlas Software
                Park</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
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
</body>
</html>
