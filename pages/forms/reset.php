<?php
require_once('db_login2.php');

//assign query
$query = "UPDATE trx_cs_ruang SET status='Belum Dibersihkan', bukti1 = '', bukti2 = '', bukti3 = '', bukti4 = '', bukti5 = ''";
//execute query
$result = $db->query($query);
	if(!$result){
				die ("Could not query the database: <br>".$db->error ."<br>Query: ".$query);
			}else{
				echo("<script>location.href = 'peng_ruang_tampilan.php?id=all';</script>");
			}

?>