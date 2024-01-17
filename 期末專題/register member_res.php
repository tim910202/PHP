<html>
<body>
<?php
include("product.php");

date_default_timezone_set('Asia/Taipei');

$name = $_POST["name"];

$acc = $_POST["acc"];

$pwd = $_POST["pwd"];

$sex = $_POST["sex"];

$birthday = $_POST["birthday"];

$con = mysqli_connect('127.0.0.1' , 'root' , '');
mysqli_select_db($con , 'website_db');

$sql = "insert into shop(name , sex , acc , pwd , birthday) values('$name' , '$sex' , '$acc' , '$pwd' , '$birthday')";
mysqli_query($con,$sql) or die (mysqli_error($con));

header("refresh:0 ; url = register success.php")

?>
</body>
</html>
