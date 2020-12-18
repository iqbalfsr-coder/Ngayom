<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home');
        $this->load->view('home/index');
        $this->load->view('templates/footer_home');
    }

    public function log()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home');
            $this->load->view('home/login');
            $this->load->view('templates/footer_home');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $member = $this->db->get_where('member', ['email_member' => $email])->row_array();

        if ($member) {
            if (password_verify($password, $member['pass_member'])) {
                $data = [
                    'email_member' => $member['email_member'],
                    'nama_member' => $member['nama_member'],
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah ! </div>');
                redirect('home/log');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email not registered ! </div>');
            redirect('home/log');
        }
    }

    public function regis()
    {
        $this->form_validation->set_rules('name', 'password', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home');
            $this->load->view('home/login');
            $this->load->view('templates/footer_home');
        } else {
            $data = [
                'nama_member' => htmlspecialchars($this->input->post('name', true)),
                'email_member' => htmlspecialchars($this->input->post('email', true)),
                'pass_member' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'alamat' => NULL
            ];
            $this->db->insert('member', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Signup Berhasil !</div>');
            redirect('home/log');
        }
    }
}
