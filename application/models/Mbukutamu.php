<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Mbukutamu extends CI_model
{
    public function getbukutamu()
    {
        return $this->db->get('tbl_bukutamu');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('tbl_bukutamu', $data);
    }

    public function getbukutamuWhere($where = null)
    {
        return $this->db->get_where('tbl_bukutamu', $where);
    }

    public function hapusbukutamu($where = null)
    {
        $this->db->delete('tbl_bukutamu', $where);
    }

    public function updatebukutamu($data = null, $where = null)
    {
        $this->db->update('tbl_bukutamu', $data, $where);
    }
}