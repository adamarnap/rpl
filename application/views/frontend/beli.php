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
		  <div class="col-4 col-md-4 col-lg-4">
                    
                  </div>
                </div>
				</div>


<div class="section-body">
          <h2 class="section-title">Produk yang dipilih</h2>
            <p class="section-lead"></p>
            <div class="row">
              <?php foreach($produk as $val) { ?>
      <form role="form" method="POST" action="<?php echo site_url('Member/Tambah_Data_Nota/'.$val->id_produk); ?>">
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
                      <input class="form-control" type="hidden" name="id_produk" value="<?php echo $val->id_produk; ?>" required>
                      <?php foreach($konsumen as $val) { ?>
                      <input class="form-control" type="hidden" name="idKonsumen" value="<?php echo $val->idKonsumen; ?>" required>
                      <?php } ?>
                    
                    </div>
                </div>
                </article>
              </a>
              <div class="text-center">
                    <button type="submit" class="btn btn-warning my-4">Bayar Produk</button>               
                  </div>   
              </div>
      </form>
            <?php } ?>
             </div>
            </div>