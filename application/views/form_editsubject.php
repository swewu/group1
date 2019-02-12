
<!DOCTYPE html>
<html>
<head>

	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->

	<style >
		body{
			background-image: url("img/sunrise.jpg");
		    background-repeat: no-repeat;
    		background-size: 100% 125%;
		}
	</style>
</head>
<body><br><br><br><br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" >
			<div class="card-header">
				<h3 style="text-align: center;">แก้ไขข้อมูลบันทึกรายวิชาที่ตกค้าง</h3>
			</div>
			<div class="card-body"  style="width: 700px;">
				<form action="<?php echo site_url('Welcome/updateeditsubject') ?>" method="post">
                <?php

                    foreach ($datalist->result() as $row) {
                        echo'

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสนักศึกษา</label>
				    <div class="col-sm-9">
                    <input type="hidden" id="historyid" name="historyid" value="'.$row->historyid.'">
				      <input type="text" class="form-control" id="studentid" name="studentid" placeholder="รหัสนักศึกษา" value="'.$row->studentid.'" disabled>
				    </div>
				  </div>
				
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">รหัสวิชา</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="courseid" name="courseid" placeholder="รหัสวิชา" value="'.$row->courseid.'">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ปีการศึกษา</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา" value="'.$row->year.'">
			    </div>
              </div>';
              
              if($row->term == 1){
                  echo'
                <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ภาคการศึกษา</label>
			    <div class="col-sm-9">
					<input type="radio" name="term" value="1" checked=""> ภาคการศึกษาที่ 1
  				<input type="radio" name="term" value="2"> ภาคการศึกษาที่ 2
  				<input type="radio" name="term" value="3"> ภาคการศึกษาที่ 3 
			    </div>
			  </div>';
              }else if($row->term == 2){
                echo'
                <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ภาคการศึกษา</label>
			    <div class="col-sm-9">
					<input type="radio" name="term" value="1"> ภาคการศึกษาที่ 1
  				<input type="radio" name="term" value="2" checked=""> ภาคการศึกษาที่ 2
  				<input type="radio" name="term" value="3"> ภาคการศึกษาที่ 3 
			    </div>
			  </div>';
              }else if($row->term == 3){
                echo'
                <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ภาคการศึกษา</label>
			    <div class="col-sm-9">
					<input type="radio" name="term" value="1"> ภาคการศึกษาที่ 1
  				<input type="radio" name="term" value="2"> ภาคการศึกษาที่ 2
  				<input type="radio" name="term" value="3" checked=""> ภาคการศึกษาที่ 3 
			    </div>
			  </div>';
              }

              if($row->grade == 'D'){
                echo '
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
                  <div class="col-sm-9">
                      <select name="grade" value="W">
                      <option value="D" selected>D</option>
                      <option value="D+">D+</option>
                      <option value="W">W</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>';
              }else if($row->grade == 'D+'){
                echo '
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
                  <div class="col-sm-9">
                      <select name="grade" value="W">
                      <option value="D">D</option>
                      <option value="D+" selected>D+</option>
                      <option value="W">W</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>';
              }else if($row->grade == 'W'){
                echo '
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
                  <div class="col-sm-9">
                      <select name="grade" value="W">
                      <option value="D">D</option>
                      <option value="D+">D+</option>
                      <option value="W" selected>W</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>';
              }else if($row->grade == 'F'){
                echo '
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
                  <div class="col-sm-9">
                      <select name="grade" value="W">
                      <option value="D">D</option>
                      <option value="D+">D+</option>
                      <option value="W">W</option>
                      <option value="F" selected>F</option>
                    </select>
                  </div>
                </div>';
              }
              echo '
             
              
              

			  	<div class="form-group">
						<input type="submit" value="บันทึก" class="btn float-right login_btn">
                    </div>';
            }
                    ?>
                    
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>