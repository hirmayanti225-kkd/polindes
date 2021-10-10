<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function profil_bidan()
	{
		$this->load->view('profil_bidan');
	}
	public function format_data()
	{
		$this->load->view('format_data');
	}
	public function daftar_kunjungan()
	{
		$data['kunjungan'] = $this->db->get('kunjungan')->result();
		$this->load->view('daftar_kunjungan', $data);
	}
	public function form_kunjungan()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();
			$data['tanggal'] = date('Y-m-d', strtotime($data['tanggal']));
			$this->db->insert('kunjungan', $data);
			redirect('welcome/daftar_kunjungan');
		} else {
			$this->load->view('form_kunjungan');
		}
	}
	public function update_kunjungan($id)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$data = $this->input->post();

			$data['tanggal'] = date('Y-m-d', strtotime($data['tanggal']));
			$this->db->where('id', $id);
			$this->db->update('kunjungan', $data);

			redirect('welcome/daftar_kunjungan'); //halaman
		} else {
			$data['item'] = $this->db->get_where('kunjungan', ['id' => $id])->row();
			$this->load->view('update_kunjungan', $data);
		}
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kunjungan');

		redirect('welcome/daftar_kunjungan');
	}
	public function kartu_ibu()
	{
		$this->load->view('kartu_ibu');
	}
	public function laporan()
	{
		$this->load->view('laporan');
	}
	public function registrasi_kb()
	{
		$this->load->view('registrasi_kb');
	}


	public function layanan()
	{
		$this->load->view('layanan');
	}
	public function laporan_kematian()
	{
		$this->load->view('laporan_kematian');
	}
	public function laporan_kesakitan()
	{
		$this->load->view('laporan_kesakitan');
	}
	public function rekapitulasi_pws()
	{
		$this->load->view('rekapitulasi_pws');
	}
	public function persalinan()
	{
		$this->load->view('persalinan');
	}
	public function help()
	{
		$this->load->view('help');
	}
}