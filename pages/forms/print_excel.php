<?php
  session_start();
  require_once('db_login2.php');


  if (!isset($_SESSION['username'])){
                header('Location: awal.php');
            }
?>
<h3 style="text-align:center; font-size:20px;">Laporan Harian Kebersihan dan Kerapihan</h3>
				<h3 style="text-align:center; font-size:20px;">Tanggal : <?php if(isset($_GET['tanggal'])){
							$id = $_GET['tanggal'];
						}
						echo $id?></h3>
				<h3 style="text-align:center; font-size:15px; font-style:italic;">&#60&#60 Tanggal Cetak : <?php setlocale(LC_ALL, 'id-ID', 'id_ID');echo strftime("%A, %d %B %Y");?>, <?php date_default_timezone_set("Asia/Jakarta");echo date("G:i");?> WIB &#62&#62</h3>
<div class="container">
                <table>
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
            $query = 'SELECT * FROM laporan WHERE tanggal = "'.$id.'"';
            $result = $db->query($query);
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
        <?php header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=laporan_harian.xls");?>
              
                </table>
              </div>
              