<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home');
        $this->load->view('ongkir/index');
    }

    public function datap()
    {
        $this->load->view('ongkir/dataprovinsi');
    }

    public function datak()
    {
        $this->load->view('ongkir/datakota');
    }

    public function datae()
    {
        $this->load->view('ongkir/datakurir');
    }

    public function datapa()
    {
        $this->load->view('ongkir/datapaket');
    }
}
