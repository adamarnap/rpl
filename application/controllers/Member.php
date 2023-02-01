<?php
class Member extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('Mcrud');
    $this->load->model('Mfrontend');
    $this->load->model('Mmember');
  }

  public function index(){
    $data['member']=$this->Mcrud->get_all_data('tbl_member')->result();
    $this->template->load('layout_admin','admin/member/member',$data);
  }

  public function register()
	{
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_frontend','frontend/form_register', $data);
	}

  public function add(){
    $this->template->load('layout_admin','admin/member/member_add');
  }

  public function about(){
		$this->load->view('frontend/about');
	}
  
  public function save(){
    $namaKonsumen = $this->input->post('namaKonsumen');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $telepon = $this->input->post('telepon');
    $dataInsert = array(
                        'namaKonsumen' => $namaKonsumen,
                        'alamat' => $alamat,
                        'email' => $email,
                        'telepon' => $telepon
                      );
    $this->Mcrud->insert('tbl_member', $dataInsert);
    redirect('member');
  }

    public function aktif($id){
      $dataUpdate = array('statusAktif'=>'Y');
      $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
      redirect('member');
    }

    public function non_aktif($id){
      $dataUpdate = array('statusAktif'=>'N');
      $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
      redirect('member');
    }

    public function login(){
      $data['kota']=$this->Mfrontend->get_all_kota()->result();
      $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
      $this->template->load('layout_frontend','frontend/form_login', $data);
    }

    public function act_login(){
      $u = $this->input->post('username');
      $p = $this->input->post('password');

      $cekuserdaftar = $this->Mmember->cekuserdaftar($u);


     
if ($cekuserdaftar){
  $cek = $this->Mmember->cek_login_user($u, $p);


      if ($cek) 
      {
        foreach ($cek as $row)

        if ($row->statusAktif == "Y")
      $this->session->set_userdata('idKonsumen', $row->idKonsumen);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('namaKonsumen', $row->namaKonsumen);
      $this->session->set_userdata('level', $row->level);

       if($this->session->userdata('level')=="member"){
         redirect ('Member/menu_member');
       }
       else {
        $this->session->set_flashdata('pesan','<div class="alert alert-danger">
                                        Username atau Password Anda Salah</div>');
        redirect('member/login');
    }
      } else {
          $this->session->set_flashdata('pesan','<div class="alert alert-danger">
                                          Username atau Password Anda Salah</div>');
          redirect('member/login');
      }
    }
}

      public function keluar(){
        $this->session->sess_destroy();
        redirect('Home');
      }

    

      public function user_member(){
        $data['kategori']=$this->Mfrontend->get_all_kategori('')->result();
        $this->template->load('layout_frontend', 'frontend/user_member',$data);
      }

      public function menu_member(){
        //$data_session

        
        $data['konsumen'] = $this->Mmember->get_akun_by_user()->result();
        $data['berita']=$this->Mcrud->get_berita()->result_array();
        $data['kategori']=$this->Mfrontend->get_all_kategori('')->result();
        //jumlah sum saldo eror, gak tau ribet ci 3, doc nya kurang jelas, dan kurang paham erornya, wildan atau yang lain bisa di fix
        //$data['saldo']=$this->Mmember->saldotot();
        $data['produk'] = $this->Mmember->get_produk('produk')->result();
        $data['akun']=$this->Mmember->get_akun('')->result_array();
        
        $this->template->load('layout_halut', 'frontend/menu_member',$data);
      }

      public function dashboard_member(){
        //$data_session

        
        $data['konsumen'] = $this->Mmember->get_akun_by_user()->result();
        $data['berita']=$this->Mcrud->get_berita()->result_array();
        $data['kategori']=$this->Mfrontend->get_all_kategori('')->result();
        //jumlah sum saldo eror, gak tau ribet ci 3, doc nya kurang jelas, dan kurang paham erornya, wildan atau yang lain bisa di fix
        //$data['saldo']=$this->Mmember->saldotot();
        $data['produk'] = $this->Mmember->get_produk('produk')->result();
        $data['akun']=$this->Mmember->get_akun('')->result_array();
        
        $this->template->load('layout_halut', 'frontend/dashboard_member',$data);
      }

      public function member_toko(){
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['toko']=$this->Mmember->get_toko_by_member()->result_array();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $this->template->load('layout_frontend','frontend/member_toko', $data);
      }

      public function form_toko_add(){
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/form_toko_add',$data);
      }

      public function insert_toko(){
        $idKonsumen = $this->session->userdata('idKonsumen');
        $namaToko = $this->input->post('namaToko');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './upload_logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('logo')){
          $data_file = $this->upload->data();
          $data_insert = array(
                              'idKonsumen' => $idKonsumen,
                              'namaToko' => $namaToko,
                              'logo' => $data_file['file_name'],
                              'deskripsi' => $deskripsi,
                              'StatusAktif' => 'Y'
                               );
          $this->Mmember->insert_toko($data_insert);
          redirect('member/member_toko');
        } else {
          redirect('member/form_toko_add');
        }
      }

      // TOP UP
      public function topup()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['saldo']=$this->Mmember->get_saldo()->result_array();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $this->template->load('layout_halut','frontend/member_topup', $data);
      }

      public function form_topup_add()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_halut','frontend/form_topup_add',$data);
      }

      public function insert_topup()
      {
        $wkt = date('Y-m-d H:i:s');
        $jumlah = $this->input->post('jumlah');
        $tanggal = $this->input->post('tanggal');
        $data_insert = array(
                              'jumlah' => $jumlah,
                              'tanggal' => $wkt,
                               );
        $this->Mmember->insert_topup($data_insert);

       redirect('member/member_toko');
      }

      // END

      //RETUR Barang
      public function returbarang()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['retur']=$this->Mmember->get_retur()->result_array();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $this->template->load('layout_halut','frontend/member_retur', $data);
      }

      public function form_retur_add()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_halut','frontend/form_retur_add',$data);
      }

      public function insert_retur()
      {
        $wkt = date('Y-m-d H:i:s');
        $nama_barang = $this->input->post('nama_barang');
        $tanggal_retur = $this->input->post('tanggal_retur');
        $tanggal_beli = $this->input->post('tanggal_beli');
        $alasan = $this->input->post('alasan');

        $config['upload_path'] = './bukti/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('bukti')){
          $data_file = $this->upload->data();
          $data_insert = array(
                              'nama_barang' => $nama_barang,
                              'tanggal_retur' => $wkt,
                              'tanggal_beli' => $tanggal_beli,
                              'alasan' => $alasan,
                              'bukti' => $data_file['file_name'],
                               );
          $this->Mmember->insert_retur($data_insert);
          redirect('member/member_retur');
        } else {
          redirect('member/form_retur_add');
        }
      }

      //END

      //Up produk
      public function produk()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $data['produk']=$this->Mmember->get_produk('produk')->result_array();
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $this->template->load('layout_admin','admin/produk/produk', $data);
      }

      public function form_produk_add()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_admin','admin/produk/produk_add',$data);
      }

      public function insert_produk()
      {
        //database ada yang salah kolomnya, aku ubah baru, id nya gak AI, jadi bakal auto duplicate key kalau ada data baru
        $wkt = date('Y-m-d H:i:s');
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $nama_produk = $this->input->post('nama_produk');
        $nama_toko = $this->input->post('nama_toko');
        $kategori = $this->input->post('kategori');
        $jumlah = $this->input->post('jumlah');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');
        $kota = $this->input->post('kota');
        $tanggal_produk = $this->input->post('tanggal_produk');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './produk/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('gambar')){
          $data_file = $this->upload->data();
          $data_insert = array(
                              'nama_produk' => $nama_produk,
                              'nama_toko' => $nama_toko,
                              'kategori' => $kategori,
                              'jumlah' => $jumlah,
                              'berat' => $berat,
                              'harga' => $harga,
                              'Kota' => $kota,
                              'tanggal_produk' => $wkt,
                              'deskripsi' => $deskripsi,
                              'gambar' => $data_file['file_name'],
                               );
          $this->Mmember->insert_dproduk($data_insert);
          redirect('member/produk');
        } else {
          redirect('member/produk');
        }
      }

      //END
      public function contact(){  
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this->template->load('layout_frontend','frontend/hubungi_kami', $data);
      }  
      
      public function contactadd(){ 
        $email = $this->input->post('email');
        $tentang = $this->input->post('tentang'); 
        $dataInsert = array('email'=>$email, 'tentang'=>$tentang); 
        $this->Mcrud->insert('tbl_contact', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('pesan','Saran Berhasil diKirim');    
        };
        redirect('member');  
      
      }
      // Keranjang

      public function Beli($id_produk)
      {
        
		    $data['produk'] = $this->Mmember->get_produk_by_idproduk($id_produk)->result();
        $data['konsumen'] = $this->Mmember->get_produk_by_user()->result();
    		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
    		//$data['keranjang']=$this->Mmember->buat_keranjang()->result_array();
    		$this->template->load('layout_frontend','frontend/beli', $data);
    	}

      public function Tambah_Data_Nota($id_produk)
      {
            $id_detail = $this->input->post('id_detail');
            $id_produk = $this->input->post('id_produk');		
            $idKonsumen = $this->input->post('idKonsumen');

            $data_insert = array(
              'id_detail' => $id_detail,			
              'id_produk' => $id_produk,
              'idKonsumen' => $idKonsumen					
            );

          $data['konsumen'] = $this->Mmember->get_produk_by_user()->result();
          $data['produk'] = $this->Mmember->get_produk_by_idproduk($id_produk)->result();
          $this->Mmember->Tambah_order($data_insert);
          $this->load->view('frontend/Cetak_Transaksi',$data);
			
    	}

      public function memberedit()
      {
        $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_halut','frontend/form_profil_edit',$data);
      }

      //lanjut nanti

      public function member_transaksi(){
        $data['kategori']=$this->Mfrontend->get_all_kategori('')->result();
        $data['transaksi']=$this->Mmember->get_trans('')->result();
        $this->template->load('layout_halut','frontend/member_transaksi',$data);
      }

      public function feedback(){  
        $data['kategori'] = $this -> Mfrontend -> get_all_kategori() -> result();
        $this->template->load('layout_halut','frontend/feedback', $data);
     }  
      
     public function feedbackadd(){ 
        $penilaian = $this->input->post('penilaian');  
        $penilaian2 = $this->input->post('penilaian2'); 
        $keterangan = $this->input->post('keterangan'); 
        $rw = $this->input->post('rw');
        $dataInsert = array('penilaian'=>$penilaian ,'penilaian2'=>$penilaian2 , 'keterangan'=>$keterangan, 'rw'=>$rw); 
        $this->Mcrud->insert('tbl_saran', $dataInsert); 
        if($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('pesan','Saran Berhasil diKirim');    
        };
        redirect('member');  
     }
}

