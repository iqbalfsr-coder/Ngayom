<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin', ['email_admin' => $email])->row_array();
        $user = $this->db->get_where('penjual', ['email_penjual' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['pass_penjual'])) {
                $data = [
                    'email_penjual' => $user['email_penjual'],
                    'nama_penjual' => $user['nama_penjual'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 2) {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah ! </div>');
                redirect('auth');
            }
        } else if ($admin) {
            if (password_verify($password, $admin['pass_admin'])) {
                $data = [
                    'email_admin' => $admin['email_admin'],
                    'nama_admin' => $admin['nama_admin'],
                    'role_id' => $admin['role_id']
                ];
                $this->session->set_userdata($data);
                if ($admin['role_id'] == 1) {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password Salah ! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email not registered ! </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out ! </div>');
        redirect('auth');
    }
}
