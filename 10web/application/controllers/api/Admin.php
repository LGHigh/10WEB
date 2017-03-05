<?php
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('usermessage_model');
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
       echo "api/admin";
    }

    /**
     * use to make a info
     *
     * @param int $Flag - the flag
     * @param string $Content -the content
     * @param string $Extra -the extra info
     * @return array
     */
    private function getInfo($Flag = 101,$Content = "",$Extra = ""){
      return array("Flag" => $Flag,"Content" => $Content,"Extra" => $Extra);
    }



    /**
    *   给用户发消息,如果有用户id传入就给该用户发送消息，否则给所有用户发送消息
    */

    /**
    * 获取总用户数
    */
    public function get_number_of_user(){
      $count = $this->user_model->get_number_of_user();
      echo json_encode($this->getInfo(101,$count));
    }

    /**
    * 获取新注册用户数，即当日注册的用户数
    */
    public function get_number_of_newuser(){
      $day = '20'.date('y-m-d');//后面生成的是 17-03-06这种格式，所以前面加上20
      $count = $this->user_model->get_number_of_user($day);
      echo json_encode($this->getInfo(101,$count));
    }

    /**
    * 获取系统未读消息数
    */
    public function get_number_of_unread(){
      echo json_encode($this->getInfo(101,$this->usermessage_model->GetUCForAdmin()));
      //echo json_encode($this->getInfo(101,1));
    }
}

?>
