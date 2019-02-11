<?php 

class User_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('UserModel');
        $this->obj = $this->CI->UserModel;
    }

    public function test_insert_user()
    {
        $id = 1;
        $username = 'admin';
        $password = 'admin';
        $role = '';
        $result = $this->obj->create($id,$username,$password,$role);
        $this->assertTrue($result);
    }
    public function test_login_user()
    {
        $username = 'admin';
        $password = 'admin';
        $result = $this->obj->checkLogin($id,$password);
        $this->assertTrue($result);
    }

    public function test_insert_historysub()
    {
        $historyid = '1';
        $term = '1';
        $year = '3';
        $grade = '2.5';
        $studentid = '1';
        $courseid = '01';
        $result = $this->obj->insertsubjecthistory($historyid,$term,$year,$grade,$studentid,$courseid);
        $this->assertTrue($result);
    }

    public function test_insert_resub()
    {
        $gradeid = '1';
        $term = '1';
        $year = '3';
        $grade = '2.5';
        $studentid = '1';
        $courseid = '01';
        $result = $this->obj->insertsubjectre($historyid,$term,$year,$grade,$studentid,$courseid);
        $this->assertTrue($result);
    }


}

?>