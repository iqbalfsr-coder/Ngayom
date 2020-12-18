<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home');
        $this->load->view('cart/index');
    }

    public function datap()
    {
        $this->load->view('cart/dataprovinsi');
    }

    public function datak()
    {
        $this->load->view('cart/datakota');
    }

    public function datae()
    {
        $this->load->view('cart/datakurir');
    }

    public function datapa()
    {
        $this->load->view('cart/datapaket');
    }
}
