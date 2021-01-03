<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getProduk($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_produk', $keyword);
        }
        return $this->db->get('tbl_produk', $limit, $start)->result_array();
    }

    public function getProdukById($id)
    {
        return  $this->db->get_where('product', ['id_product' => $id])->row_array();
    }

    public function getKategoriById($id)
    {
        return  $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
    }

    public function getBrandById($id)
    {
        return  $this->db->get_where('brand', ['id_brand' => $id])->row_array();
    }

    public function getPenjualById($id)
    {
        return  $this->db->get_where('penjual', ['id_penjual' => $id])->row_array();
    }
}
