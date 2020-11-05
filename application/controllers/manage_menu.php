<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Menu_model','Menu');
	}

	public function index()
	{
		$this->load->view('form');
	}


	public function reg_train(){
		$data = array(
			'T' => $this->input->post("T_id"),
			'Station' => $this->input->post("station"),
			'Timeout' => $this->input->post("time_out"),
			'To_Station'=> $this->input->post("to"),
			'out_Station' => $this->input->post("out"),
			'Station_destination' => $this->input->post("station_destination"),
			'To_time' => $this->input->post("to_time"),
			'Note'=> $this->input->post("note"),
		);
		if($this->input->post("T")!= "" && $this->input->post("Station")!== ""){
			$this->Menu->insert($data);
			$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มเมนูได้";
		}
	}

	public function showall()
	{
		$result['menus'] = $this->Menu->getAll();
		$this->load->view('view_menu',$result);
	}
	public function show()
	{
		$result['menus'] = $this->Menu->getAll1();
		$this->load->view('view_menu',$result);
	}


}
