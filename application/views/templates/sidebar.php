

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('home'); ?>" class="brand-link">
      <img src="<?= base_url('assets/img/logo2.png'); ?>" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
      <?php endif ?>
          <li class="nav-item">
            <a href="<?= base_url('user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-coffee"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-coffee"></i>
              <p>
                Kedai
              </p>
            </a>
          </li>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $title; ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        </div>
        <!-- /.card-body -->
 