<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->model('Activities_model');
      $this->load->helper('url');
      $this->load->library('session');
    }

    public function index(){
      //加载所有的活动列表
      $this->load->view('activity/activity');
    }

    public function create(){
      //创建一个新的活动的界面
      $this->load->view('activity/add_activity');
    }

    public function p($id = null){
      $r = $this->Activities_model->getByID($id);
      $data = array(
        'activity' => $r
      );
      $this->load->view('activity/p', $data);
    }

    public function update($id){
      //修改一个已经存在的活动
    }

    public function delete($id){

    }

}
?>
