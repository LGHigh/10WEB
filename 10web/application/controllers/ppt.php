<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppt extends CI_Controller {
    public function index()
    {   
       $this->load->view('ppt/eling-web-1');
    }

    public function but1()
    {
        $this->load->view('ppt/but-1');
    }
}

?>
