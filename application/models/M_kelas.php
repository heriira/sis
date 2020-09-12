<?php

class m_kelas extends CI_Model
{

    public $table = 'kelas';
    public $id = 'kd_kelas';

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_kelas()
    {
        $query = $this->db->get('kelas');
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
}
