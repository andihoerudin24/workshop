<?php
foreach ($kriteria as $a) {
    $kdKriteriaArr[] = $a->kd_kriteria;
}
$countKritArr = count($kdKriteriaArr);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="card text-white bg-primary">
            Masukkan Nilai di setiap kolom Alternatif dari tiap Kriteria pada Form Penilaian Di Bawah. Kemudian Klik 'Hitung'.</br>
            Keterangan :</br>
            C1 : CABUT SEKOLAH (Persentase 1-100)</br>
            C2 : TAWURAN (Nilai Rating Kecocokan 1-5)</br>
            C3 : MOLOR DIKELAS (Nilai Rating Kecocokan 1-5)</br>
            Nilai Rating Kecocokan:</br>
            1 : Sangat Buruk</br>
            2 : Buruk</br>
            3 : Cukup</br>
            4 : Baik</br>
            5 : Sangat Baik</br>




        </div>
    </div>
</div>
    <?=form_open_multipart('Penilaian/hitung',array('class'=>'form-horizontal form-label-left','id'=>'demo-form2'))?>
<div class="row">
    <div class="col-md-12">
        
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <th rowspan="2" style='text-align:center;'> ALTERNATIF </th>
        <?php
        echo "<th colspan='6' style='text-align:center;'>KRITERIA</th>";
        echo "<tr>";
        foreach ($kriteria as $krit) {

            echo "<th style='text-align:center;'>" . $krit->kd_kriteria . "</th>";
        }

        echo "</tr>";
        ?>
        </thead>

        <?php
        $i = 1;
        foreach ($siswa as $kar) {

            echo "<tr>";
            echo "<td>" . $kar->nama . "</td>";
            $j = 1;
            foreach ($kriteria as $krit) {
                echo "<input type='hidden' name='nik[$i][$j]' value='" . $kar->nis . "'>";
                echo "<input type='hidden' name='kdKriteria[$i][$j]' value='" . $krit->kd_kriteria . "'>";
                echo "<input type='hidden' name='nmKaryawan[$i][$j]' value='" . $kar->nama . "'>";
                echo "<td><input type='number' min='0' name='nilai[$i][$j]' placeholder='nilai' required='required' class='form-control'></td>";
                $j++;
            }


            echo "</tr>";
            $i++;
        }
        ?>

    </table>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-success">Hitung</button>
          
        </div>
    </div>
<?= form_close() ?>
        
    </div>
</div>                
                    