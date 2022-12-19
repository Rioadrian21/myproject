<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('Product_model');
        $data['product'] = $this->Product_model->getAllData();
        // var_dump($data['product']);
        //nyoba manggil data dari database
        // echo "Selamat Datang " . $data['user']['name'];
        $data['title'] = 'SIJAJA User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //load view
        $this->load->view('user/index', $data);
    }
    public function tambah()
    {
        // load model admin
        $this->load->model('User_model');

        // penjumlahan harga 
        $harga = $this->input->post('harga');
        $banyak = $this->input->post('jumlah');
        $jumlah_harga = $harga * $banyak;


        $data = [
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "jenis" => $this->input->post('jenis'),
            "bahan" => $this->input->post('bahan'),
            "ukuran" => $this->input->post('ukuran'),
            "banyak" => $this->input->post('jumlah'),
            "jumlah_harga" => $jumlah_harga,
            "warna" => $this->input->post('warna'),
        ];


        // Start now
        $this->User_model->tambah($data);
        // var_dump($data);
        redirect('User');
    }
}
