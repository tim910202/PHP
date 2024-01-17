<html>
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
	table{
		margin:0 auto;
		border-collapse:collapse;
		text-align:center;
		width:25%;
		height:40%;
		background-color:#FFEBCD;
		border:3px rgb(100,100,100) solid;
		font-size:25px;
	}
	p{
		margin:0 0 20 0;
	}
	a{
		color:#800000;
	}
	input{
		font-family:fantasy ,華康墨字體;
		font-size:20px;
	}
</style>
<?php
	include("product.php");
?>

<form action = "register member_res.php" method = POST>
	<p>會員註冊</p>
	<table border = 1>
		<td>姓名</td>
		<td><input type = text name = "name">
		</td><tr>
		
		<td>帳號</td>
		<td><input type = text name = "acc">
		</td><tr>
			
		<td>密碼</td>
		<td><input type = password name = "pwd">
		</td><tr>
		
		<td>性別</td>
		<td>
		<input type = radio name = "sex" value = "男" checked>男
		<input type = radio name = "sex" value = "女">女
		</td><tr>
		
		<td>生日</td>
		<td><input type =date name = "birthday">
		</td></tr>
		
		<td colspan = 2><center>
		<input type = submit value = "送出">
		<input type = reset value = "取消">
		</td><tr>
	</table>
	<a href = "website.php">返回官網</a>
<form>
</body>
</html>
