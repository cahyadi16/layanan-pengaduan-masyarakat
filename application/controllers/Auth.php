<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_auth');
  }

  public function index()
  {
    $this->m_auth->sudah_login();
    $data['title'] = 'Login | Layanan Pengaduan Masyarakat';
    $this->load->view('auth/v_login', $data);
  }

  public function proses()
  {
    $email = htmlspecialchars($this->input->post('email'));
    $password = htmlspecialchars($this->input->post('password'));
    if ($this->m_auth->login_user($email, $password)) {
      redirect('dashboard');
    } else {
      $this->session->set_flashdata('error', 'Username & Password salah');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('is_login');
    $this->session->set_flashdata('logout', 'Anda berhasil Logout!');
    redirect('auth');
  }
}
