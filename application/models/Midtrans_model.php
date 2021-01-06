<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Midtrans_model extends CI_Model
{
    public function getAllCart()
    {
        $this->db->select('a.*,b.product,b.qty');
        $this->db->join('product as b', 'a.id_product =b.id_product');
        return $this->db->get('cart as a')->result_array();
    }
}
