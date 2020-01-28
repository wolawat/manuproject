<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div id="container"  align="center">
	<form action="./reg_menu" method="post">
	<h1>เพิ่มเมนู</h1>

	<div id="body"  align="center">
		<form action="" method="post">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>รหัสเมนู </td>
		<td>
			<input type="text" name="menu_id" placeholder="รหัสเมนู">
		</td>
	</tr>
	<tr>
		<td>ชื่อเมนู</td>
		<td>
			<input type="text" name="menu_name" placeholder="ชื่อเมนู">
		</td>
	</tr>
	<tr>
		<td>ประเภทเมนู</td>
		<td>
		<select name="menu_ctype_id">
			<option value="1">เครื่องดื่ม</option>
			<option value="2">อาหาร</option>
			<option value="3">ของหวาน</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>เลือกร้านค้า</td>
		<td>
		<select name="sh_menu_id">
			<option value="1">U&ME</option>
			<option value="2">Nine9</option>
			<option value="3">Cafe Amazon NPRU</option>
		</select>
		</td>
	</tr>
	<tr>
		<td> 
			
		</td>
		<td>
		  <input type="submit" value="เพิ่มเมนู"><input type="reset" name="เคลียร์ข้อมูล">
		</td>
	</tr>	
	</table>
	</form>
	<a href="http://localhost/menuproject/index.php/manage_menu/showall">แสดงเมนูทั้งหมด</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>