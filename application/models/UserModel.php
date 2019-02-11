<?php

class UserModel extends CI_Model
{

    public function create($id, $username, $password, $role)
    {
        $data = array(
            'userid' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function checkLogin($id,$pass){
		$sql ="SELECT * FROM user where username = '".$id."' and password = '".$pass."' ";
		// var_dump($sql);
		$query = $this->db->query($sql);
		$result = false;
		if($query){
			foreach ($query->result() as $row ) {
				if($row->password == $pass){
					$_SESSION['login'] = 1;
					$_SESSION['userid'] = $row->userid;
					$_SESSION['username'] = $row->username; 
					$_SESSION['role'] = $row ->role;	
					$result = true;			
				}
			}
        }
        var_dump($result);
		return $result;
    }
    
    
}
