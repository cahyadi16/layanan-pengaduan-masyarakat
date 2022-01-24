<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{
  public function total_laporan()
  {
    return $this->db->get('tb_laporan')->num_rows();
  }
}
