<?php

class m_mapel extends CI_Model
{

    public $table = 'mapel';
    public $id = 'kd_mapel';

    function get_mapel()
    {
        $query = $this->db->get('mapel');
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
