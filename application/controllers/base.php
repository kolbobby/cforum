<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
	public function index() {
		$data['title'] = "cForum";
		$this->load->view('welcome_message', $data);
	}
}