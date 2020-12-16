<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ongkir extends CI_Controller
{
    public function index()
    {
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
