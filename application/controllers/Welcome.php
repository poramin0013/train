<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Train');
	}


	public function index()
	{
		$this->load->view('home');
		
	}

	

public function insert()
  {
    $data = array(

      'procession' => $this->input->post("procession"),
      'Departure_station' => $this->input->post("Departure_station"),
      'Time_out' => $this->input->post("Time_out"),
      'To_huayrat' => $this->input->post("To_huayrat"),
      'Out_huayrat' => $this->input->post("Out_huayrat"),
      'Terminal' => $this->input->post("Terminal"),
      'To_terminal' => $this->input->post("To_terminal"),
      'note' => $this->input->post("note"),
      
	);
	

    $result=$this->Train->about_insert($data);
$this->load->view("home", $result);
  }

	public function show()
	{
		$data['query'] = $this->Train->showall();
		// print_r($data);
		$this->load->view("show", $data);
			


	}
	

	
}
