<?php
class User_model extends CI_model
{
    public function tambah($data)
    {


        $this->db->insert('order', $data);
    }
}
