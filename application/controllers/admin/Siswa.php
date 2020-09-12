<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa');
        $this->load->model('M_kelas');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:#f9243f; margin-bottom: 5px; margin-top:2px">', '</div>');
    }

    public function index()
    {
        $data = array('siswa' => $this->M_siswa->get_siswa());
        $this->load->view('admin/pages/siswa/siswa', $data);
    }

    public function add_siswa()
    {
        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
        $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
        $this->load->view('admin/pages/siswa/add', $data);
    }

    function add_siswa_act()
    {

        $nis = $this->input->post('nis');
        $nama_siswa = $this->input->post('nama_siswa');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $kd_kelas = $this->input->post('kd_kelas');

        $this->form_validation->set_rules('nis', 'Nis', 'trim|required');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kd_kelas', 'Kode Kelas', 'trim|required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'nis' => $nis,
                'nama_siswa' => $nama_siswa,
                'jk' => $jk,
                'alamat' => $alamat,
                'kd_kelas' => $kd_kelas
            );
            $this->M_siswa->input_data($data, 'siswa');
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil disimpan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect(base_url() . 'admin/siswa');
        } else {
            $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
            $this->load->view('admin/pages/siswa/add', $data);
        }
    }

    function edit($nis)
    {
        $where = array('nis' => $nis);
        $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
        $data['siswa'] = $this->M_siswa->edit_data($where, 'siswa')->result();
        $this->load->view('admin/pages/siswa/edit', $data);
    }

    function edit_act()
    {
        $nis = $this->input->post('nis');
        $nama_siswa = $this->input->post('nama_siswa');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $kd_kelas = $this->input->post('kd_kelas');

        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kd_kelas', 'Kode Kelas', 'trim|required');

        if ($this->form_validation->run() != false) {
            $where = array('nis' => $nis);
            $data = array(
                'nama_siswa' => $nama_siswa,
                'jk' => $jk,
                'alamat' => $alamat,
                'kd_kelas' => $kd_kelas
            );
            $this->M_siswa->update_data($where, $data, 'siswa');
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil disimpan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect(base_url() . 'admin/siswa');
        } else {
            $where = array('nis' => $nis);
            $data['kelas'] = $this->M_kelas->get_data('kelas')->result();
            $data['siswa'] = $this->M_siswa->edit_data($where, 'siswa')->result();
            $this->load->view('admin/pages/siswa/edit', $data);
        }
    }

    function delete($nis)
    {
        $where = array('nis' => $nis);
        $this->M_siswa->hapus_data($where, 'siswa');
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil dihapus !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/siswa');
    }
}
