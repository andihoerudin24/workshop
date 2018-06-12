<body onload="show()"></body>
<div class="row">
    <div class="col-sm-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah data
        </button>
    </div>
</div>
<hr>
<!-- Modal For add -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label><b>Nuptk</b></label>
                <input type="text" class="form-control" maxlength="7" id="nik">

                <label><b>Nama</b></label>
                <input type="text" class="form-control" maxlength="20" id="name">

                <label><b>Alamat</b></label>
                <textarea class="form-control" id="addres" maxlength="40"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" onclick="tambah()" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal For add -->


<!-- Modal for edit -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label><b>Nuptk</b></label>
                <input type="text" class="form-control" maxlength="7" readonly="" id="nuptk">

                <label><b>Nama</b></label>
                <input type="text" class="form-control" maxlength="20" id="nama">

                <label><b>Alamat</b></label>
                <textarea class="form-control" id="alamat" maxlength="40"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" onclick="update()" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for edit -->



<div class="row">
    <div class="col-sm-12">

        <div id="show"></div>

    </div>
</div>
<script>
    $(document).ready(function({
    show()
    });
</script>
<script type="text/javascript">
    function show() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Guru/show',
            data: '',
            success: function (html) {
                $("#show").html(html)
            }
        });
    }

    function Hapus(nuptk) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Guru/hapus',
            data: 'nuptk=' + nuptk,
            success: function (html) {
                swal("Sukses", "Berhasil Hapus data", "warning");
                show();
            }
        })
    }

    function tambah() {
        var nik = $("#nik").val()
        var name = $("#name").val()
        var addres = $("#addres").val()
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Guru/tambah',
            data: 'nik=' + nik + '&name=' + name + '&addres=' + addres,
            success: function (html) {
                swal("Yeah", "Tambah data sukses", "success");
                show();
            }
        })
    }

    function show_by_id(nuptk) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Guru/show_by_id',
            data: 'nuptk=' + nuptk,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#nama").val(obj.nama);
                $("#nuptk").val(obj.nuptk);
                $("#alamat").val(obj.alamat);
            }
        })
    }
    
   function update(){
        var nuptk  = $("#nuptk").val()
        var nama   = $("#nama").val()
        var alamat = $("#alamat").val()
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Guru/update',
            data: 'nuptk=' + nuptk + '&nama=' + nama + '&alamat=' + alamat,
            success: function (html) {
                swal("Yeah", "Edit data sukses", "info");
                show();
            }
        })
    }
</script>




