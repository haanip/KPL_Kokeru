<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KoKeRu | Jadwal Ruangan Saya</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<?php
  session_start();
  require_once('db_login.php');
  if (!isset($_SESSION['username'])){
                header('Location: awal.php');
            }
?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="peng_home.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="peng_home.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KoKeRu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php
            $query = "SELECT nama_peng FROM pengelola WHERE email = '".$_SESSION['username']."'";
            $result = $db->query($query);
            if (!$result){
                 die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
            }
            $row = $result->fetch_object();
            echo "<a href='peng_profil.php' class='d-block'>".$row->nama_peng."</a>";
          ?>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		  <li class="nav-item">
            <a href="peng_home.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="peng_ruang_tampilan.php?id=all" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Jadwal Ruang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tampil_laporan.php?tanggal=<?php date_default_timezone_set("Asia/Jakarta"); echo date('Y-m-d');?>&status=all" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
              </p>
            </a>
		</li>
          <li class="nav-item">
         <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Saya</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid" id="card">
       <div class="row">
              <div>
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="../../dist/img/avatar1.png"
                           alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php
            $query = "SELECT nama_peng FROM pengelola WHERE email = '".$_SESSION['username']."'";
            $result = $db->query($query);
            if (!$result){
                 die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
            }
            $row = $result->fetch_object();
            echo "<a class='d-block'>".$row->nama_peng."</a>";
          ?></h3>

                    <p class="text-muted text-center">Cleaning Service</p>

                    <ul class="list-group list-group-unbordered mb-3">
                     <?php
                    $query = ' SELECT * FROM pengelola WHERE email ="'. $_SESSION['username'] .'"';
                    $result = $db->query($query);
                    if (!$result){
                        die ("Could not query the database: <br/>". $db->error ."<br>Query: ".$query);
                    }
                    $i = 1;
                    while ($row = $result->fetch_object()){
                        echo '<li class="list-group-item">';
                        echo '<b>ID</b> <a class="float-right">'.$row->id_peng.'</a>';
						echo '</li>';
                        echo '<li class="list-group-item">';
                        echo '<b>Email</b> <a class="float-right">'.$row->email.'</a>';
						echo '</li>';
                        echo '</tr>';
						echo '<table>';
						echo '<br>';
						echo '<a href="peng_edit_profile.php?id= '.$row->id_peng.'" class="btn btn-primary btn-block"><b>Edit Profil</b></a>';
                        $i++;
                    }			
                    $result->free();
                    $db->close();
                ?>
                    </ul>                 
                  </div>
               </div>
              </div>
        <!-- /.row -->
        
       
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
           </section>
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->

  </div>

  <!-- /.content-wrapper -->

<!-- ./wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">KoKeRu</a>.</strong> All rights reserved.

  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
