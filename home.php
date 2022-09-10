<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <title>front web site page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .card{
        width: 40vw;
        display: flex;
       
        
        padding-left: 40px;
        margin-top: 10px;
        padding: 5px;
        grid-columns: 5px;

      }


      </style>
</head>

<body>


  <?php
require 'nav.php';
require './backend/connect.php';
?>

  <div class="d-flex flex-wrap my-4">
    <div class="card" style="  margin-left:40px;">
      <h3> Upcoming </h3>
      <hr>
      <h4 > Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, aperiam?</h4><br>
    </div>

    <div class="card " style=" margin-left:40px;">
     <h3> Upcoming </h3>
      <hr>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, debitis.</h4>
    </div>

    <div class="card" style=" margin-left:40px;">
     <h3> Upcoming </h3>
      <hr>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, debitis.</h4>
    </div>

    <div class="card" style=" margin-left:40px;">
     <h3> Upcoming </h3>
      <hr>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, debitis.</h4>
    </div>

    <div class="card" style=" margin-left:40px;">
     <h3> Upcoming </h3>
      <hr>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, debitis.</h4>
    </div>

    <div class="card" style=" margin-left:40px;">
     <h3> Upcoming </h3>
      <hr>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, debitis.</h4>
    </div>

  </div>


  <?php
require 'footer.php';
?>


</body>

</html>