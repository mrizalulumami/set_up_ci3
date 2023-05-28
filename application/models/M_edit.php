<?php

class M_edit extends CI_model{
    
    public function edit_data($array_data, $param1, $param2,$database){
        $this->db->set($array_data);
        $this->db->where($param1, $param2);
        $this->db->update($database);
    }
}