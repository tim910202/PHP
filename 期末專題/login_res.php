<style>
	body{
		font-family:fantasy ,華康墨字體;
		margin:0 auto;
		width:100%;
		text-align:center;
		background-color:#FFDAB9;
		font-size:50px;
		font-weight:bold;
		color:#4D1F00;
	}
</style>
<?php
$acc = $_POST["acc"];

$pwd = $_POST["pwd"];

$con = mysqli_connect('127.0.0.1' , 'root' , '');
mysqli_select_db($con , 'website_db');

$sql = "select * from shop where acc = '$acc' and pwd = '$pwd'";

$result = mysqli_query($con, $sql);

$count = 0;
while($curr = mysqli_fetch_assoc($result))
{
	$count = $count + 1;
}
if($count >= 1)
{
	echo "恭喜登入";
	header("refresh:3 ; url = website login.php");
}
else
{
	echo "登入失敗";
	// header("refresh:3 ; url = login.php");
	echo "<script> alter('登入失敗') </script>";
	echo "<script> history.go(-1) </script>";
}
?>