      <!-- Main Content -->
            <div class="main-content">
              <section class="section">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                      <div class="card-stats">
                        <div class="card-stats-title">Statistik Pesanan -
                          <div class="dropdown d-inline">
                            <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">Desember</a>
                            <ul class="dropdown-menu dropdown-menu-sm">
                              <li class="dropdown-title">Pilih Bulan</li>
                              <li><a href="#" class="dropdown-item">Januari</a></li>
                              <li><a href="#" class="dropdown-item">Februari</a></li>
                              <li><a href="#" class="dropdown-item">Maret</a></li>
                              <li><a href="#" class="dropdown-item">April</a></li>
                              <li><a href="#" class="dropdown-item">Mei</a></li>
                              <li><a href="#" class="dropdown-item">Juni</a></li>
                              <li><a href="#" class="dropdown-item">Juli</a></li>
                              <li><a href="#" class="dropdown-item active">Agustus</a></li>
                              <li><a href="#" class="dropdown-item">September</a></li>
                              <li><a href="#" class="dropdown-item">Oktober</a></li>
                              <li><a href="#" class="dropdown-item">November</a></li>
                              <li><a href="#" class="dropdown-item">Desember</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-stats-items">
                          <div class="card-stats-item">
                            <div class="card-stats-item-count">12</div>
                            <div class="card-stats-item-label">Ditunda</div>
                          </div>
                          <div class="card-stats-item">
                            <div class="card-stats-item-count">15</div>
                            <div class="card-stats-item-label">Dikirim</div>
                          </div>
                          <div class="card-stats-item">
                            <div class="card-stats-item-count">23</div>
                            <div class="card-stats-item-label">Diterima</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-archive"></i>
                      </div>
                      <div class="card-wrap">
                        <div class="card-header">
                          <h4>Total Pesanan</h4>
                        </div>
                        <div class="card-body">
                          59
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                      <div class="card-chart">
                        <canvas id="balance-chart" height="80"></canvas>
                      </div>
                      <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                      </div>
                      <div class="card-wrap">
                        <div class="card-header">
                          <h4>Pemasukan</h4>
                        </div>
                        <div class="card-body">
                          $187,13
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                      <div class="card-chart">
                        <canvas id="sales-chart" height="80"></canvas>
                      </div>
                      <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-shopping-bag"></i>
                      </div>
                      <div class="card-wrap">
                        <div class="card-header">
                          <h4>Penjualan</h4>
                        </div>
                        <div class="card-body">
                          4,732
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-header">
                        <h4>Anggaran vs Penjualan</h4>
                      </div>
                      <div class="card-body">
                        <canvas id="myChart" height="158"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card gradient-bottom">
                      <div class="card-header">
                        <h4>5 Produk Teratas</h4>
                        <div class="card-header-action dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Bulan</a>
                          <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <li class="dropdown-title">Pilih Periode</li>
                            <li><a href="#" class="dropdown-item">Hari ini</a></li>
                            <li><a href="#" class="dropdown-item">Minggu ini</a></li>
                            <li><a href="#" class="dropdown-item active">Blan ini</a></li>
                            <li><a href="#" class="dropdown-item">Tahun ini</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">
                          <li class="media">
                            <img src="<?php echo base_url('assets/download.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Terjual</div></div>
                              <div class="media-title"> Madu Hutan Sumatera </div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="64%"></div>
                                  <div class="budget-price-label">$68,714</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="43%"></div>
                                  <div class="budget-price-label">$38,700</div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="media">
                            <img src="<?php echo base_url('assets/Kaliandra.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">67 Terjual</div></div>
                              <div class="media-title"> Madu Kaliandra</div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="84%"></div>
                                  <div class="budget-price-label">$107,133</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="60%"></div>
                                  <div class="budget-price-label">$91,455</div>
                                </div>
                              </div>
                            </div>
                          </li>
                           <li class="media">
                            <img src="<?php echo base_url('assets/Kopi.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">61 Terjual</div></div>
                              <div class="media-title"> Madu Kopi</div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="84%"></div>
                                  <div class="budget-price-label">$117,133</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="60%"></div>
                                  <div class="budget-price-label">$94,455</div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="media">
                           <img src="<?php echo base_url('assets/Pahit-Bangka.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">63 Terjual</div></div>
                              <div class="media-title">Madu Pahit Bangka</div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="34%"></div>
                                  <div class="budget-price-label">$3,717</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="28%"></div>
                                  <div class="budget-price-label">$2,835</div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="media">
                           <img src="<?php echo base_url('assets/Hutan-Timor.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">28 Terjual</div></div>
                              <div class="media-title">Madu Hutan Timor</div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="45%"></div>
                                  <div class="budget-price-label">$13,972</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="30%"></div>
                                  <div class="budget-price-label">$9,660</div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="media">
                            <img src="<?php echo base_url('assets/Hutan-Sumbawa.jpg" alt="logo" width="70" class="');?>">
                            <div class="media-body">
                              <div class="float-right"><div class="font-weight-600 text-muted text-small">19 Terjual</div></div>
                              <div class="media-title">Madu Hutan Sumbawa</div>
                              <div class="mt-1">
                                <div class="budget-price">
                                  <div class="budget-price-square bg-primary" data-width="35%"></div>
                                  <div class="budget-price-label">$7,391</div>
                                </div>
                                <div class="budget-price">
                                  <div class="budget-price-square bg-danger" data-width="28%"></div>
                                  <div class="budget-price-label">$5,472</div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="card-footer pt-3 d-flex justify-content-center">
                        <div class="budget-price justify-content-center">
                          <div class="budget-price-square bg-primary" data-width="20"></div>
                          <div class="budget-price-label">Harga Penjualan</div>
                        </div>
                        <div class="budget-price justify-content-center">
                          <div class="budget-price-square bg-danger" data-width="20"></div>
                          <div class="budget-price-label">Harga Anggaran</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Produk Terbaik</h4>
                      </div>
                      <div class="card-body">
                        <div class="owl-carousel owl-theme" id="products-carousel">
                          <div>
                            <div class="product-item pb-3">
                              <div class="product-image">
                               <img src="<?php echo base_url('assets/download.jpg" alt="logo" width="70" class="');?>">
                              </div>
                              <div class="product-details">
                                <div class="product-name">MaduHutan
                                Sumatera</div>
                                <div class="product-review">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                </div>
                                <div class="text-muted text-small">86 Terjual</div>
                                <div class="product-cta">
                                  <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="product-item">
                              <div class="product-image">
                                <img src="<?php echo base_url('assets/Kaliandra.jpg" alt="logo" width="90" class="');?>">
                              </div>
                              <div class="product-details">
                                <div class="product-name">Madu Kaliandra</div>
                                <div class="product-review">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half"></i>
                                </div>
                                <div class="text-muted text-small">67 Terjual</div>
                                <div class="product-cta">
                                  <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div>
                            <div class="product-item">
                              <div class="product-image">
                                <img src="<?php echo base_url('assets/Pahit-Bangka.jpg" alt="logo" width="70" class="');?>">
                              </div>
                              <div class="product-details">
                                <div class="product-name">Madu Pahit Bangka</div>
                                <div class="product-review">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="far fa-star"></i>
                                </div>
                                <div class="text-muted text-small">63 Terjual</div>
                                <div class="product-cta">
                                  <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Daerah Penghasil Madu Terbaik Se-Indonesia</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                              <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">1.   Hutan Pelawan (BangkaBelitung)</div>
                                  <div class="text-small text-muted">5,282 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              </li>
                              <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">2.   Nusa Tenggara Timur</div>
                                  <div class="text-small text-muted">4,976 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">3.   Sumbawa ( NTB )</div>
                                  <div class="text-small text-muted">2,976 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="col-sm-6 mt-sm-0 mt-4">
                        <div class="row">
                    
                            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                              <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">4.Kapuas Hulu</div>
                                  <div class="text-small text-muted">2,682 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              </li>
                               <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">5. Pati Jawa Tengah</div>
                                  <div class="text-small text-muted">2,184 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              </li>
                                <li class="media">
                                <div class="media-body ml-3">
                                  <div class="media-title">6. Maluku </div>
                                  <div class="text-small text-muted">1,932 <i class="fas fa-caret-up text-success"></i></div>
                                </div>
                              </li>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h4>Invoices</h4>
                        <div class="card-header-action">
                          <a href="#" class="btn btn-danger">Lihat Selengkapnya <i class="fas fa-chevron-right"></i></a>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                          <table class="table table-striped">
                            <tr>
                              <th>ID Tagihan</th>
                              <th>Pelanggan</th>
                              <th>Status</th>
                              <th>Batas Waktu</th>
                              <th>Opsi</th>
                            </tr>
                            <tr>
                              <td><a href="#">87239</a></td>
                              <td class="font-weight-600">Adnandhika</td>
                              <td><div class="badge badge-warning">Belum Dibayar</div></td>
                              <td>Desember 30, 2021</td>
                              <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="#">48574</a></td>
                              <td class="font-weight-600">Endri Firmansyah</td>
                              <td><div class="badge badge-success">Dibayar</div></td>
                              <td>Oktober 21, 2021</td>
                              <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="#">76824</a></td>
                              <td class="font-weight-600">S.Syariff</td>
                              <td><div class="badge badge-warning">Dibayar</div></td>
                              <td>November 22, 2021</td>
                              <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="#">84990</a></td>
                              <td class="font-weight-600">NadaaBiru</td>
                              <td><div class="badge badge-warning">Belum Dibayar</div></td>
                              <td>Maret 12, 2022</td>
                              <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="#">87320</a></td>
                              <td class="font-weight-600">Melinaaa</td>
                              <td><div class="badge badge-success">Dibayar</div></td>
                              <td>Desember 28, 2021</td>
                              <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card-hero">
                      <div class="card-header">
                        <div class="card-icon">
                          <i class="far fa-question-circle"></i>
                        </div>
                        <h4>14</h4>
                        <div class="card-description">Pelanggan membutuhkan bantuan</div>
                      </div>
                      <div class="card-body p-0">
                        <div class="tickets-list">
                          <a href="#" class="ticket-item">
                            <div class="ticket-title">
                              <h4>Pesanan saya belum sampai</h4>
                            </div>
                            <div class="ticket-info">
                              <div>Melinaa</div>
                              <div class="bullet"></div>
                              <div class="text-primary">1 Jam Yang Lalu</div>
                            </div>
                          </a>
                          <a href="#" class="ticket-item">
                            <div class="ticket-title">
                              <h4>Tolong batalkan pesanan saya</h4>
                            </div>
                            <div class="ticket-info">
                              <div>Nur Ibrahim</div>
                              <div class="bullet"></div>
                              <div>2 Hari Yang Lalu</div>
                            </div>
                          </a>
                          <a href="#" class="ticket-item">
                            <div class="ticket-title">
                              <h4>Bagaimana Cara Memesan?</h4>
                            </div>
                            <div class="ticket-info">
                              <div>Zaki</div>
                              <div class="bullet"></div>
                              <div>6 Hari Yang Lalu</div>
                            </div>
                          </a>
                          <a href="features-tickets.html" class="ticket-item ticket-more">
                            Lihat Semua <i class="fas fa-chevron-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>