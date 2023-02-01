<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Berita</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Berita</a></div>
              <div class="breadcrumb-item"><a href="#">kelola berita</a></div>
              <div class="breadcrumb-item">Beritar</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form id="setting-form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('berita/insert_berita'); ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Berita</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="judul" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Isi</label>
                      <div class="col-sm-9">
                        <textarea rows="10" cols="45" name="isi" id="site-description"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Up photo</label>
                      <div class="custom-file">
                       <input type="file" name="gambar" class="custom-file-input" id="site-logo">
                       <label class="custom-file-label">Choose File</label>
                     </div>
                    </div>
                  </div>
                  <div class="card-footer bg-whitesmoke text-md-right">
                    <button class="btn btn-primary" id="save-btn">Save Changes</button>
                    <button class="btn btn-secondary" type="button">Reset</button>
                  </div>
              </div>
            </div>
          </div>
        </section>
      </div>
