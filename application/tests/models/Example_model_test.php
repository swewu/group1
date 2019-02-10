<?php 

class Example_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('TestModel');
        $this->obj = $this->CI->TestModel;
    }

    public function test_get_test_list()
    {
        $expected = "hello";
        $list = $this->obj->test($expected);
        $this->assertEquals($expected, "hello");
    }


}

?>