<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webtools extends CI_Controller {
    public function index()
    {   
       $this->load->view('webtools/webtools');
    }

    public function tools($id)
    {	
    	$data = array('id' => $id);
        $this->load->view('webtools/tools',$data);
    }
}

?>


