
          <div class="section-body">
             <?php $this->load->view('frontend/user_member_admin'); ?>
             <div class="col">
              <div class="col-md-12">
              <?php if(count($produk)>0) { ?>
                <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('member/form_produk_add') ?>">Tambah Produk Anda</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><br>
              <?php } else { ?>
					    <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('member/form_produk_add') ?>">Tambah produk Anda</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><br>
            <?php } ?>

            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data produk anda</h4>
                  <div class="card-header-action">

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama produk</th>
                        <th>Jumlah</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Kota</th>
                        <th>Tanggal</th>
                        <th>deskripsi</th>
                        <th>Gambar</th>
                      </tr>
                      <?php foreach($produk as $val) { ?>
											<tr>
                        <td><?php esc($val['nama_produk']);?></td>
												<td><?php esc($val['jumlah']);?></td>
                        <td><?php esc($val['berat']);?></td>
                        <td><?php esc($val['harga']);?></td>
                        <td><?php esc($val['kota']);?></td>
                        <td><?php esc($val['tanggal_produk']);?></td>
                        <td><?php esc($val['deskripsi']);?></td>
                        <td><img class="img-fluid shape shadow" style="width: 35px;height: 35px" src="<?php echo base_url('');?>/produk/<?php esc($val['gambar']); ?>"></td>
                      </tr>
                    <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
  		    </div>
        </div>
      	</section>
      </div>




