   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Feedback</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Feedback</h2>
      
       

            <div class="row">
              <div class="col-30 col-md-10 col-lg-10"> 
              <form method="POST" action="<?php echo site_url('member/feedbackadd');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Saran</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">  
                        <tr> 
                        <th>Tampilan Web</th> 
                        <td> 
                          <select class="form-control" name="penilaian" required> 
                          <option value="0">-penilaian-</option> 
                            
                              <option value="sangat baik">Sangat Baik</option>    
                              <option value="baik">Baik</option>    
                              <option value="kurang">Kurang</option>    
                              <option value="kurang sekali">Kurang Sekali</option>   
                           
                            </select>
                            </td>
                        <tr>
                        <tr> 
                        <th>Kemudahan Penggunaan Web</th> 
                        <td> 
                          <select class="form-control" name="penilaian2" required> 
                          <option value="0">-penilaian-</option> 
                            
                              <option value="sangat baik">Sangat Baik</option>    
                              <option value="baik">Baik</option>    
                              <option value="kurang">Kurang</option>    
                              <option value="kurang sekali">Kurang Sekali</option>   
                           
                            </select>
                            </td>
                        <tr>
                        
                        <tr>  
                            <th>Saran Dan Masukan</th>
                            <td> 
                            <div>
                            <input type="text" class="form-control" id="inputEmail3" name="keterangan" placeholder="Saran dan Keterangan" required>
                            </div> 
                            </td> 
                        </tr> 
                        <tr>   
                        <th> 
                        <label class="d-block">Rekomendasikan Web</label> 
                        <td>
                         
                    <div class="form-check form-check-inline"> 
                    <input class="form-check-input"  type="checkbox" name="rw" id="inlinecheckox1" value="Yes"> 
                  <label class="form-check-label" for="inlinecheckbox">Yes</label>  
                  </div>
                  <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="checkbox" name="rw" id="inlinecheckox2" value="No" >
                    <label class="form-check-label" for="inlinecheckbox">No</label>  
                  </div>  
                  </td> 
                  </th>
                    </tr>
                      </table>
                    </div> 
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  </div>
                  
                </div>
              </div>
             
            </div>

          </div>
        </section>
      </div>