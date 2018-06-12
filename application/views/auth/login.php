<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Workshop</title>
    <!-- Icons-->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
                <?php 
                if ($this->session->flashdata('gagal')) {
                    echo "<div class='alert alert-danger'>";
                    echo $this->session->flashdata('gagal');
                    echo "</div>";
                    }
                ?>
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <?php echo form_open('Auth/chek_login');?>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                      <button type="submit" name="submit" class="btn btn-primary px-4">Login</button>
                  </div>
                </div>
                <?php echo form_close();  ?>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Hai Selamat Datang</h2>
                  <p>Untuk Menggunakan Aplikasi Anda Harus Login Terlebih Dahulu</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>