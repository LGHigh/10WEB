<?php
class Activity extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Activities_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){
       echo "api/activity";
    }

    public function getAll(){
      $this->_echo(100,$this->Activities_model->getAll());
    }

    public function add(){
      $i = $this->input;
      //构造验证规则
      $validation_config = array(
         array(
           'field' => 'Title',
           'label' => '活动标题',
           'rules' => 'trim|required|max_length[20]'
         ),
         array(
           'field' => 'Source',
           'label' => '活动内容',
           'rules' => 'required'
         ),
         array(
           'field' => 'LitPic',
           'label' => '活动图片',
           'rules' => 'trim|required'
         ),
         array(
           'field' => 'StartDate',
           'label' => '开始时间',
           'rules' => 'date|required'
         ),         
         array(
           'field' => 'EndDate',
           'label' => '结束时间',
           'rules' => 'date|required'
         ),         
         array(
           'field' => 'Location',
           'label' => '活动地点',
           'rules' => 'required|max_length[20]'
         )
      );

      //验证
      $this->form_validation->set_rules($validation_config);
      if($this->form_validation->run() === FALSE) {
          $this->_error(validation_errors());
          return ;
      }

      try{
        //其他一些自动生成的信息
        $writer = $this->session->userdata['info'][0]['NickName'];
        $other = array(
          'ID' => uniqid(),
          'PubDate' => date('Y-m-d h:m:s'),
          'ModiDate' => date('Y-m-d h:m:s'),
          'Writer' => $writer,
          'Click' => 0
        );

        $data = array_merge($i->post(NULL,true), $other);
        $this->Activities_model->add($data);
        $this->_echo(100,$data);
      }catch(Error $error){
        $this->_error($error);
      }
    }

    public function get($id = null){
      if($id == null)
        return $this->getAll();
      $d = $this->Activities_model->getByID($id);
      $this->_echo(100,$d);
    }

    public function edit(){

    }

    //--------私有函数
    private function _echo($state , $data){
      echo json_encode(array(
        'Flag' => $state,
        'Content' => $data,
        'Extra' => NULL
      ));
    }

    private function _error($data){
      $this->_echo(-100,$data);
    }
}

?>
