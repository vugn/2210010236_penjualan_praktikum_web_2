<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data User',
            'user' => $this->User_Model->getAll(),
            'content' => 'user/index'
        );
        $this->load->view('menu/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data User',
            'content' => 'user/add_form'
        );
        $this->load->view('menu/main', $data);
    }

    public function save()
    {
        $this->User_Model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("Success", "Data Berhasil Disimpan");
        }
        redirect("user");
    }
}
