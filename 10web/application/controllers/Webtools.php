<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webtools extends CI_Controller {
    public function index()
    {   
       $this->load->view('webtools/webtools');
    }

    public function tools($id)
    {	
    	$this->load->helper('url');
    	if(!isset($id))
    		redirect('webtools');
    	$data = array('id' => $id);
        $this->load->view('webtools/tools',$data);
    }
}

?>


