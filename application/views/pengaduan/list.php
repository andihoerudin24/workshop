<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <strong>FORM</strong>
            <small>PENGADUAN</small>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="company">Nama</label>
                <?php echo cmb_dinamis('siswa', 'siswa', 'nama', 'nis', NULL, "id='nis' onChange='isi_otomatis()'") ?>
            </div>
            <div class="form-group">
                <label for="vat">No hp orang tua siswa</label>
                <input type="text" class="form-control" readonly=""  name="no_hp_ortu" id="no_hp_ortu">
            </div>
            <div class="form-group">
                <label for="street">Keterangan</label>
                <textarea class="texteditor" id="keterangan" name="keterangan" placeholder="Please enter your message here..." rows="5"></textarea>
            </div>
            <!--/.row-->
            <button type="submit" name="submit" class="btn btn-danger" onclick="kirim()">Kirim</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    function isi_otomatis() {
        var nis = $("#nis").val();
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Pengaduan/form_autocomplit',
            data: 'nis=' + nis,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#no_hp_ortu").val(obj.no_hp_ortu);
            }
        });
    }
    function kirim() {
        var no_hp_ortu = $("#no_hp_ortu").val();
        var keterangan = $("#keterangan").val();
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Pengaduan/kirim_pesan',
            data: 'no_hp_ortu='+no_hp_ortu+'&keterangan='+keterangan,
            success: function (data) {
                swal("oke","sms terlah terkirim ke nomor hp ortu","info");
            }
        });
    }

</script>