
          <div class="section-body">
             <?php $this->load->view('frontend/user_member'); ?>
             <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="col-md-12">
              <?php if(count($saldo)>0) { ?>
                <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="<?php echo site_url('member/form_topup_add') ?>">Top up baru</a>
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
                        <a class="nav-link active" href="<?php echo site_url('member/form_topup_add') ?>">Silakan Membuat Toko</a>
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
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                      </tr>
                      <?php foreach($saldo as $val) { ?>
											<tr>
                        <td>Rp.<?php echo $val['jumlah'];?></td>
												<td><?php echo $val['tanggal'];?></td>
                        <td>100000</td>
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
