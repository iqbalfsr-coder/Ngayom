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
        $data['member'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $this->form_validation->set_rules('nama_member', 'Nama Member', 'required|trim');
        $this->form_validation->set_rules('email_member', 'Email Member', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home', $data);
            $this->load->view('home/account');
            $this->load->view('templates/footer_home');
        } else {
            $id_member = $this->input->post('id_member');
            $nama_member = $this->input->post('nama_member');
            $email = $this->input->post('email_member');
            $no_hp = $this->input->post('no_hp');
            $alamat = $this->input->post('alamat');
            $this->db->set('nama_member', $nama_member);
            $this->db->set('email_member', $email);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('alamat', $alamat);
            $this->db->where('id_member',  $id_member);
            $this->db->update('member');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('home/account');
        }
    }

    public function wishlist()
    {
        $data['title'] = 'Wishlist';
        $data['url'] = $this->uri->segment(2);
        $data['user'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $data['pro'] = $this->db->get('product')->result_array();
        $this->form_validation->set_rules('id_member', 'Id_Member', 'required|trim');
        $this->form_validation->set_rules('id_product', 'Id_Product', 'required|trim');
        $this->form_validation->set_rules('qty', 'Qty', 'required|trim');
        $this->form_validation->set_rules('sub_total', 'sub_total', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home', $data);
            $this->load->view('home/wishlist');
            $this->load->view('templates/footer_home');
        } else {
            $data = [
                'id_product' => htmlspecialchars($this->input->post('id_product', true)),
                'id_member' => htmlspecialchars($this->input->post('id_member', true)),
                'qty' => htmlspecialchars($this->input->post('qty', true)),
                'sub_total' => htmlspecialchars($this->input->post('sub_total', true)),
            ];
            $this->db->insert('cart', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product berhasil ditambahkan !</div>');
            redirect('home/cart');;
        }
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

    public function deletecart($id)
    {
        $this->db->where('id_cart', $id);
        $this->db->delete('cart');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Product berhasil dihapus !</div>');
        redirect('home/cart');
    }



    public function product_detail()
    {
        $data['title'] = 'Product Detail';
        $data['url'] = $this->uri->segment(3);
        $data['kategori'] = $this->db->get('kategori')->result_array();
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
        $data['url'] = $this->uri->segment(3);
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['product'] = $this->db->get_where('product', ['id_kategori' => $data['url']])->result_array();
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
        $this->form_validation->set_rules('nama_member', 'Nama Member', 'required|trim');
        $this->form_validation->set_rules('email_member', 'Email Member', 'required|trim|valid_email');
        $this->form_validation->set_rules('pass_member', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/regis');
            $this->load->view('templates/footer_home');
        } else {
            $data = [
                'nama_member' => htmlspecialchars($this->input->post('nama_member', true)),
                'email_member' => htmlspecialchars($this->input->post('email_member', true)),
                'pass_member' => password_hash($this->input->post('pass_member', true), PASSWORD_DEFAULT),
                'alamat' => NULL
            ];
            $this->db->insert('member', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Signup Berhasil !</div>');
            redirect('home/regis');
        }
    }

    public function account_pass()
    {
        $data['member'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|matches[new_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home', $data);
            $this->load->view('home/account');
            $this->load->view('templates/footer_home');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['member']['pass_member'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password sekarang salah!</div>');
                redirect('home/account');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak bisa sama dengan password saat ini!</div>');
                    redirect('home/account');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('pass_member', $password_hash);
                    $this->db->where('id_member', $data['member']['id_member']);
                    $this->db->update('member');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('home/account');
                }
            }
        }
    }

    public function account_editadd()
    {
        $data['member'] = $this->db->get_where('member', ['email_member' => $this->session->userdata('email_member')])->row_array();
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_home', $data);
            $this->load->view('home/account');
            $this->load->view('templates/footer_home');
        } else {
            $alamat = $this->input->post('alamat');
            $this->db->set('alamat', $alamat);
            $this->db->where('id_member', $data['member']['id_member']);
            $this->db->update('member');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
            redirect('home/account');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('email_member');
        $this->session->unset_userdata('nama_member');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out ! </div>');
        redirect('home/log');
    }
}
