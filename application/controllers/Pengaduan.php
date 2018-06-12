<?php
Class Pengaduan extends CI_Controller{
    
    function index(){
        $this->template->load('template','pengaduan/list');
    }
    
    function form_autocomplit() {
        $nis = $_GET['nis'];
        $sql_siswa = "select * from siswa where nis='$nis'";
        $siswa = $this->db->query($sql_siswa)->row_Array();
        $data = array(
            'no_hp_ortu' => $siswa['no_hp_ortu']
        );
        echo json_encode($data);
    }
    
    
    function kirim_pesan(){
        $no_hp=$_GET['no_hp_ortu'];
        $keterangan=$_GET['keterangan'];
        pesan($no_hp,$keterangan);
    }
    
}



?>