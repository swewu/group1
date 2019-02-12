
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

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
		/*body{
			background-image: url("img/sunrise.jpg");
		    background-repeat: no-repeat;
    		background-size: 100% 125%;
		}*/
		.img-logo{
			width: 100px;
			height: 60px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<img class="img-logo" src="<?php echo base_url() ?>assets/img/12.png" >
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	<!--       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
	    </form>
	  </div>
</nav>

<br><br><br><br>
<div class="container">

	<div class="d-flex justify-content-center h-100">
		<div class="card" >
			<div class="card-header">
				<h3 style="text-align: center;">กรอกข้อมูลบันทึกรายวิชา</h3>
			</div>
			<div class="card-body"  style="width: 700px;">
				<form action="<?php echo site_url('Welcome/insertsubjecthistory') ?>" method="post">
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสนักศึกษา</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="studentid" name="studentid" placeholder="รหัสนักศึกษา">
				    </div>
				  </div>
				
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">รหัสวิชา</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="courseid" name="courseid" placeholder="รหัสวิชา">

			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ปีการศึกษา</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">ภาคการศึกษา</label>
			    <div class="col-sm-9">
					<input type="radio" name="term" value="1"> ภาคการศึกษาที่ 1
  				<input type="radio" name="term" value="2"> ภาคการศึกษาที่ 2
  				<input type="radio" name="term" value="3"> ภาคการศึกษาที่ 3 
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-3 col-form-label">เกรด</label>
			    <div class="col-sm-9">
					<select name="grade">
    				<option value="D">D</option>
    				<option value="D+">D+</option>
    				<option value="W">W</option>
    				<option value="F">F</option>
  				</select>
			    </div>
			  </div>

			  	<div class="form-group">
						<input type="submit" value="บันทึก" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>