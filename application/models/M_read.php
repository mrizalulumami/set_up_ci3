<?php

class M_read extends CI_model{

    public function read_data($nama_database)
    {
        $sql = $this->db->query("SELECT * FROM $nama_database");
        return $sql;
    }
    public function read_data_by_id($nama_database, $id, $param)
    {
        $sql = $this->db->query("SELECT * FROM $nama_database where $id=$param");
        return $sql;
    }
    public function read_data_by_id_1param($nama_database, $param1a, $param1b)
    {
        $sql = $this->db->query("SELECT * FROM $nama_database where $param1a=$param1b");
        return $sql;
    }
    public function read_data_by_2param_and($nama_database, $param1a,$param1b, $param2a, $param2b)
    {
        $sql = $this->db->query("SELECT * FROM $nama_database where $param1a=$param1b and $param2a=$param2b");
        return $sql;
    }
    public function read_data_by_2param_or($nama_database, $param1a,$param1b, $param2a, $param2b)
    {
        $sql = $this->db->query("SELECT * FROM $nama_database where $param1a=$param1b and $param2a=$param2b");
        return $sql;
    }
}