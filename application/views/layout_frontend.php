<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dicky shop, toko serba ada barang murah dan bergaransi">
  <meta name="keywords" content="Elektro, Murah, garansi ori">
  <meta name="author" content="Lim developing">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Madu Colecction</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/admin/assets/img/avatar/Hay-Day-Icon.png'); ?>">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Libraries -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/admin/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/admin/assets/css/components.css'); ?>">
</head>
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">

<!-- LOGO DI TAMPILAN FRONNT END-->
      <div class="col-1 col-sm-1 offset-sm-0 ">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/logo.png" alt="logo" width="100" class="shadow-light rounded-circle');?>">
            </div>
          </div>


        <a href="<?php echo site_url('memberpanel/home'); ?>" class="navbar-brand sidebar-gone-hide">Madu</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="<?php echo site_url('member/about'); ?>" class="nav-link">Tentang Toko</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cara Belanja</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Hubungi Kami</a></li>
            <li class="nav-item"><a href="<?php echo site_url('member/feedback'); ?>" class="nav-link"> Feedback </a></li>
          </ul>
        </div>
        <form class="form-inline ml-auto" action="<?php echo base_url('index.php/cari/hasil')?>" action="GET">
          <ul class="navbar-nav">
          </ul>
          <div class="search-element">
		     <select data-width="150" class="form-control">
            <?php foreach($kategori as $item) {; ?>
            <option class="form-control" value="<?php echo $item->idkat; ?>"><?php echo $item->namakat; ?></option>
            <?php } ?>
		  		  </select>
            <input type="text" class="form-control" id="cari" name="cari" placeholder="Search" aria-label="Search" data-width="300">
            <button class="btn" type="submit" value="Cari"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>

          </li>

        </ul>
		 <a href="<?php echo site_url('Member/login'); ?>" class="btn btn-outline-light">Masuk</a>
		 &nbsp; &nbsp; &nbsp;
		 <a href="<?php echo site_url('Member/register'); ?>" class="btn btn-outline-light">Daftar</a>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <?php foreach ($kategori as $item) {?>
            <li class="nav-item">
              <a href="#" class="nav-link"><span><?php echo $item->namakat; ?></span></a>
            </li>
            <?php } ?>
		      </ul>
        </div>
      </nav>
      <?= $contents ?>
      <footer class="main-footer">
        <div class="footer-left">
        </div>
        <div class="footer-right">
          ...
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
   <script src="<?php echo base_url('/assets/admin/assets/js/stisla.js'); ?>"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('/assets/admin/assets/js/scripts.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/admin/assets/js/custom.js'); ?>"></script>
  <a style="background:blue;
	display: block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: white;
  font-size: 30px;
  font-weight: bold;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  text-decoration: none;
  transition: ease all 0.3s;
  position: fixed;
  right: 30px;
  bottom:30px;
  " 
  href="<?php echo site_url('member/contact'); ?>" class="act-btn" >
  📞
</a>
</body>
</html>
