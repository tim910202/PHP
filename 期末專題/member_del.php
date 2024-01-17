<?php
$id = $_GET["id"];

$con = mysqli_connect('127.0.0.1' , 'root' , '');
mysqli_select_db($con , 'website_db');

$sql = "delete from shop where id = '$id'";
mysqli_query($con,$sql) or die (mysqli_error($con));

header("refresh:0 ; url = member_show.php")

?>