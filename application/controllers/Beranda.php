<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

  public function index()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('hp', 'No HP', 'required');
    $this->form_validation->set_rules('judul_laporan', 'Judul Laporan', 'required');
    $this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'required');
    $this->form_validation->set_rules('lokasi_kejadian', 'Lokasi Kejadian', 'required');

    // pesan error
    $this->form_validation->set_message('required', '%s masih kosong, Silahkan diisi');

    if ($this->form_validation->run() == false) {
      $this->load->view('beranda/beranda');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post('email')),
        'alamat' => htmlspecialchars($this->input->post('alamat')),
        'hp' => htmlspecialchars($this->input->post('hp')),
        'judul_laporan' => htmlspecialchars($this->input->post('judul_laporan')),
        'isi_laporan' => htmlspecialchars($this->input->post('isi_laporan')),
        'lokasi_kejadian' => htmlspecialchars($this->input->post('lokasi_kejadian')),
        'tgl' => $this->input->post('tgl')
      ];
      $this->db->insert('tb_laporan', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan berhasil di Kirim! Terima kasih</div>');
      redirect('beranda');
    }
  }
}
