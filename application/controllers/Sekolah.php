<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('siswa');
			$crud->display_as('nama','Nama Siswa');
			$crud->set_subject('Siswa');

			$crud->required_fields('nis');

			$crud->set_field_upload('foto','assets/uploads/files');

			$output = $crud->render();

    		$this->load->view('wrapper/header',$output);
    		$this->load->view('sekolah/home', $output);
    		$this->load->view('wrapper/footer',$output);
            
	}

}
