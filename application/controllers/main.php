<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Main extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler();
		
	}

	public function index(){

		// $this->load->view('index');
		$this->show();
	}

	public function show(){
		$this->load->model('Course');
		$view_data['courses'] = $this->Course->get_all_course();

		// var_dump($courses);
		$this->load->view('index',$view_data);
		// redirect('/');
	}

	public function reset(){
		// $this->session->sess_destroy();
		
		redirect('/');
	}

	public function add(){
		$message = array();
		if(strlen($this->input->post('title'))<15){
			$message[] = "title must be at least 15 chars";
		}else{
			$this->load->model('Course');
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$created_at = date("Y-m-d, H:i:s");
			$updated_at = date("Y-m-d, H:i:s");
			$course = array('title' => $title,
							'description'=>$description,
							'created_at'=>$created_at,
							'updated_at'=>$updated_at );
			if ($this->Course->add_course($course)) {
				$message[] = "added successfully";
			}else{
				$message[] = "added failed";
			}
		}
		
		$this->session->set_userdata('message',$message);
		redirect('/');

	}

	public function destroy($id){
		$this->load->model('Course');
		$course = $this->Course->get_course_by_id($id);
		$this->load->view('confirm',$course);

	}

	public function destroy_course($id){
		$this->load->model('Course');
		if($this->Course->remove_course($id)){
			$message[] = "remove successfully";
		}else{
			$message[] = "remove failed";
		}
		$this->session->set_userdata('message',$message);
		redirect('/');

	}


}


?>