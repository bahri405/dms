
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
            <li>
              <a href="<?= base_url('user/kedai'); ?>" class="active">Kedai<br /></a>
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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/hero/bg3.jpg'); ?>" alt="">
          <div class="container mt-5 text-center text-white">
            <h1>Welcome <span class="text-danger">DiaryCoffee</span></h1>
            <h3><span class="text-danger">Cari Kedai Kopi</span> Impianmu disini</h3>
                <div class="col-md-4 offset-md-4">
                <?= form_open('user/kedai'); ?>
                    <div class="input-group input-group-sm my-4">
                      
                      <input type="text" class="form-control" placeholder="Cari Kedai Kopi" aria-label="Recipient's username" name="keyword" aria-describedby="basic-addon2" >
                      <button type="submit" class="btn btn-outline-danger warna2 text-white">Telusuri</button>
                      
                    </div>
                <?= form_close(); ?>
                </div>
            </div>
        </div><!-- End Carousel Item -->
        
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/hero/bg-2.jpeg'); ?>" alt="">
          <div class="container mt-5 text-center text-white">
            <h1>Welcome <span class="text-danger">DiaryCoffee</span></h1>
            <h3><span class="text-danger">Cari Kedai Kopi</span> Impianmu disini</h3>
                <div class="col-md-4 offset-md-4">
                <?= form_open('user/kedai'); ?>
                    <div class="input-group input-group-sm my-4">
                      
                      <input type="text" class="form-control" placeholder="Cari Kedai Kopi" aria-label="Recipient's username" name="keyword" aria-describedby="basic-addon2" >
                      <button type="submit" class="btn btn-outline-danger warna2 text-white">Telusuri</button>
                      
                    </div>
                <?= form_close(); ?>
                </div>
            </div>
        </div><!-- End Carousel Item -->
        
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/hero/bg-1.jpg'); ?>" alt="">
          <div class="container mt-5 text-center text-white">
            <h1>Welcome <span class="text-danger">DiaryCoffee</span></h1>
            <h3><span class="text-danger">Cari Kedai Kopi</span> Impianmu disini</h3>
                <div class="col-md-4 offset-md-4">
                <?= form_open('user/kedai'); ?>
                    <div class="input-group input-group-sm my-4">
                      
                      <input type="text" class="form-control" placeholder="Cari Kedai Kopi" aria-label="Recipient's username" name="keyword" aria-describedby="basic-addon2" >
                      <button type="submit" class="btn btn-outline-danger warna2 text-white">Telusuri</button>
                      
                    </div>
                <?= form_close(); ?>
                </div>
            </div>
        </div><!-- End Carousel Item -->
        
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container">
        <div class="row gy-4">
            <h2 class="text-center">KATEGORI</h2>
          <?php foreach($kategori as $k) : ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <a href="<?= base_url('user/filter_by_category/'). $k['id']; ?>" class="stretched-link">
                <h3 class="text-center"><?= $k['nama']; ?></h3>
              </a>
              
            </div>
          </div><!-- End Service Item -->
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- /Services Section -->
    <h2 class="text-center">DAFTAR KEDAI</h2>
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
    
          <div class="container">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($kedai as $item ) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div>
                <h3 class="p-1"> 
                <?= substr($item->nama,0,26) ; ?>
                <?php if(strlen($item->nama)> 26): ?>
                ...
                <?php endif; ?>
                </h3>
                <img src="<?= base_url(). '/assets/img/'. $item->poster; ?>" class="img-fluid" style="width: 100%; height: 500px;">
              </div>
              <div class="portfolio-info">
                <h4><?= $item->nama; ?></h4>
                <p class="text-success"><?= $item->kategori_nama; ?></p>
                <p>Lokasi :  <?= $item->alamat; ?></p>
                
                <a href="<?= base_url('user/detail_kedai/'); ?><?= $item->id; ?>" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
          <?php endforeach; ?>
          </div><!-- End Portfolio Container -->
        </div>
        
    </section><!-- /Portfolio Section -->

      <?php if (count($kedai) >= $limit): ?>
          <div class="mb-5 d-flex justify-content-center align-items-center">
          <a class="text-dark p-2 fs-4" href="<?php echo base_url('user/kedai'); ?>">Lihat Selengkapnya...</a>
          </div>
          
        <?php endif; ?>
  </main>

