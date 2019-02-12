<?php
if(isset($_SESSION['role'])){
    
    // echo $_SESSION['role'];
}else{
    echo "<script>alert('กรุณาเข้าสู่ระบบก่อน');
            window.location.assign('http://localhost/group1/welcome/');
                </script>";
    // redirect('Welcome/index');
}

?>