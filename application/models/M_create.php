<?php

class M_create extends CI_model{
   public function upload_data($table_name, $data){
      $this->db->insert($table_name, $data);
   }
}