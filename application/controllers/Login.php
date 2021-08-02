<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('epf'))) {			
			$this->load->view('login');		
		}else{
			redirect('welcome','refresh');
		}
	}

	public function submit()
	{
		$epf = $this->input->post('epf');
		$password = md5($this->input->post('password'));

		$get = $this->db->get_where('user', array(
			'epf' => $epf,
			'password' => $password,
		));

		if (empty($get->num_rows())) {
			$this->session->set_flashdata('msg', '
				<div class="alert alert-important alert-danger alert-dismissible" role="alert">
				  <div class="d-flex">
				    <div>
				      <!-- SVG icon code with class="alert-icon" -->
				    </div>
				    <div>
				      EPF or Password is wrong !
				    </div>
				  </div>				  
				</div>
				');
			redirect('login','refresh');
		}else{
			$row = $get->row();
			$array = array(
				'epf' => $row->epf,
				'username' => $row->username,
				'level' => $row->level,
			);
			
			$this->session->set_userdata( $array );

			redirect('welcome','refresh');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('login','refresh');
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */