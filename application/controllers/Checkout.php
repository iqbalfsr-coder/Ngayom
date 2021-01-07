<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Checkout';
        $data['url'] = $this->uri->segment(1);
        $data['member'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $data['wi'] = $this->db->get_where('wishlist',  ['id_member' => $this->session->userdata('id_member')])->num_rows();
        $data['ca'] = $this->db->get_where('cart',  ['id_member' => $this->session->userdata('id_member')])->num_rows();
        $this->load->view('templates/header_home', $data);
        $this->load->view('checkout/index');
    }

    public function datap()
    {
        $this->load->view('checkout/dataprovinsi');
    }

    public function datak()
    {
        $this->load->view('checkout/datakota');
    }

    public function datae()
    {
        $this->load->view('checkout/datakurir');
    }

    public function datapa()
    {
        $this->load->view('checkout/datapaket');
    }
}
