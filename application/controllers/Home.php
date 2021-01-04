<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Ngayom';
        $data['url'] = $this->uri->segment(2);
        $data['brand'] = $this->db->get('brand')->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['product'] = $this->db->get('product')->result_array();
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer_home');
    }

    public function account()
    {
        $data['title'] = 'Account';
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/account');
        $this->load->view('templates/footer_home');
    }

    public function wishlist()
    {
        $data['title'] = 'Wishlist';
        $data['url'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $data['pro'] = $this->db->get('product')->result_array();
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/wishlist');
        $this->load->view('templates/footer_home');
    }

    public function deletewish($id)
    {
        $this->db->where('id_wishlist', $id);
        $this->db->delete('wishlist');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Wishlist berhasil dihapus !</div>');
        redirect('home/wishlist');
    }

    public function cart()
    {
        $data['url'] = $this->uri->segment(1);
        $data['title'] = 'Cart';
        $data['user'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $data['pro'] = $this->db->get('product')->result_array();
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/cart');
        $this->load->view('templates/footer_home');
    }

    public function checkout()
    {
        $data['title'] = 'Checkout';
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/checkout');
        $this->load->view('templates/footer_home');
    }

    public function product_detail()
    {
        $data['title'] = 'Product Detail';
        $data['url'] = $this->uri->segment(3);
        $data['product'] = $this->db->get_where('product', ['id_product' => $data['url']])->row_array();
        $data['user'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $this->form_validation->set_rules('id_member', 'Id_Member', 'required|trim');
        $this->form_validation->set_rules('id_product', 'Id_Product', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home', $data);
            $this->load->view('home/product_detail');
            $this->load->view('templates/footer_home');
        } else {
            $data = [
                'id_product' => htmlspecialchars($this->input->post('id_product', true)),
                'id_member' => htmlspecialchars($this->input->post('id_member', true))
            ];
            $this->db->insert('wishlist', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Wishlist berhasil ditambahkan !</div>');
            redirect('home/wishlist');;
        }
    }

    public function product_list()
    {
        $data['title'] = 'Product List';
        $data['url'] = $this->uri->segment(2);
        $this->load->view('templates/header_home', $data);
        $this->load->view('home/product_list');
        $this->load->view('templates/footer_home');
    }

    public function log()
    {
        $data['url'] = $this->uri->segment(2);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/login', $data);
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
                    'role_id' => $member['role_id'],
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
        $data['url'] = $this->uri->segment(2);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/regis');
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
            redirect('home/regis');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email_member');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out ! </div>');
        redirect('home/log');
    }
}
