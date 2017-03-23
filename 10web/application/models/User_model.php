<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	/**
     *　根据传入的用户id返回用户的个人信息(不包括密码)
     *
     * @param $user_id
	 */
	public function get_by_id($user_id = null){
		if(!$user_id)
			throw new Exception("函数缺少参数：用户id");
		$sql_format = <<<STR
		SELECT
		ID,Account,Profile,Permission,TokenID,LoginTime,LoginIP,HeadIcon,NickName,SignupTime
		FROM e0_user
		WHERE ID = '%s'
STR;
		$sql = sprintf($sql_format,$user_id);
		return $this->db->query($sql)->result_array();
	}

	/**
	*	传入日期获取那天注册的用户数目
	*	@param $signup_time 注册日期
	*	@return 注册人数
	*/
	public function get_number_of_user($signup_time = null){
		$sql_format = <<<STR
		SELECT
		Account
		FROM e0_user
		WHERE SignupTime LIKE '%s%s'
STR;
		$sql = "SELECT Account FROM e0_user";
		if(isset($signup_time)){
			$sql = sprintf($sql_format,$signup_time,'%');
			return $this->db->query($sql)->num_rows();
		}
		return $this->db->query($sql)->num_rows();
	}

	/**
	*
	*/
}
?>
