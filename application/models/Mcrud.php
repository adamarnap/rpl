<?php

class Mcrud extends CI_Model{

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete_data($data, $tabel){
		$this->db->where($data);
		$this->db->delete($tabel);
	}

	//Model atau query berita

	public function get_berita(){
		$id = $this->session->userdata('id');
		$q = $this->db->get_where('berita');
		return $q;
	}

	public function insert_iberita($data){
		$this->db->insert('berita', $data);
	}

}
