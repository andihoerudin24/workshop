<?php  
if ($this->session->flashdata('berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('berhasil');
    echo "</div>";
}elseif ($this->session->flashdata('edit')) {
    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('edit');
    echo "</div>"; 
}elseif ($this->session->flashdata('hapus')) {
    echo "<div class='alert alert-danger'>";
    echo $this->session->flashdata('hapus');
    echo "</div>"; 
}
?>
<div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah data
     </button>
    </div>
</div>
<hr>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php echo form_open('Siswa/add');  ?>
          <label><b>Nis</b></label>
          <input type="text" class="form-control" maxlength="7" name="nis">
          
          <label><b>Nama</b></label>
          <input type="text" class="form-control" maxlength="20" name="nama">
          
          <label><b>No hp orang tua</b></label>
          <input type="number" class="form-control" name="no_hp_ortu">
          
          <label><b>Wali kelas</b></label>
           <?php echo cmb_dinamis('wali_kelas','guru','nama','nuptk')  ?>
          
          <label><b>Kelas</b></label>
          <input type="number" maxlength="2" class="form-control" name="kelas">
         
          
          <label><b>Alamat</b></label>
          <textarea class="form-control" name="alamat" maxlength="40"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
         <?php echo form_close(); ?>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="row">
<div class="col-sm-12">
    <div class="card text-white bg-primary">
        <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Wali Kelas</th>
            <th>Kelas</th>
            <th>Aksi Edit</th>
            <th>Aksi Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no=1;
        foreach ($siswa as $n) {
            echo "
        <tr>
            <td>$no</td>
            <td>$n->nis</td>
            <td>$n->nama</td>
            <td>$n->wali_kelas</td>
            <td>$n->kelas</td>
            <td>". anchor('Siswa/edit/'.$n->nis,'EDIT',array('class'=>'btn btn-danger btn-sm'))."</td>
            <td>". anchor('Siswa/hapus/'.$n->nis,'HAPUS',array('class'=>'btn btn-info btn-sm'))."</td>
        </tr>";
            $no++;
        }
        
        ?>
    </tbody>
</table>
</div>
</div>
</div>



