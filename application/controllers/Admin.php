<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Dashboard';
        $data['penjual'] = $this->db->get('penjual')->num_rows();
        $data['member'] = $this->db->get('member')->num_rows();
        $data['product'] = $this->db->get('product')->num_rows();
        $data['order'] = $this->db->get('tbl_order')->num_rows();
        $data['packing'] = $this->db->get('packing')->num_rows();
        $data['pengiriman'] = $this->db->get('pengiriman')->num_rows();
        $data['refund'] = $this->db->get('refund')->num_rows();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function list_penjual()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Penjual';
        $data['penjual'] = $this->db->get('penjual')->result_array();
        $this->form_validation->set_rules('nama_penjual', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_penjual', 'Email', 'required|trim');
        $this->form_validation->set_rules('password_penjual', 'Password', 'required|trim');
        $this->form_validation->set_rules('alamat_penjual', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/list_penjual', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_penjual' => htmlspecialchars($this->input->post('nama_penjual', true)),
                'email_penjual' => htmlspecialchars($this->input->post('email_penjual', true)),
                'pass_penjual' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'alamat_penjual' => htmlspecialchars($this->input->post('alamat_penjual', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'role_id' => '2'
            ];
            $this->db->insert('penjual', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penjual berhasil ditambahkan !</div>');
            redirect('admin/list_penjual');
        }
    }

    public function editpenjual($id)
    {
        $data['url'] = $this->uri->segment(2);
        $this->load->model('Admin_model', 'admin');
        $data['title'] = 'Ubah Penjual';
        $data['penjual'] = $this->admin->getPenjualById($id);
        $this->form_validation->set_rules('nama_penjual', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_penjual', 'Email', 'required|trim');
        $this->form_validation->set_rules('alamat_penjual', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/editpenjual', $data);
            $this->load->view('templates/footer');
        } else {
            $id_penjual = $this->input->post('id_penjual');
            $nama_penjual = $this->input->post('nama_penjual');
            $email_penjual = $this->input->post('email_penjual');
            $alamat_penjual = $this->input->post('alamat_penjual');
            $no_hp = $this->input->post('no_hp');
            $this->db->set('nama_penjual', $nama_penjual);
            $this->db->set('email_penjual', $email_penjual);
            $this->db->set('alamat_penjual', $alamat_penjual);
            $this->db->set('no_hp', $no_hp);
            $this->db->where('id_penjual',  $id_penjual);
            $this->db->update('penjual');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penjual berhasil diubah!</div>');
            redirect('admin/list_penjual');
        }
    }

    public function deletepenjual($id)
    {
        $this->db->where('id_penjual', $id);
        $this->db->delete('penjual');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penjual berhasil dihapus !</div>');
        redirect('admin/list_penjual');
    }

    public function list_member()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Pembeli';
        $data['member'] = $this->db->get('member')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_member');
        $this->load->view('templates/footer');
    }

    public function list_product()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Product';
        $data['brand'] = $this->db->get('brand')->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['penjual'] = $this->db->get('penjual')->result_array();
        $data['product'] = $this->db->get('product')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_product');
        $this->load->view('templates/footer');
    }

    public function list_brand()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Brand';
        $data['brand'] = $this->db->get('brand')->result_array();
        $this->form_validation->set_rules('nama_brand', 'Nama Brand', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/list_brand', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_brand' => htmlspecialchars($this->input->post('nama_brand', true))
            ];
            $this->db->insert('brand', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Brand berhasil ditambahkan !</div>');
            redirect('admin/list_brand');
        }
    }

    public function list_kategori()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Product';
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin', $data);
            $this->load->view('templates/topbar_admin', $data);
            $this->load->view('admin/list_kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true))
            ];
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kategori berhasil ditambahkan !</div>');
            redirect('admin/list_kategori');
        }
    }

    public function tambahpro()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Tambah Produk';
        $data['admin'] = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->db->get('tbl_kategori')->result_array();
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahproduk', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['max_width'] = '1360';
                $config['max_height'] = '1360';
                $config['upload_path'] = './assets/img/produk/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
                'id_kategori' => htmlspecialchars($this->input->post('kategori_produk', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'image' => $new_image
            ];

            $this->db->insert('tbl_produk', $data);


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk berhasil ditambahkan !</div>');
            redirect('admin/listproduk');
        }
    }

    public function list_order()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Order';
        $data['order'] = $this->db->get('tbl_order')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_order');
        $this->load->view('templates/footer');
    }

    public function list_packing()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Packing';
        $data['packing'] = $this->db->get('packing')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_packing');
        $this->load->view('templates/footer');
    }

    public function list_pengiriman()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Pengiriman';
        $data['pengiriman'] = $this->db->get('pengiriman')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_pengiriman');
        $this->load->view('templates/footer');
    }

    public function list_refund()
    {
        $data['url'] = $this->uri->segment(2);
        $data['title'] = 'Daftar Refund';
        $data['refund'] = $this->db->get('refund')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar_admin', $data);
        $this->load->view('templates/sidebar_admin', $data);
        $this->load->view('admin/list_refund');
        $this->load->view('templates/footer');
    }
}
