<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['content'] = 'user';
		$data['get'] = $this->db->get('user')->result();
		$this->load->view('index', $data);
	}

	public function adduser()
	{
		$this->db->insert('user', array(
			'epf' => $this->input->post('epf'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('epf')),
			'level' => $this->input->post('level'),
		));

		redirect('user','refresh');
	}

	public function del_user($id)
	{
		$this->db->where('epf', $id);
		$this->db->delete('user');

		redirect('user','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */