<?php
class Activity extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Activities_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
       echo "api/activity";
    }
    
    public function getAll(){
      print_r($this->Activities_model->getAll());
    }
}

?>
