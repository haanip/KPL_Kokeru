<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KoKeRu | Laporan Harian</title>

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
  require_once('db_login2.php');
    if(isset($_GET['tanggal'])){
    $id = $_GET['tanggal'];
						}	
   if(isset($_GET['status'])){
    $status = $_GET['status'];
						}                     

    

  if (!isset($_SESSION['username'])){
                header('Location: awal.php');
            }
  if(isset($_POST['cetak'])){
  $query = "SELECT * FROM laporan WHERE tanggal ='".$id."'";
  $result = $db->query($query);
  if($result->num_rows > 0)
  {
      $query2 = "DELETE FROM laporan WHERE tanggal = '".$id."'";
      $db->query($query2);
      $query3 = "INSERT INTO laporan (nama_ruang, nama_cs, status) SELECT nama_ruang, nama_cs, status FROM trx_cs_ruang";
      $db->query($query3);
  }
  else{
      $query2 = "INSERT INTO laporan (nama_ruang, nama_cs, status) SELECT nama_ruang, nama_cs, status FROM trx_cs_ruang";
      $db->query($query2);
  }
  $query4 = "UPDATE laporan SET tanggal = '".$id."' WHERE tanggal = '0000-00-00'";
  $db->query($query4);
  $result->free();
  $db->close();
  echo("<script>location.href = 'tampil_laporan.php?tanggal=".$_GET['tanggal']."&status=".$_GET['status']."';</script>");
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
            <a href="awal.php" class="nav-link">
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
            <h1>Laporan Kebersihan Ruangan</h1> <br>
					
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
          <div class="col-sm-12">
          <ol class="breadcrumb float-sm-left">
          <form>
			<label for="tanggal">Pilih Tanggal : </label>
			<input type="date" id="tanggal" name="tanggal" value="<?php if (!$_GET['tanggal']){date_default_timezone_set("Asia/Jakarta"); echo date('Y-m-d');} else {echo $_GET['tanggal'];} ?>">
            <input type="hidden" id="status" name="status" value="<?php echo $_GET['status'];?>">
			<input type="submit">
            
			</form>
            
            
          </ol>
          <ol class="breadcrumb float-sm-right">
          <form method="post">
            <button type="submit" class="btn btn-dark btn-flat" id="cetak" name="cetak" >Cetak Laporan</button>
          </form>
            <button class="btn btn-danger btn-flat" onclick="window.print()">Print PDF</button>
          <a class="btn btn-success btn-flat" href="print_excel.php?tanggal=<?php echo $_GET['tanggal'];?>">Print Excel</a>
          </ol>
          </div>
          <div class="col-sm-12">
          <label>Pilih Status : </label>
          <button type="button" class="btn btn-default"><?php if($_GET['status'] == "all") {echo "Semua";} else if ($_GET['status'] == "clean"){echo "Sudah Dibersihkan";} else if ($_GET['status'] == "dirty"){echo "Belum Dibersihkan";}?></button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="tampil_laporan.php?tanggal=<?php echo $id;?>&status=all">Semua</a>
                      <a class="dropdown-item" href="tampil_laporan.php?tanggal=<?php echo $id;?>&status=clean">Sudah Dibersihkan</a>
                      <a class="dropdown-item" href="tampil_laporan.php?tanggal=<?php echo $id;?>&status=dirty">Belum Dibersihkan</a>
                    </div>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 style="text-align:center; font-size:20px;">Laporan Harian Kebersihan dan Kerapihan</h3>
				<h3 style="text-align:center; font-size:20px;">Tanggal : <?php if(isset($_GET['tanggal'])){
							$id = $_GET['tanggal'];
						}
						echo $id?></h3>
				<h3 style="text-align:center; font-size:15px; font-style:italic;">&#60&#60 Tanggal Cetak : <?php setlocale(LC_ALL, 'id-ID', 'id_ID');echo strftime("%A, %d %B %Y");?>, <?php date_default_timezone_set("Asia/Jakarta");echo date("G:i");?> WIB &#62&#62</h3>	
              </div>
              

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap">
                    <tr>
                      <th>No</th>
                      <th>Nama Ruangan</th>
                      <th>Nama CS</th>
                      <th>Status</th>
                    </tr>
					<?php
						if(isset($_GET['tanggal'])){
							$id = $_GET['tanggal'];
						}
            if($_GET['status'] == "all")
            {
              $query = 'SELECT * FROM laporan WHERE tanggal = "'.$id.'"';
            }
            else if($_GET['status'] == "clean")
            {
              $query = 'SELECT * FROM laporan WHERE tanggal = "'.$id.'" AND status = "Sudah Dibersihkan"';
            }
            else if($_GET['status'] == "dirty")
            {
              $query = 'SELECT * FROM laporan WHERE tanggal = "'.$id.'" AND status = "Belum Dibersihkan"';
            }
            $result = $db->query($query);
            if (!$result){
                 die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
            }
            $i = 1;
            while ($row = $result->fetch_object()){
                echo '<tr>';
                echo '<td>'.$i.'</td>';
				echo '<td>'.$row->nama_ruang.'</td>';
                echo '<td>'.$row->nama_cs.'</td>';
				echo '<td>'.$row->status.'</td>';
                echo '</tr>';
                $i++;
            }
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
