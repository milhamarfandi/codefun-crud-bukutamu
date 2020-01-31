<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        $data['bukutamu'] = $this->Mbukutamu->getbukutamu()->result_array();
		$this->load->view('templates/header');
        $this->load->view('content/index',$data);
        $this->load->view('templates/footer');
	}

	public function tambah_tamu()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required', [
			'required' => 'Nama Harus Di isi'
		]);	
		$this->form_validation->set_rules('email','email','trim|required', [
			'required' => 'email Harus Di isi'
		]);	
		$this->form_validation->set_rules('aktifitas','aktifitas','trim|required', [
			'required' => 'aktifitas Harus Di isi'
		]);	

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header');
			$this->load->view('content/tambah_bukutamu');
			$this->load->view('templates/footer');
		} else{
			date_default_timezone_set('Asia/Jakarta');
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'aktifitas' => $this->input->post('aktifitas'),
				'check_in' => date('Y:m:d H:i:s')
			];

			$this->Mbukutamu->simpanData($data);
			redirect(base_url('main'));
		}
	}

	public function check_out($id)
	{
		$where = ['id_bukutamu' => $id];
		date_default_timezone_set('Asia/Jakarta');
		$data = ['check_out' => date('Y:m:d H:i:s')];

		$this->Mbukutamu->updatebukutamu($data, $where);
		redirect(base_url('main'));
	}

	public function ubah_tamu($id)
	{
		$data['bukutamu'] = $this->Mbukutamu->getbukutamuWhere(['id_bukutamu' => $id])->row_array();
		
		$this->load->view('templates/header');
		$this->load->view('content/edit_bukutamu',$data);
		$this->load->view('templates/footer');
	}

	public function update_tamu()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required', [
			'required' => 'Nama Harus Di isi'
		]);	
		$this->form_validation->set_rules('email','email','trim|required', [
			'required' => 'email Harus Di isi'
		]);	
		$this->form_validation->set_rules('aktifitas','aktifitas','trim|required', [
			'required' => 'aktifitas Harus Di isi'
		]);	
		$this->form_validation->set_rules('check_in','check-in','trim|required', [
			'required' => 'check-in Harus Di isi'
		]);	
		$this->form_validation->set_rules('check_out','check-out','trim|required', [
			'required' => 'check-out Harus Di isi'
		]);	

		$where = $this->input->post('id_bukutamu');
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'aktifitas' => $this->input->post('aktifitas'),
			'check_in' => $this->input->post('check_in'),
			'check_out' => $this->input->post('check_out')
		];

		$this->Mbukutamu->updatebukutamu($data, ['id_bukutamu' => $this->input->post('id_bukutamu')]);
		redirect(base_url('main'));

	}

	public function hapus_tamu($id)
	{
		$this->Mbukutamu->hapusbukutamu(['id_bukutamu' => $id]);
		redirect(base_url('main'));
	}
}