<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="nav-item">
        <i class="fa fa-user-circle nav-icon" style="font-size:36px;color:white;"></i>
    </div>
  
    <div class="info">
      <a href="#" class="d-block"><?php echo $_SESSION['nama'] . ' | ' . $_SESSION['level']; ?></a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <?php
  if ($_SESSION['level'] == 'superadmin') {
    include('menu/superadmin.php');
  } else {
    include('operator/operator.php');
  }
  ?>
  <!-- /.sidebar-menu -->
</div>