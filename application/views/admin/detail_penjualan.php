

          <div class="section-body">
             <?php $this->load->view('frontend/user_member_admin'); ?>
             <div class="col">
              <div class="col-md-12">


            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data penjualan anda</h4>
                  <div class="card-header-action">

                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Id Detail</th>
                        <th>Id Produk</th>
                        <th>Id Konsumen</th>
                       
                      </tr>
                      <?php foreach($penjualan as $val) { ?>
											<tr>
                        <td><?php esc($val['id_detail']);?></td>
						<td><?php esc($val['id_produk']);?></td>
                        <td><?php esc($val['idKonsumen']);?></td>
                        

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




