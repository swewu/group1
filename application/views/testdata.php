<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Herb</title>
  <style >
    .img-logo{
      width: 100px;
      height: 60px;
    }
    .btn-blue-too{
      color: #fff;
      background-color:#33adff;
      border-color: #33adff;
    }
    .btn-blue{
      color: #fff;
      background-color:#005ce6;
      border-color: #005ce6;
    }
  </style>
</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="img-logo" src="<?php echo base_url() ?>assets/img/12.png" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <div class="col-md-4 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" id="myInput" placeholder="Search">
            <div class="input-group-append">
              <button class="btn btn-blue"><i class="fa fa-search"></i> Search</button>
            </div>
          </div>
        </div>
      <form class="form-inline my-2 my-lg-0">
  <!--       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-outline-dark my-2 my-sm-0" type="button" onclick="window.location.href='logout'">LOGOUT</button>
      </form>
    </div>
</nav>
<br><br><br>
  <!-- HEADER -->
<?php  
if($_SESSION['role'] == 1){
  echo '<div class="container">
  <div class="row">
    <div class="col-md-1">
      <div class="input-group">
        <div class="input-group">
          <a href="<?php echo base_url() ?>Welcome/inserthis" class="btn btn-blue-too"><i class="fa fa-plus"></i> เพิ่มข้อมูลนักศึกษา</a>
        </div>
      </div>
    </div>
  </div>
</div><br>';
}else{
  echo '<div class="container">
  <div class="row">
    <div class="col-md-1">
      <div class="input-group">
        <div class="input-group">
        </div>
      </div>
    </div>
  </div>
</div><br>';
}

?>
  <!-- SEARCH -->
   <?php
   if($_SESSION['role'] == 1){
     echo '<section id="posts">
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="card">
             <div class="card-header">
               <center><h4>ตารางข้อมูลรายวิชา</h4></center>
             </div>
             <table class="table table-striped" id="myTable">
               <thead class="thead-dark">
                 <tr>
                   <th>#</th>
                   <th>รหัสวิชา</th>
                   <th>ปีการศึกษา</th>
                   <th>เทอม</th>
                   <th>เกรด</th>
                   <th>แก้ไข</th>
                   <th>ลบ</th>
                 </tr>
               </thead>
               <tbody id="herbs">';
   }else{
     echo '<section id="posts">
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="card">
             <div class="card-header">
               <center><h4>ตารางข้อมูลรายวิชา</h4></center>
             </div>
             <table class="table table-striped" id="myTable">
               <thead class="thead-dark">
                 <tr>
                   <th>#</th>
                   <th>รหัสนักศึกษา</th>
                   <th>รหัสวิชา</th>
                   <th>ปีการศึกษา</th>
                   <th>เทอม</th>
                   <th>เกรด</th>
                   <th>แก้ไข</th>
                   <th>ลบ</th>
                 </tr>
               </thead>
               <tbody id="herbs">';
   }


  ?>
  
  <!-- POSTS -->
  

                <?php
                if($_SESSION['role'] == 1){
                  $i = 1;
                    foreach ($subjecthistory->result() as $row) {
                      if($_SESSION['username'] == $row->studentid){
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';

                        echo '<td>'.$row->courseid.'</td>';
                        echo '<td>'.$row->year.'</td>';
                        echo '<td>'.$row->term.'</td>';
                        if($row->newgrade == null){
                          echo '<td>'.$row->grade.'</td>';
                          echo '<td>';
                          echo '<a href="editsubject/'.$row->historyid.'" class="btn btn btn-warning">';
                          echo '<i class="far fa-edit">Edit</i>';
                          echo '</a>';
                          echo '</td>';
                          echo '<td>';
                          echo '<a href="#" class="delete_data btn btn-danger" id="' .$row->historyid.'">';
                          echo '<i class="fa fa-trash">Delete</i>';
                          echo '</a>';
                          echo '</td>';
                        }else{
                          echo '<td>'.$row->newgrade.'</td>';
                          echo '<td>';
                          echo '<button type="button" class="btn btn btn-warning" disabled><i class="far fa-edit">Edit</i></button>';
                          // echo '<a href="editsubject/'.$row->historyid.'" class="btn btn btn-warning" >';
                          // echo '';
                          // echo '</a>';
                          echo '</td>';
                          echo '<td>';
                          echo '<button type="button" class="btn btn btn btn-danger" disabled><i class="fa fa-trash">Delete</i></button>';
                          // echo '<a href="#" class="delete_data btn btn-danger" id="' .$row->historyid.'">';
                          // echo '';
                          // echo '</a>';
                          echo '</td>';
                        }
                        
                        echo '</tr>';
                        $i++;
                      }
                        
                    }
                }else{
                  $i = 1;
                    foreach ($subjecthistory->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$row->studentid.'</td>';
                        echo '<td>'.$row->courseid.'</td>';
                        echo '<td>'.$row->year.'</td>';
                        echo '<td>'.$row->term.'</td>';
                        if($row->newgrade == null){
                          echo '<td>'.$row->grade.'</td>';
                        }else{
                          echo '<td>'.$row->newgrade.'</td>';
                        }
                        
                        echo '<td>';
                        echo '<a href="editsubject/'.$row->historyid.'" class="btn btn btn-warning">';
                        echo '<i class="far fa-edit">Edit</i>';
                        echo '</a>';
                        echo '</td>';
                        echo '<td>';
                        echo '<a href="#" class="delete_data btn btn-danger" id="' .$row->historyid.'">';
                        echo '<i class="fa fa-trash">Delete</i>';
                        echo '</a>';
                        echo '</td>';
                        echo '</tr>';
                        $i++;
                    }
                }
                    


                    ?>
 
              </tbody>
            </table>

            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Mhunprai
          </p>
        </div>
      </div>
    </div>
  </footer>
</body>

<script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Are you sure you want to delete this?"))  
                {  
                     window.location="<?php echo base_url(); ?>Welcome/deletesubjecthistory/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  


      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
      });
      </script>
</html>