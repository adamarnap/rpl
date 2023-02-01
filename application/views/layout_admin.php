<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Madu Colecction | Roman_LTD</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css');?>">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Pencarian" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Riwayat Pencarian
              </div>
              <div class="search-item">
                <a href="#">Madu TerEnak</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Madu apa yang paling manis</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Cara Membuat Madu</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Hasil
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/download.jpg" alt="product');?>">
                  Madu Hutan Sumatera
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/Kaliandra.jpg" alt="product');?>">
                  Madu Kaliandra
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?php echo base_url('assets/Pahit-Bangka.jpg" alt="product');?>">
                  Madu Pahit Bangka
                </a>
              </div>
              <div class="search-header">
                Proyek
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Admin Roman Company LTD
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Cari Produk Madu Terlengkap Di Website
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Pesan
                <div class="float-right">
                  <a href="#">Tandai semua telah dibaca</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-1.png" class="rounded-circle');?>">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Galang</b>
                    <p>Halo mas!</p>
                    <div class="time">10 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-2.png" class="rounded-circle');?>">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>mau pesen berapa lu? lagi gajian ye?</p>
                    <div class="time">12 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-3.png" class="rounded-circle');?>">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>gausah mikir panjang lebar, gc order bego</p>
                    <div class="time">12 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-4.png" class="rounded-circle');?>">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Endri Firmansyah</b>
                    <p>udah lu order aja , asli ini madu bisa buat lu puas dahh.</p>
                    <div class="time">16 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-5.png" class="rounded-circle');?>">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Suwaldi Syariff</b>
                    <p>Lagi nyari madu bos? madu disini gw jamin enak banget</p>
                    <div class="time">beberapa waktu lalu </div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Lihat Semua <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifikasi
                <div class="float-right">
                  <a href="#">Tandai semua telah dibaca</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Silahkan Berbelanja, Have Fun!!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Anda</b> dan <b>Adnandhika</b> sekarang berteman
                    <div class="time">10 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Adnandhika</b> telah memperbaiki <b>beberapa kesalahan</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Kekurangan Kapasitas Penyimpanan. Segera Bersihkan!
                    <div class="time">17 Jam Yang Lalu</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Selamat Datang Di Website Penjualan Madu Terlengkap Se-Indonesia!
                    <div class="time">Kemarin</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Lihat Semua <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/admin/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1');?>">
            <div class="d-sm-none d-lg-inline-block">Hallo, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Sedang Aktif</div>

              <div class="dropdown-divider"></div>
              <a href="<?php echo site_url('adminpanel');?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Madu Collection</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MC</a>
          </div>
          <ul class="sidebar-menu">
              <li class="nav-item dropdown active">
                <a href="<?php echo site_url('Adminpanel/dashboard');?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li><a class="nav-link" href="<?php echo site_url('kategori');?>"><i class="fa fa-th"></i> <span>Kategori</span></a></li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-plane"></i><span>Jasa Pengiriman</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo site_url('kota');?>">Kota</a></li>
                  <li><a class="nav-link" href="<?php echo site_url('kurir');?>">Kurir</a></li>
                  <li><a class="nav-link" href="<?php echo site_url('ongkir');?>">Ongkos Kirim</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?php echo site_url('Member/produk');?>"><i class="fa fa-store"></i> <span>Upload Produk</span></a></li>
              <li><a class="nav-link" href="<?php echo site_url('Adminpanel/produk_terjual');?>"><i class="fa fa-store"></i> <span>Detail Penjualan</span></a></li>
              <li><a class="nav-link" href="<?php echo site_url('Member');?>"><i class="fa fa-user"></i> <span>Member</span></a></li>
  
              <li><a class="nav-link" href="<?php echo site_url('berita');?>"><i class="fas fa-store"></i> <span>Berita</span></a></li>
            </ul>
        </aside>
      </div>

      <?= $contents ?>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Roman Company LTD</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/stisla.js');?>"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/custom.js');?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/page/index.js');?>"></script>
</body>
</html>
