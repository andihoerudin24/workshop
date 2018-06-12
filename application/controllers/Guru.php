<?php

Class Guru extends CI_Controller {

    function index() {
        $this->template->load('template','guru/list');
    }

    function show() {
        echo "<div class='card text-white bg-danger'>
  <table class='table table-hover'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nuptk</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi Edit</th>
            <th>Aksi Delete</th>
        </tr>
    </thead>
    <tbody>";
        $data = $this->db->query('select * from guru ORDER BY nama ASC')->result();
        $no = 1;
        foreach ($data as $row) {
            echo "
        <tr>
            <td>$no</td>
            <td>$row->nuptk</td>
            <td>$row->nama</td>
            <td>$row->alamat</td>
            <td><button type='button' class='btn btn-info' data-toggle='modal' onclick=show_by_id($row->nuptk) data-target='#Modal'>Edit</button></td>
            <td><button type='button' class='btn btn-primary btn-sm' onclick='Hapus($row->nuptk)'>Hapus</button></td>
            </tr>";
            $no++;
        }
        echo "</tbody>
        </table>
    </div>";
    }

    function tambah() {
        $nuptk = $_GET['nik'];
        $nama = $_GET['name'];
        $alamat = $_GET['addres'];
        $data = array(
            'nuptk' => $nuptk,
            'nama' => $nama,
            'alamat' => $alamat
        );
        $this->db->insert('guru', $data);
    }

    function hapus() {
        $id = $_GET['nuptk'];
        $siswa = $this->db->query("select * from siswa where wali_kelas='$id'")->row_Array();
        $this->db->where('nuptk', $id);
        $this->db->delete('guru');
        
    }

    function show_by_id() {
        $nuptk    = $_GET['nuptk'];
        $sql_guru = "select * from guru where nuptk='$nuptk' ";
        $guru    = $this->db->query($sql_guru)->row_Array();
        $data = array(
            'nuptk'  => $guru['nuptk'],
            'nama'   => $guru['nama'],
            'alamat' => $guru['alamat']
        );
        echo json_encode($data);
    }
    
    function update(){
        $nuptk=$_GET['nuptk'];
        $data=array(
            'nama'   => $_GET['nama'],
            'alamat' => $_GET['alamat']
       );
       $this->db->where('nuptk',$nuptk);
       $this->db->update('guru',$data);
        
    }

}

?>