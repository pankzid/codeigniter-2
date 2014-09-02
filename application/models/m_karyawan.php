<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');

class M_karyawan extends CI_Model
{

  public function __construct()
  {
   parent::__construct();
  }

  public function ambil_karyawan($num, $offset)
  {
    $this->db->order_by('nama_lengkap', 'ASC');
    $data = $this->db->get('tbl_karyawan', $num, $offset);

    return $data->result();
  }
}
