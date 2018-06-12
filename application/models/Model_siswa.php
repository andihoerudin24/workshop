<?php
Class Model_siswa extends CI_Model{
    
    function add(){
        $data=array(
            'nis'        =>$this->input->post('nis'),
            'nama'       =>$this->input->post('nama'),
            'no_hp_ortu' =>$this->input->post('no_hp_ortu'),
            'wali_kelas' =>$this->input->post('wali_kelas'),
            'kelas'      =>$this->input->post('kelas'),
            'alamat'     =>$this->input->post('alamat')
        );
        $this->db->insert('siswa',$data);
        
    }
    
     function all(){
		//query semua record di table user
		$hasil = $this->db->get('siswa');
		if ($hasil->num_rows()>0) {
			# code...
			return $hasil->result();
		}else{
			return array();
		}
	}
    
    
    function edit(){
        $data=array(
            'nama'       =>$this->input->post('nama'),
            'no_hp_ortu' =>$this->input->post('no_hp_ortu'),
            'wali_kelas' =>$this->input->post('wali_kelas'),
            'kelas'      =>$this->input->post('kelas'),
            'alamat'     =>$this->input->post('alamat')
        );
       $nis= $this->input->post('nis');
       $this->db->where('nis',$nis);
       $this->db->update('siswa',$data);
    } 
    
    
}
?>