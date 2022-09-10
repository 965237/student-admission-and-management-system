<!doctype html>
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
    <h1 class="text-center bg-dark text-white">APPLIED STUDENT RECORD </h1> 
    <form action="" method="POST">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">LASTNAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CONTACT</th>
        <th scope="col">TEN</th>
        <th scope="col">TWELVE</th>
        <th scope="col">COURSE</th>
        <th scope="col">ACTION</th>
        </tr>
<?php
require 'connect.php';
$sql = "SELECT * FROM admission";
$query = mysqli_query($conn, $sql);
if ($data = mysqli_num_rows($query)) {
  while ($adrow = mysqli_fetch_assoc($query)) {
    // $id =$adrow['id'];
    echo "<tbody>
    <tr>
    <td>" . $adrow['id'] . "</td>
    <td>" . $adrow['firstname'] . "</td>
    <td>" . $adrow['lastname'] . "</td>
    <td>" . $adrow['email'] . "</td>
    <td>" . $adrow['contact'] . "</td>
    <td>" . $adrow['ten'] . "</td>
    <td>" . $adrow['twelve'] . "</td>
    <td>" . $adrow['course'] . "</td>
    <td><a class='btn btn-primary' href='confirm1.php?id=$adrow[id] '>SELECT</td>
  
    
    </tr>
    </tbody>";
  }
 }
?>



  
</table>

</form>
</div>
  </body>
</html>