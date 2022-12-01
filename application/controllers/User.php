<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
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
        // Start now
        $this->User_model->proses_tambah();
        redirect('User');
    }
}
