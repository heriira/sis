<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:#f9243f; margin-bottom: 5px; margin-top:2px">', '</div>');
    }

    public function index()
    {
        $data = array('guru' => $this->M_guru->get_guru());
        $this->load->view('admin/pages/guru', $data);
    }
}
