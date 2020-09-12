<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa');
        $this->load->model('M_guru');
        $this->load->model('M_mapel');
        $this->load->model('M_nilai');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:#f9243f; margin-bottom: 5px; margin-top:2px">', '</div>');
    }
    public function index()
    {
        $data['nilai'] = $this->M_nilai->tampildata();
        $this->load->view('admin/pages/nilai/nilai', $data);
    }

    function add_nilai()
    {
        $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
        $data['guru'] = $this->M_guru->get_data('guru')->result();
        $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
        $data['na'] = $this->M_nilai->nilai_akhir();
        $this->load->view('admin/pages/nilai/tambah', $data);
    }

    function add_nilai_act()
    {
        $kd_guru = $this->input->post('kd_guru');
        $nis = $this->input->post('nis');
        $kd_mapel = $this->input->post('kd_mapel');
        $uh = $this->input->post('uh');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');
        $tugas = $this->input->post('tugas');

        $this->form_validation->set_rules('kd_guru', 'Guru', 'trim|required');
        $this->form_validation->set_rules('nis', 'Siswa', 'trim|required');
        $this->form_validation->set_rules('kd_mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('uh', 'Ujian Harian', 'trim|required');
        $this->form_validation->set_rules('uts', 'Ujian Tengah Semester', 'trim|required');
        $this->form_validation->set_rules('uas', 'Ujian Akhir Semester', 'trim|required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'trim|required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'kd_guru' => $kd_guru,
                'nis' => $nis,
                'kd_mapel' => $kd_mapel,
                'uh' => $uh,
                'uts' => $uts,
                'uas' => $uas,
                'tugas' => $tugas
            );
            $this->M_nilai->input_data($data, 'nilai');
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil disimpan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect(base_url() . 'admin/nilai');
        } else {
            $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
            $data['guru'] = $this->M_guru->get_data('guru')->result();
            $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
            $this->load->view('admin/pages/nilai/tambah', $data);
        }
    }
    function edit($id_nilai)
    {
        $where = array('id_nilai' => $id_nilai);
        $data['guru'] = $this->M_guru->get_data('guru')->result();
        $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
        $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
        $data['nilai'] = $this->M_nilai->edit_data($where, 'nilai')->result();
        // $data['nilai'] = $this->M_nilai->tampildata();
        $this->load->view('admin/pages/nilai/edit', $data);
    }

    function edit_act()
    {
        $id_nilai = $this->input->post('id_nilai');
        $kd_guru = $this->input->post('kd_guru');
        $nis = $this->input->post('nis');
        $kd_mapel = $this->input->post('kd_mapel');
        $uh = $this->input->post('uh');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');
        $tugas = $this->input->post('tugas');

        $this->form_validation->set_rules('kd_guru', 'Guru', 'trim|required');
        $this->form_validation->set_rules('nis', 'Siswa', 'trim|required');
        $this->form_validation->set_rules('kd_mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('uh', 'Ujian Harian', 'trim|required');
        $this->form_validation->set_rules('uts', 'Ujian Tengah Semester', 'trim|required');
        $this->form_validation->set_rules('uas', 'Ujian Akhir Semester', 'trim|required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'trim|required');

        if ($this->form_validation->run() != false) {
            $where = array('id_nilai' => $id_nilai);
            $data = array(
                'kd_guru' => $kd_guru,
                'nis' => $nis,
                'kd_mapel' => $kd_mapel,
                'uh' => $uh,
                'uts' => $uts,
                'uas' => $uas,
                'tugas' => $tugas,
            );
            $this->M_nilai->update_data($where, $data, 'nilai');
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil disimpan !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect(base_url() . 'admin/nilai');
        } else {
            $where = array('id_nilai' => $id_nilai);
            $data['guru'] = $this->M_guru->get_data('guru')->result();
            $data['mapel'] = $this->M_mapel->get_data('mapel')->result();
            $data['siswa'] = $this->M_siswa->get_data('siswa')->result();
            $data['nilai'] = $this->M_nilai->edit_data($where, 'nilai')->result();
            $this->load->view('admin/pages/siswa/edit', $data);
        }
    }

    function delete($id_nilai)
    {
        $where = array('id_nilai' => $id_nilai);
        $this->M_nilai->hapus_data($where, 'nilai');
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Good !</strong> Data berhasil dihapus !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/nilai');
    }
}
