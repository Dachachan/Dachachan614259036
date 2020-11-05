<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- End bootstrap -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>
<table  border="1"> 
<table  border="1"> 
	<table align="center" border="1"width="80%" bgcolor="pink">
	<center><h1>ตารางรถไฟ</h1></center>
  <tr>
    <td rowspan="2"><center>ขบวน</center></td>
   <td colspan="2"><center> ต้นทาง</center></td>
   <td colspan="2"><center> ห้วยราช</center></td>
   <td colspan="2"><center> ปลายทาง</center></td>
   <td rowspan="2"><center>หมายเหตุ</center></td>
  </tr> 
  <tr>
    <td><center>สถานี</center></td>
	<td><center>เวลาออก</center></td>
	<td><center>ถึง</center></td>
	<td><center>ออก</center></td>
	<td><center>สถานี</center></td>
	<td><center>ถึงเวลา</center></td>
  </tr>
  
  
  
<?php
	foreach($menus->result_array() as $menu){

		echo "<tr align=\"center\">";
			echo"<td>".$menu['T'];
			echo"<td>".$menu['Station']."</td>";
			echo"<td>".$menu['Timeout']."</td>";
			echo"<td>".$menu['To_Station']."</td>";
			echo"<td>".$menu['out_Station']."</td>";
			echo"<td>".$menu['Station_destination']."</td>";
			echo"<td>".$menu['Totime']."</td>";
			echo"<td>".$menu['Note']."</td>";
			}
?>
		</table>
		<center><a href="http://localhost/menuproject/index.php/Manage_menu/">ไปหน้าเพิ่มเมนู</a></center>
	</div>

	
</div>

</body>
</html>