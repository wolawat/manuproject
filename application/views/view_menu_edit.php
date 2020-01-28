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
	<h1>แก้ไขรายการเมนู</h1>

	<div id="body"  align="center">
	<form action="./update_menu" method="post">
	<table width="80%">
	<tr>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	</tr>
<?php
	foreach($menu_select->result_array() as $menu){
		echo"<tr>";
		echo"<td>รหัสเมนู </td>";
		echo"<td>";
			echo"<input type=\"text\" name=\"menu_id\" value=".$menu['menu_id']." placeholder=\"รหัสเมนู\" readonly>";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>ชื่อเมนู</td>";
		echo"<td>";
			echo"<input type=\"text\" name=\"menu_name\" value=".$menu['menu_name'].">";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
			echo"<td>ประเภทเมนู</td>";
			echo"<td>";
			echo"<select name=\"menu_ctype_id\">";
				if($menu['mcategory_id']==1){
					echo"<option value=\"1\" selected>เครื่องดื่ม</option>";
					echo"<option value=\"2\">อาหาร</option>";	
					echo"<option value=\"3\">ของหวาน</option>";
				}else if($menu['mcategory_id']==2){
					echo"<option value=\"1\" >เครื่องดื่ม</option>";
					echo"<option value=\"2\" selected>อาหาร</option>";	
					echo"<option value=\"3\">ของหวาน</option>";		
				}else{
					echo"<option value=\"1\" >เครื่องดื่ม</option>";
					echo"<option value=\"2\">อาหาร</option>";	
					echo"<option value=\"3\" selected>ของหวาน</option>";
				}
			echo"</select>";
			echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>ร้านค้า</td>";
		echo"<td>";
		echo"<select name=\"sh_menu_id\">";
			if($menu['mshop_id']==1){
				echo"<option value=\"1\" selected>U&ME</option>";
				echo"<option value=\"2\">Nine9</option>";
				echo"<option value=\"3\">Cafe Amazon NPRU</option>";
			}else if($menu['mshop_id']==2){
				echo"<option value=\"1\">U&ME</option>";
				echo"<option value=\"2\" selected>Nine9</option>";
				echo"<option value=\"3\">Cafe Amazon NPRU</option>";		
			}else{
				echo"<option value=\"1\">U&ME</option>";
				echo"<option value=\"2\">Nine9</option>";
				echo"<option value=\"3\" selected>Cafe Amazon NPRU</option>";	
			}
		echo"</select>";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>";
			
		echo"</td>";
		echo"<td>";
			echo"<input type=\"submit\" value=\"อัพเดทเมนู\">";
		echo"</td>";
		echo"</tr>";
	}
?>
		</table>
		</form>
		<a href="http://localhost/menuproject/index.php/manage_menu/showall">ไปหน้าแสดงรายการเมนู</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>