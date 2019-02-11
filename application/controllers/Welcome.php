<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('form_login');

	}
	public function inseruser()
	{
		$this->load->view('form_user');
	}

	public function student()
	{
		$this->load->view('student');
	}

	public function teacher()
	{
		$this->load->view('teacher');
	}
	public function checkLogin(){
		$id  = isset($_GET['id'])?$_GET['id']:"";
		$pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->checkLogin($id,$pass);
		if($result){
			echo '<script>alert("Student Login Success")</script>';
			if($_SESSION['role'] == 1){
				redirect('Welcome/student');
			}else if($_SESSION['role'] == 2){
				redirect('Welcome/teacher');
			}
			
			
		}
			
	}
	public function insertUser()
	{
		$id  = isset($_GET['id'])?$_GET['id']:"";
		$username = isset($_GET['username'])?$_GET['username']:"";
		$password = isset($_GET['password'])?$_GET['password']:"";
		$role = isset($_GET['role'])?$_GET['role']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->create($id, $username, $password, $role);
		if($result){
			echo '<script>alert("Student Login Success")</script>';
			// redirect('Welcome/index');
		}
	}

	public function getuser(){
		$this->load->model('ActivitySWEModel','ac');
		$result = $this->ac->getuser();
		return $result;
	}

	public function deletesubjesthistoy($historyid)
	{
		$sql = "delete  FROM historygrade where historyid= '".$historyid."' ";
		$query = $this->db->query($sql);	
		return $query;
	}
	public function deletesubjectre($gradeid)
	{
		$sql = "delete  FROM regrade where gradeid= '".$gradeid."' ";
		$query = $this->db->query($sql);	
		return $query;
	}
}
