<?php
class Admin_model extends CI_model
{
    public function get_order()
    {
        return $this->db->get('order')->result_array();
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order');
    }
}
