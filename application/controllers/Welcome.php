<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('epf'))) {
			redirect('login','refresh');
		}
		date_default_timezone_set('Asia/Jakarta');
		// $this->load->model('Minventory');
	}

	public function index()
	{
		$today = date('Y-m-d');
		$this->db->where_not_in('last_update', $today);
		$cekdate = $this->db->get('line')->result();
		foreach ($cekdate as $key) {
			
			$this->db->insert('spm', array(
				'idline' => $key->idline,
				'date' => $today,			
			));

			$this->db->where('idline', $key->idline);
			$this->db->update('line', array(
				'last_update' => $today
			));
		}

		$data['content'] = 'dashboard';
		$data['line'] = $this->db->query("SELECT * FROM line ORDER BY line asc")->result();
		$this->load->view('index', $data);

	}

	public function getbin($id)
	{
		$data = $this->db->get_where('line', array('idline' => $id))->row();
		echo json_encode($data);
	}

	public function getspm($id)
	{
		$today = date('Y-m-d');
		$data = $this->db->get_where('spm', array('date' => $today, 'idline' => $id))->row();
		echo json_encode($data);
	}

	public function getlog($id)
	{
		$today = date('Y-m-d');
		$this->db->select('*, TIME(timestamp) as waktu');
		$this->db->from('log');
		$this->db->where('DATE(timestamp)', $today);
		$this->db->where('idline', $id);
		$this->db->order_by('timestamp', 'desc');
		$data = $this->db->get()->result();
		// $data = $this->db->get_where('log', array('DATE(timestamp)' => $today, 'idline' => $id))->result();
		echo json_encode($data);
		
	}

	public function updatebin()
	{
		$today = date('Y-m-d');
		$id = $this->input->post('idline');
		$stack = $this->input->post('binstack');
		$qty = $this->input->post('qty');
		$type = $this->input->post('type');
		$get = $this->db->get_where('line', array('idline' => $id))->row();

		if ($type == '1') {

			$this->db->insert('log', array(
				'idline' => $id,
				'function' => 'OUT_'.$qty,			
				'send' => $qty,	
				'timestamp' => date('Y-m-d H:i:s'),				
				'user' => $this->session->userdata('username')
			));

			$this->db->query("UPDATE spm SET send = send + $qty WHERE date='$today' AND idline='$id'");
			$this->db->query("UPDATE line SET qty = qty - $qty WHERE idline='$id'");
			
		}elseif ($type == '2') {
			

			$this->db->insert('log', array(
				'idline' => $id,
				'function' => 'IN_'.$qty,			
				'receive' => $qty,	
				'timestamp' => date('Y-m-d H:i:s'),				
				'user' => $this->session->userdata('username')
			));
			
			$this->db->query("UPDATE spm SET receive = receive + $qty WHERE date='$today' AND idline='$id'");			
			$this->db->query("UPDATE line SET qty = qty + $qty WHERE idline='$id'");

		}elseif($type == '3'){

			$this->db->insert('log', array(
				'idline' => $id,
				'function' => 'OUT_'.$qty,			
				'send' => $qty,	
				'timestamp' => date('Y-m-d H:i:s'),				
				'user' => $this->session->userdata('username')
			));
			
			$this->db->query("UPDATE spm SET send = send + $qty WHERE date='$today' AND idline='$id'");
			
		}
				

		$this->db->where('idline', $this->input->post('idline'));
		$this->db->update('line', array(
			'stack' => $this->input->post('binstack'),
			// 'qty' => $qty
		));

		echo json_encode(true);
	}

	public function resetspm($id)
	{
		$this->db->where('idline', $id);
		$this->db->update('line', array(
			'qty' => 0
		));

		echo json_encode(true);
	}
	

}
