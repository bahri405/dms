
  <body>
    <header>
      <!-- nav 1 -->
      <nav>
        <ul class="nav justify-content-end container-fluid bg-warning">
        <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url('auth'); ?>">Sing up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url('auth'); ?>">Log in</a>
          </li>
        </ul>
      </nav>
      <!-- nav 2 -->
      <nav class="navbar navbar-light bg-warning">
        <div>
          <a class="navbar-brand d-flex">
            <img
              width="50"
              height="50"
              class="rounded-circle"
              src="assets/img/logo.jpg"
              alt=""
            />
            <h3>DiaryCoffee</h3>
          </a>
        </div>
        <form class="form-inline">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </nav>
      <!-- nav 3 -->
      <nav class="container-fluid">
        <ul class="nav justify-content-center bg-secondary my-3 rounded">
          <?php foreach($kategori as $k) : ?>
            <li class="nav-item">
            <a class="nav-link text-warning" href="#"><?= $k['nama']; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </header>

    <main class="container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm col-lg-2">
            <h3 class="mb-3">Lokasi</h3>
            <ul class="list-group ">
              <a href=""><li class="list-group-item text-dark">Jakarta Timur</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Selatan</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Barat</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Utara</li></a>
              <a href=""><li class="list-group-item text-dark">Jakarta Pusat</li></a>
            </ul>
          </div>
          <div class="col-sm col-lg-10">
            <div class="row my-5">
            <?php foreach ($kedai as $item ) : ?>
              <div class="col-4 mb-3">
                <div class="card">
                    <img
                    height="250"
                    src="<?= base_url(). '/assets/img/'. $item['poster']; ?>"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title"><?= $item['nama']; ?></h5>
                    <p class="card-text">Alamat : <?= $item['alamat']; ?></p>
                    <span class="badge badge-info"><?= $item['kategori_nama']; ?></span>
                    <a href="<?= base_url('kedai/detail/'); ?><?= $item['id']; ?>" class="text-dark btn btn-outline-secondary btn-block btn-sm">Read me</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </main>


