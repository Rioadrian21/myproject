<?php
class User_model extends CI_model
{
    public function proses_tambah()
    {
        $data = [
            "name" => $this->input->post('nami'),
            "email" => $this->input->post('email'),
            "jenis" => $this->input->post('jenis'),
            "bahan" => $this->input->post('bahan'),
            "ukuran" => $this->input->post('ukuran'),
            "jumlah" => $this->input->post('jumlah'),
            "warna" => $this->input->post('warna'),
        ];

        $this->db->insert('order', $data);
    }
}
