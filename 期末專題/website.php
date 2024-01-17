<html>
<head>
<title>商品表格</title>
<style>
	body{
		font-family:fantasy ,華康墨字體;
		margin:0 auto;
		text-align:center;
		background-color:#FFDAB9;
		width:100%;
	}
	table{
		margin:0 auto;
		border-collapse:collapse;
		text-align:center;
		width:50%;
		background-color:#FFEBCD;
		border:3px rgb(100,100,100) solid;
	}
	
	td{
		font-size:25px;
	}
	
	th{
		font-size:30px;
	}
	#header{
		font-size:35px;
		font-weight:bold;
		background-color:#FFA07A;
		height:100px;
		border-bottom:5px #8B0000 solid;
		font-family:fantasy , 華康墨字體;
		white-space:nowrap
	}
	a{
		position:relative;
		top:-40%;
		left:45%;
		color:683c18;
		text-decoration:none
	}
	h1{
		margin:0 0 10 0;
	}
	img{
		margin:0 0 5 0;
	}
	#footer{
		margin:10 0 0 0;
		background-color:#FFA07A;
		height:100px;
	}
	#icon{
		position:relative;
		right:44%;
		top:35%;
		letter-spacing:100px;
	}
	a:hover{
		color:FFFFFF;
	}
</style>
</head>

<body>

<div id = "header">
	<h1>Nintendo</h1>
	<table>
		<a href="register member.php">註冊</a>
		<a href="login.php">&ensp;登入</a>
	<table>
</div>


<img src = "橫幅.png"><br>
<img src = "橫幅1.png"><br>
<img src = "橫幅2.png">

<?php
	echo "<br>現在時刻：" . date("Y/m/d") . "　" . date("H:i:s");
	header("refresh:1 ; url = website.php");
?>

<div id = "footer">
<div id = "icon">
	<a href = "https://www.facebook.com/Nintendo" target=_blank><img src = "facebook.png"></a>
	<a href = "https://www.instagram.com/nintendo_jp/" target=_blank><img src = "instagram.png"></a>
	<a href = "https://www.nintendo.tw/hardware/switch/feature/" target=_blank><img src = "nintendo.png"></a>
</div>
</div>

	
</body>
</html>