            
            <div class="section-body">
             <?php $this->load->view('frontend/user_member'); ?>
             <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="col-md-12">
             <div class="col-md-8 col-md-12 col-sm-12 col-12">
              <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('member/insert_toko'); ?>">
                <div class="card" id="settings-card">
                  <div class="card-header">
                    <h4>Form Membuat Toko Baru</h4>
                  </div>
                  <div class="card-body">
                    <p class="text-muted">Silahkan masukkan</p>
                    <div class="card-body">
                <div class="form-group row mb-4">
                   <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">IdKonsumen</label>
                   <div class="col-sm-12 col-md-7">
                     <select class="form-control" name="idKonsumen">
                       <option> </option>
                       <?php foreach ($Member as $val) {?>
                       <option value="<?php echo $val->idKonsumen;?>"><?php echo $val->namaKonsumen;?></option>
                     <?php }?>
                     </select>
                   </div>
                 </div>
                    <div class="form-group row align-items-center">
                      <label for="site-title" class="form-control-label col-sm-3 text-md-left">Nama Toko</label>
                      <div class="col-sm-6 col-md-9">
                        <input type="text" name="namaToko" class="form-control" id="site-title">
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label for="site-description" class="form-control-label col-sm-3 text-md-left">Deskripsi</label>
                      <div class="col-sm-6 col-md-9">
                        <textarea class="form-control" name="deskripsi" id="site-description"></textarea>
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label class="form-control-label col-sm-3 text-md-left">Logo Toko</label>
                      <div class="col-sm-6 col-md-9">
                        <div class="custom-file">
                          <input type="file" name="logo" class="custom-file-input" id="site-logo">
                          <label class="custom-file-label">Pilih File</label>
                        </div>
                        <div class="form-text text-muted">Gambar harus memiliki ukuran maksimum 1MB</div>
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