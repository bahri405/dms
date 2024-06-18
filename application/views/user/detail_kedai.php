

<body class="portfolio-details-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="<?= base_url('home'); ?>" class="logo d-flex align-items-center">
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

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Kedai Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('home'); ?>">Home</a></li>
            <li class="current">Kedai Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="<?= base_url('assets/img/').$kedai['poster']; ?>" class="img-fluid" style="width: 100%; height: 500px;">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url('assets/img/').$kedai['poster2']; ?>" class="img-fluid" style="width: 100%; height: 500px;">
            </div>

            <div class="swiper-slide">
              <img src="<?= base_url('assets/img/').$kedai['poster3']; ?>" class="img-fluid" style="width: 100%; height: 500px;">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col" data-aos="fade-up">
            <div class="portfolio-description ">
              <h2 class="m-0">Nama Kedai :  <?= $kedai['nama']; ?></h2>
              <p class="m-0">Lokasi :  <?= $kedai['alamat']; ?></p>
              <p class="m-0">Deskripsi :  <?= $kedai['bio']; ?></p>
              <span class="badge badge-info "><?= $kedai['kategori_nama']; ?></span>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
            <?= form_open('user/add_review'); ?>
              <input type="hidden" name="kedai_id" value="<?= $kedai['id']; ?>">
                <div class="form-group">
                <label >Berikan Review</label>
                <textarea name="content" class="form-control" placeholder="Tulis komentar ..."></textarea>
            <?= form_error('content','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Berikan Point</label>
            <input type="number" name="point" placeholder=" 0/10" class="form-control">
            <?= form_error('point','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
    <?= form_close(); ?>
            </div>
          </div>
        <h3 class="mt-3">List Reviews</h3>
        <?php if (!empty($review)): ?>
            <div class="row" >
            <?php foreach ($review as $r): ?>
                <div class="col-12 my-2" style="border:1px solid black;">
                    <div class="media mt-1">
                        <img src="<?= base_url('assets/img/').$r['user_image']; ?>" class="align-self-start mr-3" style="border-radius: 50%; height:100px; width:100px;">
                        <div class="media-body ">
                        <h3 class="mt-0"><?= $r['name']; ?></h3>
                        <hr>
                        <p class="m-3"><?= $r['content']; ?></p>
                        <p class="m-3 badge badge-success"><?= $r['point']; ?> / 10</p>
                        
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>tidak ada review</p>
        <?php endif; ?>
    </div>
</div>
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

