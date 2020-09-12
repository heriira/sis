<?php

class m_nilai extends CI_Model
{

    public $table = 'nilai';
    public $id = 'id_nilai';

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function tampildata()
    {
        $this->db->order_by('id_nilai', 'ASC');
        $this->db->from('nilai');
        $this->db->join('guru', 'guru.kd_guru=nilai.kd_guru');
        $this->db->join('siswa', 'siswa.nis=nilai.nis');
        $this->db->join('mapel', 'mapel.kd_mapel=nilai.kd_mapel');
        $query = $this->db->get();
        return $query->result();
    }

    function nilai_akhir()
    {
        return $this->db->query('SELECT SUM(uh+uts+uas)/3 FROM nilai');
    }
}
