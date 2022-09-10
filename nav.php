<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>-->
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="p-3 my-0 text-bg-primary"><div class="mb-3">
  <h1 class="text-center bg-info "><img src='./image/college.png'>TECH COLLEGE OF MUMBAI</h1>
</div>

  <ul class="nav justify-content-center">
  <li class="nav-item btn btn-padding-4">
    <a class="btn btn-primary" href="home.php">HOME</a>
  </li>
  
  <li class="nav-item btn btn-padding-4">
    <a class="btn btn-primary" href="admission.php">ADMISSION</a>
  </li>

  <!--<li class="nav-item btn btn-padding-4">
    <a class="btn btn-primary" href="result.php">RESULT</a>
  </li>-->

  <li class="nav-item btn btn-padding-4">
    <a class="btn btn-primary" href="login.php">LOGIN</a>
  </li> 

  <li class="nav-item btn btn-padding-4">
    <a class="btn btn-primary" href="about.php">ABOUT</a>
  </li>
  
</ul>
<span>
    <?php date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y:m:l:h:i:sa");?> </span>
</div>
  </body>
</html>