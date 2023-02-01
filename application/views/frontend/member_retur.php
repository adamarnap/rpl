
          <div class="section-body">
             <?php $this->load->view('frontend/user_member'); ?>
             <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="col-md-12">
              <?php if(count($retur)>0) { ?>
                <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('member/form_retur_add') ?>">Retur</a>
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
                        <a class="nav-link active" href="<?php echo site_url('member/form_retur_add') ?>">Retur</a>
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
                  <h4>Data Topup</h4>
                  <div class="card-header-action">

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Tanggal retur</th>
                        <th>Tanggal beli</th>
                        <th>Alasan</th>
                        <th>Bukti</th>
                      </tr>
                      <?php foreach($retur as $val) { ?>
											<tr>
                        <td><?php esc($val['nama_barang']);?></td>
												<td><?php esc($val['tanggal_retur']);?></td>
                        <td><?php esc($val['tanggal_beli']);?></td>
                        <td><?php esc($val['alasan']);?></td>
                        <td><img class="img-fluid shape shadow" style="width: 35px;height: 35px" src="<?php echo base_url('');?>/bukti/<?php esc($val['bukti']); ?>"></td>
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
