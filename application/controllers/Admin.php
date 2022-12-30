<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        //nyoba manggil data dari database
        // echo "Selamat Datang " . $data['user']['name'];
        $data['title'] = 'SIJAJA Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // load model
        $this->load->model('Admin_model');
        // ambil data dari database melalui model dan akan ditampilkan di view admin.php

        $data['order'] = $this->Admin_model->get_order();
        //load view
        $this->load->view('admin/index', $data);
    }
    public function hapus($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_data($id);
        redirect('Admin');
    }
    public function edit($id)
    {
        $this->load->model('Product_model');
        $data['product'] = $this->Product_model->getAllData();

        $data['bahan'] = ['Katun', 'Slik', 'Linen', 'Toyobo', 'Inma'];
        $data['ukuran'] = ['XXL', 'XL', 'L', 'M', 'S'];
        $data['warna'] = ['Merah', 'Kuning', 'Hijau', 'Biru', 'Hitam', 'Putih'];
        $data['title'] = 'SIJAJA Admin';
        $this->load->model('Admin_model');
        $data['data_lama'] = $this->Admin_model->get_order_where($id);

        $this->load->view('admin/edit', $data);
    }
    public function update($id)
    {
        // $this->load->model('User_model');

        // penjumlahan harga 
        $harga = $this->input->post('harga');
        $banyak = $this->input->post('banyak');
        $jumlah_harga = $harga * $banyak;

        $data_baru = [
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "jenis" => $this->input->post('jenis'),
            "bahan" => $this->input->post('bahan'),
            "ukuran" => $this->input->post('ukuran'),
            "banyak" => $this->input->post('banyak'),
            "jumlah_harga" => $jumlah_harga,
            "warna" => $this->input->post('warna'),
        ];
        $this->load->model('Admin_model');
        $this->Admin_model->update($id, $data_baru);
        redirect('Admin');
    }
}
