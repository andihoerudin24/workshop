<?php
Class Siswa extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_siswa');
    }
            
    
    function index(){
        $data['siswa']= $this->db->query('SELECT s.nis,s.nama,s.alamat,s.no_hp_ortu,s.kelas,g.nama as wali_kelas FROM siswa as s, guru as g WHERE s.wali_kelas=g.nuptk')->result();
        $this->template->load('template','siswa/list',$data);   
    }
    
    
    function add(){
     if (isset($_POST['submit'])) {
        $this->Model_siswa->add();
        $this->session->set_flashdata('berhasil','Sukses  memasukan data !!!');
        redirect('Siswa');
     }else{
        $this->template->load('template','siswa/list'); 
    }
  }
  
  
    function edit(){
        if (isset($_POST['submit'])) {
          $this->Model_siswa->edit();
          $this->session->set_flashdata('edit','Sukses edit siswa !!!');
          redirect('Siswa');
       }else{
         $id= $this->uri->segment(3);
         $data['siswa']=$this->db->get_where('siswa',array('nis'=>$id))->row_array();
         $this->template->load('template','siswa/edit',$data);    
       }
   }
  
    function hapus(){
        $id= $this->uri->segment('3'); 
        $this->db->where('nis',$id);
        $this->db->delete('siswa');
        $this->session->set_flashdata('hapus','Sukses hapus siswa !!!');
        redirect('Siswa');
     }
}
?>