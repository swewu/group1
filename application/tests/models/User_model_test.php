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


}

?>