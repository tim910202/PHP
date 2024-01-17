<html>
<head>
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
		height:20%;
		background-color:#FFEBCD;
		border:3px rgb(100,100,100) solid;
		font-size:25px;
	}
	p{
		margin:0 0 20 0;
	}
	input{
		font-family:fantasy ,華康墨字體;
		font-size:20px;
	}
	a{
		color:#800000;
	}
</style>
</head>
<body>

<form action = "login_res.php" method = "POST">
	<p>會員登入</p>
	<table border = 1>
		<td>帳號</td>
		<td><input type = text name = "acc"></td>
		<tr>
		
		<td>密碼</td>
		<td><input type = password name = "pwd"></td>
		<tr>
		
		<td colspan = 2>
		<input type = submit value = "送出">
		<input type = reset value = "取消">
		</td><tr>
	</table>
	<a href = "manager.php">切換管理者&nbsp;</a>
	<a href = "website.php">&nbsp;返回官網</a>
</form>
</body>
</html>