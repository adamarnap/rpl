
<div class="section-body">
 <?php $this->load->view('frontend/user_member'); ?>
 <div class="col-lg-8 col-md-12 col-sm-12 col-12">
  <div class="col-md-12">
 <div class="col-md-8 col-md-12 col-sm-12 col-12">
  <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('member/insert_topup'); ?>">
    <div class="card" id="settings-card">
      <div class="card-header">
        <h4>Form Membuat Topup</h4>
      </div>
      <div class="card-body">
        <p class="text-muted">Silahkan masukkan</p>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Jumlah</label>
          <div class="col-sm-6 col-md-9">
            <input type="number" name="jumlah" class="form-control" id="site-title">
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Metoda Pembayaran</label>
          <div class="col-sm-6 col-md-9">
             &nbsp;&nbsp;<input type="radio" id="bri" name="fav_language" value="bri">
             <label for="html">BRI</label><br>
             <input type="radio" id="bni" name="fav_language" value="BNI">
             <label for="css">BNI</label><br>
             <input type="radio" id="gopay" name="fav_language" value="JavaScript">
             <label for="javascript">Gopay</label>
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Token ID</label>
          <div class="col-sm-6 col-md-9">
            <?php $randm = bin2hex(random_bytes(10));?>
            <input type="text" name="" class="form-control" id="site-title" readonly value="<?php echo "$randm";  ?>">
          </div>
        </div>
      <div class="card-footer bg-whitesmoke text-md-right">
        <button class="btn btn-primary" id="save-btn">Simpan Perubahan</button>
        <button class="btn btn-secondary" type="button">Reset</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</section>
</div>
