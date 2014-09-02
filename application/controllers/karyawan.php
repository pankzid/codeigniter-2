<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_karyawan');
	}

	public function index($id=NULL)
	{
		$jml = $this->db->get('tbl_karyawan');

		// pengaturan pagination
		$config['base_url'] = base_url().'karyawan/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '5';
		$config['first_page'] = 'Awal';
		$config['last_page'] = 'Akhir';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';

		// initialisasi config
		$this->pagination->initialize($config);

		// buat pagination
		$data['halaman'] = $this->pagination->create_links();

		// tampilkan data
		$data['query'] = $this->m_karyawan->ambil_karyawan($config['per_page'], $id);

		$this->load->view('karyawan_view', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
