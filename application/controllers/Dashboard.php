<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_auth');
    $this->load->model('m_dashboard');
  }

  public function index()
  {
    $this->m_auth->cek_login();
    $data = array(
      'title' => 'Dashboard',
      'isi' => 'admin/v_dashboard',
      'total_laporan' => $this->m_dashboard->total_laporan(),
    );
    $this->load->view('layout/back/v_wrapper', $data);
  }

  public function laporan()
  {
    $this->m_auth->cek_login();
    $data = array(
      'title' => 'Dashboard | Laporan masuk',
      'isi' => 'admin/v_laporan',
      'laporan' => $this->db->get('tb_laporan')->result_array(),
    );
    $this->load->view('layout/back/v_wrapper', $data);
  }
}
