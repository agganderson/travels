<?php 
	class travel extends CI_Model{
		public $user;
		
		function __construct(){
			parent::__construct();
		}
		
		public function get_user($user_info){
			$select_user = "SELECT * FROM users WHERE username = ? AND password = ?";
			$values = array($user_info['username'], $user_info['password']);
			return $this->db->query($select_user, $values)->row_array();
			// return $this->db->query("SELECT * FROM users WHERE username = '{$user_info[username]}'
			// 						 AND password = '{$user_info[password]}'")->row_array();
		}

		
		public function insert_user($user_info){
			$insert_query = "INSERT INTO users (name, username, email, password, created_at)
								VALUES (?, ?, ?, ?, NOW())";
			$values = (array($user_info['name'], $user_info['username'], $user_info['email'], $user_info['password']));
			$this->db->query($insert_query, $values);
			return $this->db->insert_id();
		}

		public function insert_plan($plan_input){
			$query = "INSERT INTO destinations (destination, start_date, end_date, plan, created_at) 
						VALUES (?, ?, ?, ?, NOW())";
			$values = array($plan_input['destination'], $plan_input['start_date'], $plan_input['end_date'], $plan_input['plan']);
			$this->db->query($query, $values);
		}
	}
 ?>