<?php



?>


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

    .back{
        display:flex;
        align-items: space-between;
        justify-content: space-between;
        background-color: lightblue;

        

    }
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
require 'backend/connect.php';
session_start();
if(isset($_POST['submit'])){
    if(  (($_POST['name'])=="") || (($_POST['password']==""))  ){
        echo "Empty Filled";
    }else{
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        
        $sql = "SELECT * FROM teacher WHERE name='$name' AND password='$password'";
        
        $query = mysqli_query($conn, $sql);
        if($query){
            $_SESSION['username'] =$name;
            echo "Welcome ".$_SESSION['username'];  
            ?>
            <a href="./backend/student_record.php" class="btn btn-primary ">RECORD</a>
            <a href="result.php" class="btn btn-primary">RESULT</a>
            
            <?php
        }
        else{
          echo "not done";
        }
        
      }
    }
    ?>
<div class="back">
  
<a href="home.php" class="btn btn-primary my-4 ">BACK</a>
<a href="home.php" class="btn btn-primary my-4" <?php  unset($_SESSION['username']); ?>>LOGOUT</a>
</div>
<div class="parent_div">
  <form action="" method="POST">
    <div class="child_div1">
      <h6>Log-in For College Administer</h6>
    <hr>
    <label>Name</label>
    <input type="text" name="name" class="form_input" autocomplete="off"> 
    
    <label>Password</label>
    <input type="text" name="password" class="form_input"  autocomplete="off">
    <br>
    <input type="submit" name="submit" class="btn btn-primary ms-5">
    
  </div> 
  </form>
  

  
</div>
</form>

