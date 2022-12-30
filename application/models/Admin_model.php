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
    public function get_order_where($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('order')->result_array();
    }
    public function update($where, $data_baru)
    {
        $this->db->where('id', $where);
        $this->db->update('order', $data_baru);
    }
}
