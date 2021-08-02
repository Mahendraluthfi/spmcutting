<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

	public function index()
	{
		
	}

	public function getJson()
	{
		// $this->db->from('line');
		// $this->db->join('spm', 'spm.idline = line.idline');
		// $this->db->where('spm.date', date('Y-m-d'));
		$data = $this->db->get('line')->result();

      	header("Content-Type: text/event-stream");
		header("Cache-Control: no-cache");
		header("Connection: keep-alive");
      	echo "\n\n";
      	foreach($data as $row):
      	{
      		if ($row->stack <= 0) {
      			$color = 'bg-dark';
      		}elseif ($row->stack <= $row->min) {
      			$color = 'bg-danger';
      		}elseif ($row->stack <= 6) {
      			$color = 'bg-indigo';
      		}else{
      			$color = 'bg-success';
      		}


	        $line   = $row->line;	        
	        $min   = $row->min;	        
	        $max   = $row->max;	        
	        $stack   = $row->stack;	        
	        $balance   = $row->qty;	        	          
	        // echo  "id: $id \n\n";
	        $data = array(
	        	'line' => $line,
	        	'min' => $min,
	        	'max' => $max,
	        	'stack' => $stack,
	        	'color' => $color,
	        );
	        echo "data: {\"line\": \"$line\", \"min\": \"$min\", \"max\": \"$max\", \"stack\": \"$stack\", \"balance\": \"$balance\", \"color\": \"$color\" } \n\n";
      	}

      	endforeach;
     	
     	// echo "retry: 1000\n\n";
      	
      	flush();
      	sleep(1);
	}

}

/* End of file Json.php */
/* Location: ./application/controllers/Json.php */