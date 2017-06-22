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
}
?>
