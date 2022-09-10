<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "college";

$conn = mysqli_connect($host, $user, $password, $dbname);
if(!$conn){
    die("connection is failed <br>");

}
else{
    echo "";  #"connect successful <br>";
}
?>