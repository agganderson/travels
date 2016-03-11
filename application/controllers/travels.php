<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class travels extends CI_Controller{

	protected $view_data = array();
	protected $user_session = NULL;

	function __construct(){
		parent::__construct();
		$this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");
	}

	public function index(){
		$this->load->view('/travels/home');
	}

	public function process_login(){		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("login_errors", validation_errors());
			redirect('/');
		}
		else{
			$this->load->model("travel");							   
			$get_user = $this->travel->get_user($this->input->post());

			if ($get_user){
				$this->session->set_userdata("user_session", $get_user);
				redirect("travels/success");
			}
			else{
				$this->session->set_flashdata("login_errors", "Invalid email and/or password");
				redirect('/');
			}
		}
	}
	
	public function process_registration(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "trim|required|min_length[3]");
		$this->form_validation->set_rules("username", "Userame", "trim|required|min_length[3]|is_unique[users.username]");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm_password]|md5");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|md5");

		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("registration_errors", validation_errors());
			redirect('/');
		}
		else{
			$this->load->model("travel");
			$user_input = $this->input->post();			
			$insert_user = $this->travel->insert_user($user_input);
			
			if($insert_user){				
				$this->session->set_userdata("user_session", $user_input);
				redirect("travels/success");
			}
			else{
				$this->session->set_flashdata("registration_errors", "Sorry but your info were not registered please try again.");
				redirect('/');
			}
		}
	}

	public function success(){
		$this->load->view('/travels/plans', $this->view_data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

	public function add_page(){
		$this->load->view('/travels/add');
	}

	public function add_plan(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('destination', 'Destination', 'trim|required');
		$this->form_validation->set_rules('plan', 'plan', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('travel_errors', "Your fields cannot be empty...");
		}
		else{
			$this->load->model('travel');
			$plan_input = $this->input->post();
			$insert_plan = $this->travel->insert_plan($plan_input);

			if($insert_plan){
				$this->session->set_userdata('user_session', $plan_input);
				redirect('/travels/success');
			}
			else{
				$this->session->set_flashdata('plan_errors', "Plan weren't entered into system, please try again.");
			}
		}
	}

	public function destination_by_id(){
		$this->load->view('/travels/destination');
	}

}

?>