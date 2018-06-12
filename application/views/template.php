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
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Workshop</title>
    <!-- Main styles for this application-->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Main styles for this application-->
    
    <!-- Icons fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Icons fontawesome-->
    
     <!-- css for datatables-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css"> 
    <!-- css for datatables-->
 
 </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo base_url()?>assets/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="<?php echo base_url()?>assets/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      
</header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            
           <li class="nav-item">
               <a class="nav-link" href="<?php echo site_url('Dashboard');?>">
                <i class="nav-icon fa fa-home"></i>Dashboard
                </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Siswa'); ?>">
                <i class="nav-icon fa fa-users"></i>Siswa
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Guru'); ?>">
                <i class="nav-icon fa fa-ambulance"></i>Guru
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Penilaian')  ?>">
                  <i class="nav-icon fa fa-user"></i>Penilaian
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Pengaduan')  ?>">
                  <i class="nav-icon fa fa-graduation-cap"></i>Form Pengaduan
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Auth/Logout') ?>">
                  <i class="nav-icon fa fa-sign-out-alt"></i>Logout
                </a>
            </li>
            
            
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                    </div>
                     <?php 
                        $total=$this->db->query("SELECT COUNT(nis) as jumlah FROM siswa")->result();
                        foreach ($total as $row) {
                         echo  "<div class='text-value'>$row->jumlah</div>";   
                          } 
                      ?> 
                    <div>JUMLAH SISWA</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!--/.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                    <button type="button" class="btn btn-transparent p-0 float-right">
                      <i class="icon-location-pin"></i>
                    </button>
                    <?php
                    $total=$this->db->query("SELECT COUNT(nuptk) as jumlah FROM guru")->result();
                        foreach ($total as $row) {
                         echo  "<div class='text-value'>$row->jumlah</div>";   
                          }
                    ?> 
                     <div>JUMLAH GURU</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!--/.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                    </div>
                    <?php
                    $total=$this->db->query("SELECT COUNT(kd_kriteria) as jumlah FROM tbl_kriteria")->result();
                        foreach ($total as $row) {
                         echo  "<div class='text-value'>$row->jumlah</div>";   
                          }
                    ?> 

                    <div>JUMLAH KRITERIA</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                  </div>
                </div>
              </div> 
              <!--/.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                    </div>

                    <?php
                    $total=$this->db->query("SELECT COUNT(id) as jumlah FROM user")->result();
                        foreach ($total as $row) {
                         echo  "<div class='text-value'>$row->jumlah</div>";   
                          }
                    ?> 
                    <div>JUMLAH PENGGUNA</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->

            <?php echo $contents ?>
              
      </main>
      
    </div>
        </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
        
   <!-- Bootstrap and necessary plugins-->
   <script src="<?php echo base_url()?>assets/js/main.js"></script>
   <!-- sweat allert-->
   <script src="<?php echo base_url()?>assets/js/sweetalert.min.js"></script>
   <!-- sweat allert-->
   
   <!-- plugin datatables -->
   <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.js"></script>
   <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap4.min.js"></script>
   <!-- plugin datatables -->
   
   <!-- js bawaan bootstrap --> 
   <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
   <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
   <!-- js bawaan bootstrap --> 
 
    <!-- plugin for ckeditor --> 
   <script type="text/javascript" src="<?Php echo base_url() ?>ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
    <!-- plugin for ckeditor --> 
 
 
<!-- chart js plugins-->
<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    });
    
    $('textarea.texteditor').ckeditor();
    
    function redirectCU(e) {
                if (e.ctrlKey && e.which ==85) {
                    swal("JANGAN DILIHAT", "KAMU GA AKAN KUAT", "warning");
                    //window.location.replace("https://perampokgoogle.blogspot.com/p/sitemap.html");
                    return false;

                }
            }
            document.onkeydown = redirectCU;
            function redirectKK(e) {
                if (e.which == 3) {
                    swal("PERKEMBANGAN TEKNOLOGI","ITU BERAT JENDRAL", "info");
                    //window.location.replace("https://perampokgoogle.blogspot.com/p/sitemap.html");
                    return false;

                }
            }
            document.oncontextmenu = redirectKK;


</script>

        <script type = "text/javascript">
            </script>
 </body>
</html>