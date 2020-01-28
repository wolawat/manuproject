<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        
		function getAllMenus(){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			$result = $this->db->get('menu');
			return $result;
		}

        function menu_insert($data){
			$this->db->insert('menu',$data);
        }
        
		function menu_delete($id){
			$this->db->where('menu_id', $id);
			$this->db->delete('menu');  
		}	

		function menu_edit($mid){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			$result = $this->db->get_where('menu', array('menu_id' => $mid));
			return $result;
		}
		        
		function menu_update($data,$menu_id){
			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu', $data);
		}	
}