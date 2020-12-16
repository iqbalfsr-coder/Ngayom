<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home');
        $this->load->view('home/index');
        $this->load->view('templates/footer_home');
    }
}
