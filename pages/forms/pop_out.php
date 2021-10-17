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

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
      <div class="container-fluid">
        <div>
          <div>
            <h3 style="text-align:center;">Bukti</h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
	  <div class="card">
		<div class="card">
              <div class="card-header">
                <h5 style="text-align:center;">Monitoring Kebersihan dan Kerapihan Ruang</h5>
              </div>
              <div class="card-body">
               		<?php 
						require_once('db_login.php');
						if(isset($_GET['id'])){
							$id = $_GET['id'];
						}
						$query = 'SELECT bukti1, bukti2, bukti3, bukti4, bukti5 FROM trx_cs_ruang WHERE id_ruang ='.$id;
						$result = $db->query($query);
						if (!$result){
							die ("Could not query the database: <br />". $db->error ."<br>Query: ".$query);
						}
						echo '<div class="d-flex justify-content-between">';
						while ($row = $result->fetch_object()){
							if(strpos($row->bukti1, ".png") == TRUE || strpos($row->bukti1, ".jpg") == TRUE)
							{
								echo '<a href="../../images/'.$row->bukti1.'"><img alt="" src="../../images/'.$row->bukti1.'" width="150" height="150" style="border-style: solid;"></a>';
								
							}
							else if(strpos($row->bukti1, ".mp4") == TRUE)
							{
								echo '<video width="150" height="150" controls style="border-style: solid;">
								<source src="../../images/'.$row->bukti1.'" type="video/mp4">
								<source src="../../images/'.$row->bukti1.'" type="video/ogg">
								Your browser does not support the video tag.
								</video>';
							}
							if(strpos($row->bukti2, ".png") == TRUE || strpos($row->bukti2, ".jpg") == TRUE)
							{
								echo '<a href="../../images/'.$row->bukti2.'"><img alt="" src="../../images/'.$row->bukti2.'" width="150" height="150" style="border-style: solid;"></a>';
							}
							else if(strpos($row->bukti2, ".mp4") == TRUE)
							{
								echo '<video width="150" height="150" controls style="border-style: solid;">
								<source src="../../images/'.$row->bukti2.'" type="video/mp4">
								<source src="../../images/'.$row->bukti2.'" type="video/ogg">
								Your browser does not support the video tag.
								</video>';
							}
							echo '</div><br>';
							echo '<div class="d-flex justify-content-between">';
							if(strpos($row->bukti3, ".png") == TRUE || strpos($row->bukti3, ".jpg") == TRUE)
							{
								echo '<a href="../../images/'.$row->bukti3.'"><img alt="" src="../../images/'.$row->bukti3.'" width="150" height="150" style="border-style: solid;"></a>';
							}
							else if(strpos($row->bukti3, ".mp4") == TRUE)
							{
								echo '<video width="150" height="150" controls style="border-style: solid;">
								<source src="../../images/'.$row->bukti3.'" type="video/mp4">
								<source src="../../images/'.$row->bukti3.'" type="video/ogg">
								Your browser does not support the video tag.
								</video>';
							}
							if(strpos($row->bukti4, ".png") == TRUE || strpos($row->bukti4, ".jpg") == TRUE)
							{
								echo '<a href="../../images/'.$row->bukti4.'"><img alt="" src="../../images/'.$row->bukti4.'" width="150" height="150" style="border-style: solid;"></a>';
							}
							else if(strpos($row->bukti4, ".mp4") == TRUE)
							{
								echo '<video width="150" height="150" controls style="border-style: solid;">
								<source src="../../images/'.$row->bukti4.'" type="video/mp4">
								<source src="../../images/'.$row->bukti4.'" type="video/ogg">
								Your browser does not support the video tag.
								</video>';
							}
							if(strpos($row->bukti5, ".png") == TRUE || strpos($row->bukti5, ".jpg") == TRUE)
							{
								echo '<a href="../../images/'.$row->bukti5.'"><img alt="" src="../../images/'.$row->bukti5.'" width="150" height="150" style="border-style: solid;"></a>';
							}
							else if(strpos($row->bukti5, ".mp4") == TRUE)
							{
								echo '<video width="150" height="150" controls style="border-style: solid;">
								<source src="../../images/'.$row->bukti5.'" type="video/mp4">
								<source src="../../images/'.$row->bukti5.'" type="video/ogg">
								Your browser does not support the video tag.
								</video>';
							}
						}
						echo "</div>";
						$result->free();
						$db->close();
					?>
              </div>
              <!-- /.card-body -->
			
            </div>
			<br>
  </div>

  <!-- /.content-wrapper -->


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
