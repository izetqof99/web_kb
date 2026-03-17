<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php'); ?>
<?php include('../conf/config.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <?php include('content_header.php') ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='data_ibu_hamil'){
        include('data_ibu_hamil.php');
      }
      else if($_GET['page']=='data_kbpp'){
        include('data_kbpp.php');
      }
      else if($_GET['page']=='data_kader'){
        include('data_kader_admin.php');
      }
      else if($_GET['page']=='edit_data'){
        include('edit/edit_data.php');
      }
      else if($_GET['page']=='edit_kbpp'){
        include('edit/edit_kbpp.php');
      }
      else if($_GET['page']=='edit_kader'){
        include('edit/edit_kader.php');
      }
      else{
        include('dashboard.php');
      }
    }
    else{
      include('dashboard.php');
    }?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>