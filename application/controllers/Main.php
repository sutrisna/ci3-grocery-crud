<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('wrapper/main/header');
        $this->load->view('main/home');
        $this->load->view('wrapper/main/footer');
	}

}
