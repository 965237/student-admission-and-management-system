<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        .button{
            width: 50px;
            height: 50px;
            background-color: aqua;
           
        }
        .box{
            width: 100%;
            height: 80vh;
            background-color: lightcoral;
        }
        </style>
  </head>
  <body>
    <?php
    require 'nav.php';
    ?>
    
    <div class="box">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum iure eligendi sapiente hic natus vitae minus molestiae voluptatum totam esse eveniet in maiores officia illum dolor, quisquam nobis laborum sit accusamus aliquid amet quasi nisi fuga! Maiores possimus deserunt aut nobis, explicabo id commodi saepe enim inventore tempore accusantium omnis.</h1>
        <div class="mlogin">
        <a class="btn btn-primary" href="about_login.php" >LOGIN</a>
    </div>
</div>
<?php
require 'footer.php';
?>
  </body>
</html>
