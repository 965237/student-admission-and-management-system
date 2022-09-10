<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
    <style>
        .parent_div{
            width: 97.2vw;
            height: 110vh;
            background-color: aqua;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 6px;
        }
        
        .child_div .form-control1{
            border-radius: 5px;
            border: lightgreen solid 2px;
            width: 50vw;
            margin-top: 4px;
           
        }
    </style>
</head>

<body>
    <?php

require 'connect.php';
$id =$_GET['id'];


$query = "SELECT * FROM admission WHERE id='$id'";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data); 


if(isset($_POST['update'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $tenth = $_POST['10'];
   $twelve = $_POST['12'];
 
//   $sql = " INSERT INTO confirm firstname,lastname,email,contact,ten,twelve,course  SELECT  firstname='$fname' ,lastname='$lname', email='$email', contact='$tel', ten='$tenth', twelve='$twelve' FROM admission  ";
//   $sql = " SELECT (firstname,lastname,email,contact,ten,twelve,course) FROM admission INSERT INTO confirm (firstname,lastname,email,contact,ten,twelve,course admission) WHERE id='$id' ";  */
    $sql = " INSERT INTO confirm (id,firstname,lastname,email,contact,ten,twelve,course) SELECT  id,firstname,lastname,email,contact,ten,twelve,course FROM admission WHERE id='$id' limit 4";

    $data = mysqli_query($conn, $sql);
     if($data){
      header('location:student_record.php');
   }
   else{
    echo "not".mysqli_error($conn);
   }
}

?>
    <div class="mb-3">

        <h4 class="text-center my-2">You can create account so you will notified </h4>
        <br>
        <div class="parent_div">
            <form action="" method="POST">
                <div class="child_div">
                    <label class="form-label">First name :</label><br>
                    <input type="text" name="fname" class="form-control1" autocomplete="off" value="<?php echo $row['firstname']; ?>"><br>

                    <label class="form-label">Last name :</label> <br>
                    <input type="name" name="lname" class="form-control1" autocomplete="off"  value="<?php echo $row['lastname']; ?>"><br>



                    <label class="form-label">Email address :</label> <br>
                    <input type="email" name="email" class="form-control1" autocomplete="off"  value="<?php echo $row['email']; ?>"><br>



                    <label class="form-label">Contact no :</label> <br>
                    <input type="tel" name="tel" class="form-control1" autocomplete="off"  value="<?php echo $row['contact']; ?>"><br>



                    <label class="form-label">10th marks :</label> <br>
                    <input type="text" name="10" class="form-control1" autocomplete="off" value="<?php echo $row['ten']; ?>"><br>



                    <label class="form-label">12th marks :</label> <br>
                    <input type="text" name="12" class="form-control1" autocomplete="off" value="<?php echo $row['twelve']; ?>"><br>
<!--
                    <label class="form-label">Course :</label> <br>
                    <select name="course" class="form-control1" >
                        <option value="" class="form-control1" >--Please choose one course--</option>
                        <option value="BCA"  class="form-control1" >BCA</option>
                        <option value="MCA"  class="form-control1" >MCA</option>
                        <option value="B.TECH" class="form-control1" >B.TECH</option>
                        <option value="M.TECH"  class="form-control1" >M.TECH</option>
                        <option value="CA" class="form-control1" >CA</option>
                        <option value="BBI" class="form-control1" >BBI</option>
                        <option value="BBA"   class="form-control1" >BBA</option>
                    </select> <br>
      -->
                  


                    

                    <button type="submit" name="update" class="btn btn-primary">Submit</button><br>
                </div>
            </form>
        </div>
