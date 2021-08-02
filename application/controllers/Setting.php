<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('epf'))) {
			redirect('login','refresh');
		}
		// $this->load->model('Minventory');
	}

	public function index()
	{
		$data['content'] = 'setting';
		$data['line'] = $this->db->get('line')->result();
		$this->db->from('log');
		$this->db->join('line', 'line.idline = log.idline');
		$this->db->where('DATE(timestamp)', date('Y-m-d'));
		$log = $this->db->get();
		$data['log'] = $log->result();
		$data['setup'] = $this->db->get_where('setup',array('id' => 1))->row();
		$this->load->view('index', $data);
	}

	public function addline()
	{

		$get = $this->db->get_where('setup', array('id' => 1))->row();

		$this->db->insert('line', array(
			'line' => $this->input->post('line'),
			'min' => $get->min,
			'max' => $get->max,
			'stack' => '0'
		));
		redirect('setting','refresh');
	}

	public function setminmax()
	{
		$this->db->update('line', array(
			'min' => $this->input->post('min'),
			'max' => $this->input->post('max'),
		));
		$this->db->where('id', 1);
		$this->db->update('setup', array(
			'min' => $this->input->post('min'),
			'max' => $this->input->post('max'),
		));
		redirect('setting','refresh');
	}

	public function del_line($id)
	{
		$this->db->where('idline', $id);
		$this->db->delete('line');
		redirect('setting','refresh');
	}


	public function viewdate($date)
	{
		$this->db->from('log');
		$this->db->join('line', 'line.idline = log.idline');
		$this->db->where('DATE(timestamp)', $date);
		$db = $this->db->get();
		$data = $db->result();
		echo json_encode($data);
	}

	public function molding()
	{
		$data['content'] = 'molding';
		$this->load->view('index', $data);
	}

	public function molding_explode()
	{
		$string = $this->input->post('string');		
		$array = explode(',', $string);

		foreach($array as $k=>$v){
		    $array[$k] = explode('-', $v);
		}

		echo json_encode($array);

	}
}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */