<?php
Class Model_kriteria extends CI_Model{
    
    
    
     function all(){
		//query semua record di table user
		$hasil = $this->db->get('tbl_kriteria');
		if ($hasil->num_rows()>0) {
			# code...
			return $hasil->result();
		}else{
			return array();
		}
	}
}



?>