<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KoKeRu | Update Ruang Pembersihan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
	  /* The switch - the box around the slider */
		.switch {
		  position: relative;
		  display: inline-block;
		  width: 60px;
		  height: 34px;
		}

		/* Hide default HTML checkbox */
		.switch input {
		  opacity: 0;
		  width: 0;
		  height: 0;
		}

		/* The slider */
		.slider {
		  position: absolute;
		  cursor: pointer;
		  top: 0;
		  left: 0;
		  right: 0;
		  bottom: 0;
		  background-color: #ccc;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		.slider:before {
		  position: absolute;
		  content: "";
		  height: 26px;
		  width: 26px;
		  left: 4px;
		  bottom: 4px;
		  background-color: white;
		  -webkit-transition: .4s;
		  transition: .4s;
		}

		input:checked + .slider {
		  background-color: #2196F3;
		}

		input:focus + .slider {
		  box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
		  -webkit-transform: translateX(26px);
		  -ms-transform: translateX(26px);
		  transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
		  border-radius: 34px;
		}

		.slider.round:before {
		  border-radius: 50%;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini">
<?php
  session_start();
  require_once('db_login.php');
  if (!isset($_SESSION['username'])){
                header('Location: awal.php');
            }
	if(isset($_GET['id'])){
		$id = $_GET['id'];
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
            <h1>Monitor Kebersihan dan Kerapian Ruang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Monitor Ruang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
	  <div class="card">
		<div class="card">
              <div class="card-header">
                <h5 style="text-align:center;">Monitoring Kebersihan dan Kerapihan Ruang</h5>
				<div class="col-md-12 school-options-dropdown text-center">
					<h5 style="text-align:center;">Gedung 
                    <button type="button" class="btn btn-default"><?php if($_GET['id'] == "all"){echo "Semua";} else {echo $id;}?></button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
					  <a class="dropdown-item" href="peng_ruang_tampilan.php?id=all">Semua</a>
                      <a class="dropdown-item" href="peng_ruang_tampilan.php?id=A">A</a>
                      <a class="dropdown-item" href="peng_ruang_tampilan.php?id=B">B</a>
                      <a class="dropdown-item" href="peng_ruang_tampilan.php?id=C">C</a>
                      <a class="dropdown-item" href="peng_ruang_tampilan.php?id=D">D</a>
					  <a class="dropdown-item" href="peng_ruang_tampilan.php?id=E">E</a>
                    </div>
					</h5>
                  </div>
				<h5 style="text-align:center;"><?php setlocale(LC_ALL, 'id-ID', 'id_ID');echo strftime("%A, %d %B %Y");?>, <?php date_default_timezone_set("Asia/Jakarta");echo date("h:i");?> WIB</h5>
              </div>
              <div class="card-body">
               		<?php 
						require_once('db_login.php');
						if(isset($_GET['id'])){
							$id = $_GET['id'];
						}
						if($id == "all") {$query = 'SELECT * FROM trx_cs_ruang';}
						else{$query = 'SELECT * FROM trx_cs_ruang WHERE nama_ruang LIKE "'.$id.'%"';}
						$result = $db->query($query);
						if (!$result){
							die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
						}
						while ($row = $result->fetch_object()){
							if($row->status == "Belum Dibersihkan")
							{
								$button = "btn btn-danger btn-flat";
								echo '<button type="button" class="'.$button.'" style="height:150px;width:150px; margin: 10px;">
								<h3>'.$row->nama_ruang.'</h3>
								<p>'.$row->status.'</p>
								<p>'.$row->nama_cs.'</p>
								<p>&#171;Detil&#187;</p>
								</button>';
							}
							else if($row->status == "Sudah Dibersihkan")
							{
								$button = "btn btn-success btn-flat"; ?>
								<button type="button" class="<?php echo $button; ?>" onclick="window.open('pop_out.php?id=<?php echo $row->id_ruang;?>','_blank', 'toolbar=yes,scrollbars=yes,resizable=no,top=100,left=400,width=600,height=475')" style="height:150px;width:150px; margin: 10px;">
								<?php
								echo '<h3>'.$row->nama_ruang.'</h3>
								<p>'.$row->status.'</p>
								<p>'.$row->nama_cs.'</p>
								<p>&#171;Detil&#187;</p>
								</button>';
							}
						}
						$result->free();
						$db->close();
					?>
              </div>
              <!-- /.card-body -->
			
            </div>
			
			<div class="d-flex justify-content-center">
				<a type="button" class="btn btn-danger btn-flat" style="width:200px;" onclick="return confirm('Apakah anda yakin untuk reset ruang?')" href="reset.php">Reset</a>
			</div>
			<br>
  </div>
		</div>
    </section>
  <!-- /.content-wrapper -->


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
