<?php  



class Kategori_artikel extends CI_Controller{



	public function index()

	{

		$data['kategori'] = $this->model_kategori->tampil_data()->result();

		$this->load->view('templates_admin/header');

		$this->load->view('templates_admin/sidebar');

		$this->load->view('admin/kategori_artikel', $data);

		$this->load->view('templates_admin/footer');

	}



	public function tambah_aksi()

	{

		$nama_kategori	= $this->input->post('nama_kategori');



		$data = array(

			'nama_kategori'		=> $nama_kategori

			);



		$this->model_kategori->tambah_kategori($data, 'kategori_artikel');

		redirect('admin/kategori_artikel/index');

	}



	public function edit($id_kategoriartikel)

	{

		$where = array('id_kategoriartikel'  => $id_kategoriartikel);

		$data['kategori'] = $this->model_kategori->edit_kategori($where, 'kategori_artikel')->result();

		$this->load->view('templates_admin/header');

		$this->load->view('templates_admin/sidebar');

		$this->load->view('admin/edit_kategori', $data);

		$this->load->view('templates_admin/footer');

	}



	public function update()

	{

		$id_kategoriartikel	= $this->input->post('id_kategoriartikel');

		$nama_kategori 		= $this->input->post('nama_kategori');



		$data = array(

				'nama_kategori' => $nama_kategori

		);

		$where 	= array(

				'id_kategoriartikel' => $id_kategoriartikel

		);



		$this->model_kategori->update_data($where, $data, 'kategori_artikel');

		redirect('Admin/Kategori_artikel/index');

	}

	public function hapus($id_kategoriartikel)

	{
		$where = array('id_kategoriartikel' => $id_kategoriartikel);
		$this->model_kategori->hapus_data($where, 'kategori_artikel');
		redirect('Admin/Data_kategori/index');
	}

}



?>