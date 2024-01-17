<html>
<head>
<style>
	body{
		font-family:fantasy ,華康墨字體;
		margin:0 auto;
		width:100%;
		text-align:center;
		background-color:#FFDAB9;
		font-size:40px;
		font-weight:bold;
		color:#4D1F00;
	}
	table{
		margin:0 auto;
		border-collapse:collapse;
		text-align:center;
		width:40%;
		height:auto;
		background-color:#FFEBCD;
		border:3px rgb(100,100,100) solid;
		font-size:25px;
	}
	a{
		color:#800000;
	}
</style>
</head>
</body>
<table border = 1>
<td>姓名</td><td>性別</td><td>帳號</td><td>生日</td><tr>
<?php
$con = mysqli_connect('127.0.0.1' , 'root' , '');
mysqli_select_db($con , 'website_db');

$sql = "select * from shop";

$result = mysqli_query($con,$sql) or die (mysqli_error($con));

while ($now = mysqli_fetch_assoc($result))
{
	echo "<td>" . $now["name"] . "</td>";
	echo "<td>" . $now["sex"] . "</td>";
	echo "<td>" . $now["acc"] . "</td>";
	echo "<td>" . $now["birthday"] . "</td><tr>";
}
?>
<a href = "website login.php">返回官網</a>
</table>
</body>
</html>