<!-- Main Content -->
<style media="screen">
  .minggir
  {
               margin: 10px auto;
               padding: 20px 25px;
               color: white;
               font-weight: 300;
  }
  .spasi
  {
               padding: 30px 25px;
  }
  .kotak
  {
               width: 450px;
               background: white;
               /*meletakkan form ke tengah*/
               margin: 70px auto;
               padding: 30px 25px;
  }
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <div class="main-content">
        <section class="section">
		  <div class="row">
		  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                  <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                      </ol>
                       <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo base_url('assets/Kaliandra.jpg');?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Heading</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/Pahit-Bangka.jpg');?>" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Heading</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url('assets/Hutan-Sumbawa.jpg');?>" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Heading</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
				</div>
				</div>
          <div class="section-body">
          <h2 class="section-title">Produk</h2>
            <p class="section-lead"></p>
            <div class="row">
              <?php foreach($produk as $val) { ?>
                <a href="<?php echo site_url('Member/beli/'. $val->id_produk);?>">
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="<?php echo base_url('');?>/produk/<?php esc($val->gambar); ?>" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text" style="color:black;">
                      <?php esc($val->nama_toko);?><br><br>
                      <?php esc($val->nama_produk);?><br><br>
                      <?php esc($val->deskripsi);?><br>
                      Jumlah : <?php esc($val->jumlah);?><br>
                      Harga  : <?php esc($val->harga);?><br><br>
                      <?php esc($val->kota);?> &nbsp;<?php esc($val->tanggal_produk);?></p>
                    </div>
                </div>
                </article>
              </a>
              </div>
            <?php } ?>
             </div>
            </div>
            <h2 class="section-title">Berita</h2>
              <p class="section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="minggir"></div>
            <div class="row">
              <?php foreach($berita as $b) { ?>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <a href="<?= current_url(true); ?>" style="color:black";>
                <div class="card-deck">
                <div class="card">
                  <img src="<?php echo base_url('');?>/berita/<?php esc($b['gambar']); ?>" class="card-img-top" alt="news">
                  <div class="card-body">
                    <h6 class="card-title"><?php esc($b['judul']);?><br><br></h6>
                    <p class="card-text"><?php esc($b['isi']);?></p><br>
                    <p><a href="https://www.facebook.com/sharer.php?u=<?= current_url(true); ?>" target="_blank"><i class='fab fa-facebook' style='font-size:20px'></a></i>&nbsp;
                       <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= current_url(true); ?>" target="_blank"><i class='fab fa-linkedin' style='font-size:20px'></a></i></p>
                    <p class="card-text"><small class="text-muted"><?php esc($b['tanggal_berita']);?></small></p>
                  </div>
                </div>
              </div>
            </a>
              </div>
                <?php } ?>
            </div>
          </div>
        </section>
      </div>
