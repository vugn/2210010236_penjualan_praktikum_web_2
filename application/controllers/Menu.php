<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data = array(
            'content' => 'dashboard/index.php',
        );
        $this->load->view('menu/main', $data);
    }
}
