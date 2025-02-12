<?php  



class Model_produk extends CI_Model{

	public function tampil_data()

	{
		return $this->db->get('produk');
	}

	public function tambah_produk($data,$table){

		$this->db->insert($table, $data);

	}
}