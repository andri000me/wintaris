<?php

class Tentang extends CI_Controller {

	function index()
	{
      	if($this->session->userdata('user_level') != 45){ 
      		redirect(base_url('login'));
    	} else {
	    	$data['jenis'] = "Tentang";
			$data['judul'] = "Tentang - Wintaris";
			$data['desc'] = "Menampilkan tentang Wintaris.";
			$this->load->view('v_adminweb', $data);
		}
	}
}
?>