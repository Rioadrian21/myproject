<?php

class Product_model extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('product')->result();
    }
}
