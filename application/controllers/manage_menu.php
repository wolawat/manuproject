<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Menu_model','Menu');
	}

	public function index()
	{
		$this->load->view('form_menu');
	}


	public function reg_menu(){
		$data = array(
			'menu_id' => $this->input->post("menu_id"),
			'menu_name' => $this->input->post("menu_name"),
			'mcategory_id' => $this->input->post("menu_ctype_id"),
			'mshop_id'=> $this->input->post("sh_menu_id"),
		);
		if($this->input->post("menu_id")!= "" && $this->input->post("menu_name")!== ""){
			$this->Menu->menu_insert($data);
			$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มเมนูได้";
		}
	}

	public function showall()
	{
		$result['menus'] = $this->Menu->getAllMenus();
		$this->load->view('view_menu',$result);
	}


	public function delete_menu()
	{
		$delete_mid = $this->input->get("del_id");
		//echo $delete_mid;
		$this->Menu->menu_delete($delete_mid);
		echo "<center>";
		echo "ลบเมนู รหัส ".$delete_mid." เรียบร้อยแล้ว";
		$this->load->view('view_show_menulink');
	}

	public function edit_menu()
	{
		$edit_mid = $this->input->get("edit_id");
		$menuselect['menu_select'] = $this->Menu->menu_edit($edit_mid);
		//echo $edit_mid;
		$this->load->view('view_menu_edit',$menuselect);
	}

	public function update_menu()
	{
		$data = array(
			'menu_id' => $this->input->post("menu_id"),
			'menu_name' => $this->input->post("menu_name"),
			'mcategory_id' => $this->input->post("menu_ctype_id"),
			'mshop_id'=> $this->input->post("sh_menu_id"),
		);
		$menu_id = $this->input->post("menu_id");
		//echo $menu_id;
		$this->Menu->menu_update($data,$menu_id);
		echo "<center>";
		echo "อัพเดทเมนู รหัส ".$menu_id." เรียบร้อยแล้ว";
		$this->load->view('view_show_menulink');
	}
}
