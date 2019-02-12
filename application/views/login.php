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
  <style type="text/css">
    body {
      color: purple;
      background-color: #CCFFFF ;
      background-size: cover;
    }
    .bg-bule-light{
      color: #ffffff;
      background-color: #e6ffe6 ;
    }
  </style>
</head>
<body background="<?php echo base_url() ?>assets/img/11.png">
  <nav class="navbar navbar-expand-lg navbar-light bg-bule-light">
    <a class="navbar-brand" href="#">SWE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">INFO<span class="sr-only">(current)</span></a>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            LINK
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">About</a>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-0">

       <b><button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</button></b>
      </form>
    </div>
  </nav>
  <br><br><br><br><br>
<div class="container">
  <style >
    body{
        background-repeat: no-repeat;
        background-size: 100% 125%;
    }
  </style>
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
          <center><img src="<?php echo base_url() ?>assets/img/12.png"></center>
        <center><h3>LOGIN</h3></center>
<!--         <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div> -->
      </div>
      <div class="card-body" style="width: 450px;">
        <form action="<?php echo site_url('Welcome/checkLogin') ?>" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username" name="id" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password"  name="password">
          </div>
          <div class="form-group">
            <input type="submit" value="Login" style="width: 150px;" class="btn float-right login_btn">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>