<?php

class M_delete extends CI_model{
	public function delete_data($table_name, $param1,$param2)
	{
		$this->db->where($param1, $param2);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}

}