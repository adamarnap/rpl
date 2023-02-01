
<div class="section-body">
 <?php $this->load->view('frontend/user_member'); ?>
 <div class="col-lg-8 col-md-12 col-sm-12 col-12">
  <div class="col-md-12">
 <div class="col-md-8 col-md-12 col-sm-12 col-12">
  <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('member/insert_produk'); ?>">
    <div class="card" id="settings-card">
      <div class="card-header">
        <h4>Edit Profil</h4>
      </div>
      <div class="card-body">
        <p class="text-muted">Silahkan masukkan</p>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Username</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="username" class="form-control" id="site-title">
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Alamat</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="alamat" class="form-control" id="site-title">
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-left">Email</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="email" class="form-control" id="site-title">
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-description" class="form-control-label col-sm-3 text-md-left">Telepon</label>
          <div class="col-sm-6 col-md-9">
             <input type="number" name="telepon" class="form-control" id="site-title">
          </div>
        </div>
        <div class="form-group row align-items-center">
          <label for="site-description" class="form-control-label col-sm-3 text-md-left">Password</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="password" class="form-control" id="site-title">
          </div>
        </div>
      <div class="card-footer bg-whitesmoke text-md-right">
        <button class="btn btn-primary" id="save-btn">Simpan perubahan</button>
        <button class="btn btn-secondary" type="button">Reset</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</section>
</div>
