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
		$this->load->view('login');

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


	public function inserthis(Type $var = null)
	{
		$this->load->view('checksession');
		$this->load->view('insertsubjecthistory');
	}

	public function getdata()
	{
 			$subjecthistory = $this->getsubjecthistory();
			$data['subjecthistory'] = $subjecthistory;
			$this->load->view('checksession');
			$this->load->view('testdata',$data);

	}
	public function checkLogin(){
		$id  = isset($_POST['id'])?$_POST['id']:"";
		$pass = isset($_POST['password'])?$_POST['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->checkLogin($id,$pass);
		if($result){
			echo '<script>alert("Login Success")</script>';
			// if($_SESSION['role'] == 1){
				redirect('Welcome/getdata');
			// }else if($_SESSION['role'] == 2){
			// 	redirect('Welcome/teacher');
			// }

		}else{
			echo "<script>alert('username หรือ password ไม่ถูกต้อง');
				window.location.href='index';
				</script>";
		}
			
	}

	public function logout()
	{
		session_destroy();
		echo "<script>alert('ออกจากระบบสำเร็จ');
				window.location.href='index';
				</script>";

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
	public function insertsubjecthistory()
	{
		$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
		$courseid = isset($_POST['courseid'])?$_POST['courseid']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";
		$grade = isset($_POST['grade'])?$_POST['grade']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->insertsubjecthistory($studentid, $courseid, $year, $term, $grade);
		if($result){
			// echo '<script>alert("บันทึกสำเร็จ")</script>';
			// redirect('Welcome/getdata');
			echo "<script>alert('บันทึกสำเร็จ');
				window.location.href='getdata';
				</script>";
		}else{
			echo "<script>alert('บันทึกไม่สำเร็จ');
				window.location.href='getdata';
				</script>";
		}
	}

	public function getuser(){
		$this->load->model('ActivitySWEModel','ac');
		$result = $this->ac->getuser();
		return $result;
	}

	public function deletesubjecthistory()
	{
		$historyid = $this->uri->segment(3);
			$this->load->model("UserModel");  
           	$this->UserModel->deletesubjecthistory($historyid);  
           	redirect(base_url() . "Welcome/deleted"); 
		// return $res;

	}
	public function deletesubjectre($gradeid)
	{
		$sql = "delete  FROM regrade where gradeid= '".$gradeid."' ";
		$query = $this->db->query($sql);	
		return $query;

	}
	public function deleted()  
      {  
           $this->getdata();  
      }  


	public function getsubjecthistory(){
		$this->load->model('UserModel');
		$result = $this->UserModel->getsubjecthistory();
		return $result;
	}

	public function editsubject($historyid){
		$this->load->model('UserModel');
		$result = $this->UserModel->editsubject($historyid);
		$data =  array('datalist' => $result);
		$this->load->view('checksession');
		$this->load->view('form_editsubject',$data);
		

	}

	public function updateeditsubject()
	{
		$historyid  = isset($_POST['historyid'])?$_POST['historyid']:"";
		$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
		$courseid = isset($_POST['courseid'])?$_POST['courseid']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";
		$grade = isset($_POST['grade'])?$_POST['grade']:"";
		$newgrade = isset($_POST['newgrade'])?$_POST['newgrade']:"";
		$role = $_SESSION['role'];
		$this->load->model('UserModel');

		if($role == 1){
			$result = $this->UserModel->updateeditsubject($historyid, $studentid, $courseid, $year, $term, $grade);
		}else{
			$result = $this->UserModel->updateeditsubjectteacher($historyid, $studentid, $courseid, $year, $term, $newgrade);
		}
		if($result){
			echo "<script>alert('แก้ไขข้อมูลสำเร็จ');
				window.location.href='getdata';
				</script>";
		}
		else{
			echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');
				window.location.href='getdata';
				</script>";
		}
	}

	public function getstatusWithyear()
	{
		$this->load->model('UserModel');
		$result = $this->UserModel->getstatusWithyear();
		return $result;
	}

    public function getstatusWithgrade($grade)
    {
		$this->load->model('UserModel');
		$result = $this->UserModel->getstatusWithgrade();
		return $result;
    }
    public function getstatusWithstudentid($studentid)
    {
		$this->load->model('UserModel');
		$result = $this->UserModel->getstatusWithstudentid();
		return $result;
    }
    public function getstatusWithcourseid($courseid)
    {
		$this->load->model('UserModel');
		$result = $this->UserModel->getstatusWithcourseid();
		return $result;
    }

}
