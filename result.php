<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        .form{
            width: 100%;
            height:100vh;
            background-color: aqua;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .form_info{
           border-radius: 0ch;
           
        }
        </style>

  </head>
  <body>
    <?php
require './backend/connect.php';

if(isset($_POST['submit'])){
    if(($_POST['name']=="") ||  ($_POST['prn']=="") || ($_POST['c++']=="")  ||  ($_POST['java']=="")  ||  ($_POST['python']=="") ){
        echo "Empty Filed";
    }else{
        $name = $_POST['name'];
        $prn = $_POST['prn'];
        $c = $_POST['c++'];
        $java = $_POST['java'];
        $php = $_POST['php'];
        $python = $_POST['python'];
        $password = $_POST['password'];
        $status = $_POST['status'];

        $sql = " INSERT INTO student (name,prn,c,java,php,python,password,status) VALUES('$name','$prn','$c','$java','$php','$python','$password','$status')";

        $query = mysqli_query($conn, $sql);
        if($query){
            echo "data inserted ";
        }
        else{
            echo "failed".mysqli_error($conn);
        }

    }
}



?>
    <h1 class="text-center bg-dark text-white">STUDENT RESULT</h1>
    <div class="form my-1">
        <form action="" method="POST">
            NAME : <br>
            <input type="text" name="name" class="form_info my-2" size="50px"><br>

            PRN :   <br>
            <input type="text" name="prn" class="form_info my-2" size="50px"><br>

            C++ : <br> 
            <input type="text" name="c++" class="form_info  my-2" size="50px"><br>

            JAVA : <br> 
            <input type="text" name="java" class="form_info" size="50px"><br>

            PHP : <br> 
            <input type="text" name="php" class="form_info  my-2" size="50px"><br>

            PYTHON : <br> 
            <input type="text" name="python" class="form_info  my-2" size="50px"><br>

            PASSWORD : <br>
            <input type="text" name="password" class="form_info  my-2" size="50px"><br>
            
            STATUS :  <br>
            <input type="text" name="status" class="form_info  my-2" size="50px"><br>

            <input type="submit" name="submit" class="btn btn-primary" >

            <a href="./backend/student_record.php" class="btn btn-primary" >RECORD</a>

</form>
</div>


  </body>
</html>