<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Activities_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * 获取所有的活动,按照时间排序
	 */
	public function getAll(){
		$query = $this->db->order_by('StartDate', 'DESC');
		return $query->get('e0_activities')->result_array();
	}

	public function create($data){
		return $this->db->insert('e0_activities',$data);
	}

	public function getByID($id){
		$query = $this->db->get_where('e0_activities', array('ID' => $id));
		$r = $query->result_array();
		if(count($r) == 0)
			return null;
		return $r[0];
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('e0_activities');
	}
}
?>
