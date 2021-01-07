<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['product'] = $this->db->get_where('product', ['id_penjual' => $this->session->userdata('id_penjual')])->row_array();
        $data['order'] = $this->db->get('transaksi')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}
