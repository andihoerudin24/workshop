<?php
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        chek_seesion();
    }

    public function index()
    {
        $data['siswa']= $this->db->query('SELECT COUNT(nis) as jumlah FROM siswa')->result();
        $this->template->load('template', 'dashboard',$data);
        //$this->load->view('template');
    }

}

?>
