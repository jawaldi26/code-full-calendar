<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fullcalendar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fullcalendar_model');
	}
	function index()
	{
		$this->load->view('calendar/index');
	}
	public function code_warna()
	{
		$data = [
			'1' => ['bg' => '#0073b7','bc' => '#0073b7'],
			'2' => ['bg' => '#00a65a','bc' => '#00a65a']
		];
		return $data;
	}
	function load()
	{
		$event_data = $this->fullcalendar_model->fetch_all_event();
		$code_warna = $this->code_warna();
		// foreach ($code_warna as $key => $value) {
	 //        echo $key.' '.$value['bg'].' '.$value['bc'].'<br>';
	 //    }
		foreach($event_data->result_array() as $row)
		{
			$data[] = array(
				'id' => $row['id'],
				'title' => $row['title'],
				'start' => $row['start_event'],
				'end' => $row['end_event'],
				'textColor    ' => '#ffffff',
				'backgroundColor' => '#0073b7',
				'borderColor    ' => '#0073b7',
			);
		}
		echo json_encode($data);
	}
	function tampil()
	{
		$d['data'] = $this->code_warna();
		$this->load->view('calendar/tampil',$d);
	}
	function insert()
	{
		if($this->input->post('title'))
		{
			$data = array(
				'title'  => $this->input->post('title'),
				'start_event'=> $this->input->post('start'),
				'end_event' => $this->input->post('end')
			);
			$this->fullcalendar_model->insert_event($data);
		}
	}
	function update()
	{
		if($this->input->post('id'))
		{
			$data = array(
				'title'   => $this->input->post('title'),
				'start_event' => $this->input->post('start'),
				'end_event'  => $this->input->post('end')
			);
			$this->fullcalendar_model->update_event($data, $this->input->post('id'));
		}
	}
	function delete()
	{
		if($this->input->post('id'))
		{
			$this->fullcalendar_model->delete_event($this->input->post('id'));
		}
	}
}