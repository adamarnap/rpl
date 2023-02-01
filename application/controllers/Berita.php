<?php

class Berita extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Mcrud');
    $this->load->model('Mfrontend');
    $this->load->model('Mmember');
  }

  public function index()
  {
    $data['title'] = "Berita";
    $data['kurir'] = $this->Mcrud->get_all_data('berita')->result();
    $data['berita']=$this->Mcrud->get_berita()->result_array();
    $this->template->load('layout_admin','admin/berita/index',$data);
  }

  public function berita()
  {
    $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
    $data['berita']=$this->Mcrud->get_berita()->result_array();
    $data['kota']=$this->Mfrontend->get_all_kota()->result();
    $this->template->load('layout_admin','admin/berita/berita_add');
  }

  public function form_berita_add()
  {
    //$data['berita']=$this->Mfrontend->get_all_kategori()->result();
    $this->template->load('layout_admin','admin/berita/berita_add');
  }

  public function insert_berita()
  {
    $wkt = date('Y-m-d H:i:s');
    $judul = $this->input->post('judul');
    $tanggal_berita = $this->input->post('tanggal_berita');
    $isi = $this->input->post('isi');

    $config['upload_path'] = './berita/';
    $config['allowed_types'] = 'jpg|png|jpeg';

    $this->load->library('upload', $config);
    if($this->upload->do_upload('gambar')){
      $data_file = $this->upload->data();
      $data_insert = array(
                          'judul' => $judul,
                          'tanggal_berita' => $wkt,
                          'isi' => $isi,
                          'gambar' => $data_file['file_name'],
                           );
      $this->Mcrud->insert_iberita($data_insert);
      redirect('berita');
    } else {
      redirect('berita');
    }
  }

}
