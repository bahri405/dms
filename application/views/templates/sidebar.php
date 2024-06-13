<!-- nav link -->
<ul class="navbar-nav">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">  
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item  mx-3 d-none d-sm-inline-block">
        <a href="<?= base_url('user'); ?>" class="nav-link text-dark">Home</a>
      </li>
  </nav>
</ul>  

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary bg-info elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user'); ?>" class="brand-link">
      <img src="<?= base_url('assets/img/logo.jpg'); ?>" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DiaryCoffee</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/img/').$user['image']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hi <?= $user['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <?php if($_SESSION['role_id'] == 1): ?>
          <li class="nav-item">
            <a href="<?= base_url('admin'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dasboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('kedai'); ?>" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                List Kedai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('kategori'); ?>" class="nav-link">
              <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
      <?php elseif($_SESSION['role_id'] == 2): ?>
          <li class="nav-item">
            <a href="<?= base_url('user/profile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/edit'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Edit Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/kedai'); ?>" class="nav-link">
              <i class="nav-icon fas fa-coffee"></i>
              <p>
                Daftar Kedai
              </p>
            </a>
          </li>
          <?php endif ?>
          <li class="nav-item">
            <a href="<?= base_url('auth/logout'); ?>" class="nav-link bg-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card mt-3 ">
        <div class="card-header mb-3">
          <h3 class="card-title"><?= $title; ?></h3>
          <div class="card-tools ">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        
        <!-- /.card-body -->
