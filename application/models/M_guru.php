<?php

class m_guru extends CI_Model
{

    public $table = 'guru';
    public $id = 'kd_guru';

    function get_by_id($kd_gueu)
    {
        $this->db->where($this->kd_gueu, $kd_gueu);
        return $this->db->get($this->table)->row();
    }

    function get_guru()
    {
        $query = $this->db->get('guru');
        return $query->result_array();
    }

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

    function get_data_siswa()
    {
        return $this->db->get('siswa')->result();
    }
}
