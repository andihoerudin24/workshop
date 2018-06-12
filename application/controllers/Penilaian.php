<?php

Class Penilaian extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_siswa');
        $this->load->Model('Model_kriteria');
    }

    function index() {
        $data['siswa'] = $this->Model_siswa->all();
        $data['kriteria'] = $this->Model_kriteria->all();
        $this->template->load('template', 'penilain/list', $data);
    }

    function hitung() {
        $siswa = $this->Model_siswa->all();
        $kriteria = $this->Model_kriteria->all();
        $data['siswa'] = $this->Model_siswa->all();
        $data['kriteria'] = $this->Model_kriteria->all();
        $this->template->load('template', 'penilain/hasil', $data);
    }
}
?>