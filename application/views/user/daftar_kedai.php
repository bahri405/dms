
<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">admin@email.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>085714416493</span></i>
        </div>
        
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url('user'); ?>" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="<?= base_url('assets/img/logo.jpg'); ?>">
          <h1 class="sitename">DiaryCoffee</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="<?= base_url('user'); ?>" class="active">Home<br /></a>
            </li>
            <li class="dropdown">
              <a href="#">
                <span>Hi <?= $user['name']; ?></span>
                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <?php if($_SESSION['role_id'] == 1) : ?>
                <li><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
                <?php endif;?>
                <li><a href="<?= base_url('user/profile'); ?>">My Profile</a></li>
                <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
      <div class="row mb-4">
          <div class="col-3">
          <?= form_open('home/kedai'); ?>
                    <div class="input-group input-group-sm">
                      <input type="text" class="form-control" placeholder="Cari Kedai Kopi" aria-label="Recipient's username" name="keyword" aria-describedby="basic-addon2" >
                      <button type="submit" class="btn btn-sm btn-outline-primary warna2 text-dark">Telusuri</button>
                    </div>
          <?= form_close(); ?>
          </div>
        </div>
        
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <a class="text-dark" href="<?= base_url('user/kedai'); ?>">
              <li>All</li>
            </a>
            <?php foreach($kategori as $k) : ?>
              <a class="mx-3 text-dark" href="<?= base_url('user/filter_by_category/'). $k['id']; ?>">
                <li><?= $k['nama']; ?></li>
              </a>
            <?php endforeach; ?>
          </ul><!-- End Portfolio Filters -->
          
          <?php if (!empty($kedai)): ?>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          
          <?php foreach ($kedai as $item ) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <h3 class="p-1"> 
              <?= substr($item->nama,0,26) ; ?>
                <?php if(strlen($item->nama)> 26): ?>
                ...
                <?php endif; ?>
              </h3>
              <img src="<?= base_url(). '/assets/img/'. $item->poster; ?>" class="img-fluid" style="width: 100%; height: 500px;">
              <div class="portfolio-info">
                <h4><?= $item->nama; ?></h4>
                <p class="text-success"><?= $item->kategori_nama; ?></p>
                <p >
                <?= substr($item->bio,0,120) ; ?>
                <?php if(strlen($item->bio)> 120): ?>
                ...
                <?php endif; ?>
                </p>
                
                <a href="<?= base_url('user/detail_kedai/'); ?><?= $item->id; ?>" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
          <?php endforeach; ?>
          </div><!-- End Portfolio Container -->
        </div>
      </div>
      <?php else: ?>
            
        <div class="container " style="height: 200px;" >
                <h4 class="text-center p-4 text-danger">Tidak ada kedai yang ditemukan.</h4>
        </div><!-- End Portfolio Item -->
            
      <?php endif; ?>

    </section><!-- /Portfolio Section -->

  </main>



