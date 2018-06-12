<div class="row">
    <div class="col-md-12">
      
<div class="card">
    <div class="card-header">
        <strong>Form</strong>
        Edit Siswa
    </div>
    <div class="card-body">
        
        <?php
        echo form_open('Siswa/edit','class="form-horizontal"');
        echo form_hidden('nis',$siswa['nis']); 
        ?>
      
            <div class="form-group row">
                
                <label class="col-md-3 col-form-label" for="text-input">NAMA</label>
                <div class="col-md-9">
                    <input type="text" id="text-input" name="nama" class="form-control" value="<?php echo $siswa['nama'];?>">
                </div>
            </div>
            
            <div class="form-group row">
                
                <label class="col-md-3 col-form-label" for="email-input">NO HP ORANG TUA</label>
                <div class="col-md-9">
                    <input type="text" id="email-input" name="no_hp_ortu" class="form-control" value="<?php echo $siswa['nama'];?>">
                </div>
                
            </div>
            
            <div class="form-group row">
                
                <label class="col-md-3 col-form-label" for="password-input">WALI KELAS</label>
                <div class="col-md-9">
                    <?php echo cmb_dinamis('wali_kelas','guru','nama','nuptk',$siswa['wali_kelas']); ?>
                 </div>
                
            </div>
            
            <div class="form-group row">
                
                <label class="col-md-3 col-form-label" for="password-input">KELAS</label>
                <div class="col-md-9">
                    <input type="text" maxlength="2"  name="kelas" class="form-control" value="<?php echo $siswa['kelas'];  ?>">
                </div>
                
            </div>
            
            <div class="form-group row">
                
                <label class="col-md-3 col-form-label" for="textarea-input">Alamat</label>
                <div class="col-md-9">
                    <textarea name="alamat" rows="6" class="form-control"><?php echo $siswa['alamat']; ?></textarea>
                </div>
                
            </div>
            
    </div>
    <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-sm btn-primary">
            <i class="fa fa-dot-circle-o"></i>Update</button>
         <?php echo anchor('Siswa','Kembali',array('class'=>'btn btn-danger btn-sm')) ?>  
      <?php echo form_close(); ?>          
    </div>
</div>  
    </div>
</div>