<?php
require './backend/connect.php';

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="mb-3">
        <a href="login.php" class="btn btn-primary my-5 ms-5">Back</a>
        <h4 class="text-center">student Your result </h4><table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PRN</th>
      <th scope="col">C++</th>
      <th scope="col">java</th>
      <th scope="col">php</th>
      <th scope="col">Python</th>
      <th scope="col">Status</th>


      </th>
    </tr>
</thead>
<tbody>
  <?php
  
  $sql = "SELECT * FROM student WHERE prn ='$prn'";
  
  $data = mysqli_query($conn, $sql);
  
  if($row = mysqli_num_rows($data) > 0){    
      while($result = mysqli_fetch_assoc($data)){
    
          echo "
          <tr>
            <td>". $result['id'] ."</td>
            <td>". $result['name'] ."</td>
          <td>". $result['prn'] ."</td>
          <td>". $result['c++'] ."</td>
          <td>". $result['java'] ."</td>
          <td>". $result['php'] ."</td>
          <td>". $result['python'] ."</td>
          
        </tr>";
        
        if(($result['c++']=="pass") || ($result['java']=="pass")  ||  ($result['php']=="pass")  ||  ($result['python']=="pass")){
            echo "pass";
        
        }
        
        
    }
}



?>
</tbody>
 
</table>
  </body>
</html>