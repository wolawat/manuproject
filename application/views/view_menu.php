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
	<h1>แสดงรายการเมนูทั้งหมด</h1>

	<div id="body"  align="center">
	<table width="80%">
	<tr>
	<th>รหัสเมนู (เลือกรหัสเพื่อทำการลบ) </th>
	<th>ชื่่อเมนู (เลือกชื่อเพื่อทำการแก้ไข)</th>
	<th>ประเภท</th>
	<th>ชื่อร้านค้า</th>
	</tr>
<?php
	foreach($menus->result_array() as $menu){

		echo "<tr align=\"center\">";
			echo"<td><a href=\"./delete_menu?del_id=".$menu['menu_id']." \">".$menu['menu_id']."</a></td>";
			echo"<td><a href=\"./edit_menu?edit_id=".$menu['menu_id']." \">".$menu['menu_name']."</a></td>";
			if($menu['mcategory_id']==1){
				echo"<td> เครื่องดื่ม </td>";
			}else if($menu['mcategory_id']==2){
				echo"<td> อาหาร </td>";
			}else {
				echo"<td> ของหวาน </td>";
			}
			if($menu['mshop_id']==1){
				echo"<td> U&ME </td>";
			}else if($menu['mshop_id']==2){
				echo"<td> Nine9 </td>";
			}else {
				echo"<td> Cafe Amazon NPRU </td>";
			}

		echo "</tr>";

		}
?>
		</table>
		<a href="http://localhost/menuproject/index.php/manage_menu">ไปหน้าเพิ่มเมนู</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>