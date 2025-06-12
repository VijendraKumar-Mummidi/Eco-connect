<?php
$servername = "localhost";
$user = "root";
$pwd = "";
$dbname = "econnect2";
$conn = mysqli_connect($servername,$user,$pwd,$dbname);
if(!$conn){
    die("connection Error :-");
}
?>