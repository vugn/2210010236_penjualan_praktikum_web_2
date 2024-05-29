<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        $this->load->view('login/index');
    }

    public function doLogin()
    {
        $user = $this->input->post('email');
        $pw = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $user])->row_array();
        if ($user) {
            if (password_verify($pw, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'role' => $user['role'],
                ];
                $userId = $user['id'];
                $this->session->set_userdata($data);
                if ($user['role'] == "PEMILIK") {
                    $this->_updateLastLogin($userId);
                    redirect('menu');
                } elseif ($user['role'] == "ADMIN") {
                    $this->_updateLastLogin($userId);
                    redirect('user');
                } elseif ($user['role'] == "KASIR") {
                    $this->_updateLastLogin($userId);
                    redirect('kasir');
                } else {
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger fw-bold" role="alert">Password Salah!</div>');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning fw-bold" role="alert">Akun Tidak Terdaftar!</div>');
            redirect('/');
            // ☝️
        }
    }
    private function _updateLastLogin($userId)
    {
        $sql = "UPDATE user SET last_login=now() WHERE id=$userId";
        $this->db->query($sql);
    }
}
