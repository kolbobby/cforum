<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
	public function index() {
		$data['title'] = "cForum";
		$data['content'] = "home";
		$this->load->view('template', $data);
	}
}