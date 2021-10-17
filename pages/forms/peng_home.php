<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KoKeRu | Home</title>

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
            <h1>DASHBOARD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">...</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
                           <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h5>Jumlah CS : <?php
							$query = "SELECT * FROM cs ORDER BY id_cs";
							$result = $db->query($query);
							$i = 1;
							while ($row = $result->fetch_object()){
								$i++;
							}
							echo $result->num_rows;
							$result->free();
					
						?></h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="peng_home.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><h5>Jumlah Ruangan : <?php
			
							$query = "SELECT * FROM ruang";
							$result = $db->query($query);
							$i = 1;
							while ($row = $result->fetch_object()){
								$i++;
							}
							echo $result->num_rows;
							$result->free();
					
						?></h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="peng_ruang_jumlahruang.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><h5>Bersih : <?php
			
							$query = "SELECT * FROM trx_cs_ruang WHERE status = 'Sudah Dibersihkan'";
							$result = $db->query($query);
							$i = 1;
							while ($row = $result->fetch_object()){
								$i++;
							}
							echo $result->num_rows;
							$result->free();
					
						?></h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="peng_ruang_bersih.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body"><h5>Kotor : <?php
			
							$query = "SELECT * FROM trx_cs_ruang WHERE status = 'Belum Dibersihkan'";
							$result = $db->query($query);
							$i = 1;
							while ($row = $result->fetch_object()){
								$i++;
							}
							echo $result->num_rows;
							$result->free();
					
						?></h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="peng_ruang_kotor.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
	
            <div class="card">
			
              <div class="card-header">
			  
                <h3 class="card-title">List CS</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap">
                 
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
					  <th>Nomor Telepon</th>
					  <th>Action</th>
                    </tr>      
 						<?php

							$query = "SELECT * FROM cs ORDER BY id_cs";
							$result = $db->query($query);
							if (!$result){
								die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
							}
							$i = 1;
							while ($row = $result->fetch_object()){
								echo '<tr>';
								echo '<td>'.$row->id_cs.'</td>';
								echo '<td>'.$row->nama_cs.'</td>';
								echo '<td>'.$row->email.'</td>';
								echo '<td>'.$row->alamat.'</td>';
								echo '<td>'.$row->no_telp.'</td>';
								echo '<td><a class="btn btn-warning btn-sm" href="peng_edit_cs.php?id='.$row->id_cs.'">Edit</a>&nbsp;&nbsp;'?>
									<a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini?')" <?php echo 'href="peng_delete_cs.php?id='.$row->id_cs.'">Delete</a>
									</td>';
								echo '</tr>';
								$i++;
							}
							echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="peng_create_cs.php">Create</a>';
							echo '</table>';
							
							$result->free();
							$db->close();
						?>
                </table>
				
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
       
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">KoKeRu</a>.</strong> All rights reserved.

  </footer>

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
