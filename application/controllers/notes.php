<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model('Note');
	}

	public function index()

	{
		// $this->load->model('Note');
		$notes = $this->Note->all();
		$this->load->view('index', array('notes'=>$notes) );
	}

	public function create(){
		// var_dump($_POST);
		// die;
		// $this->load->model('Note');
		$this->Note->add($_POST);

		// header("Location:/notes");
		$this->retrieve_partial();


	}


	public function delete(){
		$this->Note->delete($this->uri->segment(3));
		// header("Location:/notes");
		$this->retrieve_partial();

	}

	public function update(){
		$this->Note->update($_POST);
		// header("Location:/notes");

		$this->retrieve_partial();
	}

	private function retrieve_partial()
        {
                $notes = $this->Note->all();
                $this->load->view('partial', array("notes" => $notes));
        }



}

//end of main controller