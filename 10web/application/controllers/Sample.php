<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->helper('url');
    }
    
    public function index(){
        $this->load->view('sample/editor_test');
    }

    public function picture(){
        $this->load->view('sample/picture');
    }
}
?>