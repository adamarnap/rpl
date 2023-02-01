<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Manajemen Berita</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kelola Berita</a></div>
        <div class="breadcrumb-item">Berita</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <?php echo $this->session->flashdata('pesan'); ?>
          <div class="card">
            <div class="card-header">
              <h4>Data Berita</h4><a href="<?php echo site_url('berita/form_berita_add');?>" class="btn btn-primary"> Tambah Berita</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                  </tr>
                  <?php foreach ($berita as $item) {?>
                  <tr>
                    <td><?php esc($item['judul']);?></td>
                    <td><?php esc($item['isi']);?></td>
                    <td><?php esc($item['tanggal_berita']);?></td>
                    <td><img alt="image" width="250" height="300" src="<?php echo base_url('');?>/berita/<?php esc($item['gambar']); ?>"></td>
                  </tr>
                <?php }?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
