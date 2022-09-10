<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    .parent_div {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 90vh;
      background-color: lightblue;


    }

    .child_div1 {
      width: 40vw;
      height: 50vh;
      background-color: lightpink;
      margin-top: 20px;
      padding: 2px;
      margin-left: 20px;
    }

    .form_input {
      border-radius: 10px;
      margin-left: 2px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: solid lightgreen 1px;
    }

    .child_div2 {
      width: 40vw;
      height: 50vh;
      margin-top: 20px;
      margin-left: 20px;
      background-color: lightcoral;

    }
  </style>

</head>

<body>
  <?php
require 'nav.php';
require './backend/connect.php';



if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $ad_sql = "SELECT * FROM admission WHERE email='$email' && contact='$contact' ";
  $query = mysqli_query($conn, $ad_sql);
  if(mysqli_num_rows($query)==1){
    echo '<div class="alert alert-success" role="alert" > Application Is In Under Review done </div> ';
    header('location:read.php');
  }
  else{
    echo '<div class="alert alert-danger" role="alert" >Unable To Get Your Application </div> ';
  }
}
?>


<div class="parent_div">
  <form action="" method="POST">
    <div class="child_div1">
      <h6>Check your admission progress </h6>
    <hr>
    <label>Email</label>
    <input type="text" name="email" class="form_input" autocomplete="off"> 
    
    <label>Contact</label>
    <input type="text" name="contact" class="form_input"  autocomplete="off">
    <br>
    <input type="submit" name="submit" class="btn btn-primary ms-5">
    
  </div> 
  </form>
  
  <div class="child_div2">
      <form action="" method="POST">
        <h6>Check your result here </h6>
     <hr>
     <label>Name</label>
     <input type="text" name="name" class="form_input"  autocomplete="off"> 
      
      <label>Roll no</label>
      <input type="text" name="prn" class="form_input" autocomplete="off"> 
      <br>
      
      <label>Password</label>
      <input type="text" name="password" class="form_input" autocomplete="off"> 
      <br>
      
      
      <input type="submit" name="save" class="btn btn-primary ms-5">
    </form>
  </div>  
  
</div>
</form>

<?php
if(isset($_POST['save'])){
$name = $_POST['name'];
$prn = $_POST['prn'];
$password = $_POST['password'];

$data = " SELECT * FROM student WHERE name='$name' AND prn='$prn' AND password='$password' ";


  $query = mysqli_query($conn, $data);
if (mysqli_num_rows($query) == 1) {
  $fedata = " SELECT * FROM student WHERE prn='$prn'  ";
  $fequery = mysqli_query($conn, $fedata);
  if (mysqli_num_rows($fequery)) {
    while ($row = mysqli_fetch_assoc($fequery)) {
      echo "<h2 class='text-center p-2'>Result </h2>";
      echo "<table class='table table-secondary'><thead>
       <tr>
       <th>ID</th>
         <th>NAME</th>
         <th>PRN</th>
         <th>C</th>
         <th>java</th>
         <th>php</th>
         <th>Python</th>
         <th>Status</th>

          
      
      
         </th>
       </tr>
      </thead>";
      echo "<tbody> <br>"; 

      echo "
      <tr>
      <td>" . $row['id'] . "</td>
      <td>". $row['name'] . "</td>
      <td>" . $row['prn'] . "</td>
      <td>" . $row['c'] . "</td>
      <td>" . $row['java'] . "</td>
      <td>" . $row['php'] . "</td>
      <td>" . $row['python'] . "</td>
      <td>" . $row['status'] . "</td>
      
      </tr>
      </tbody></table>";
        
    
    }
  }
}
}

else{
  echo '<div class="alert alert-danger" role="alert" >Incorrect Password </div> ' ;
}

require 'footer.php';
  ?>




 

</body>
</html>