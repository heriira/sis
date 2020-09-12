<?php

class m_siswa extends CI_Model
{

    public $table = 'siswa';
    public $id = 'nis';

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_siswa()
    {
        $query = $this->db->get('siswa');
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
