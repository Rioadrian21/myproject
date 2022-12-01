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
}
