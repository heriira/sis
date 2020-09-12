<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mapel');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:#f9243f; margin-bottom: 5px; margin-top:2px">', '</div>');
    }

    public function index()
    {
        $data = array('mapel' => $this->M_mapel->get_mapel());
        $this->load->view('admin/pages/mapel', $data);
    }
}
