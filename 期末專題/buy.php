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
	width:40%;
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
<form action = "buy_res.php">

<p>會員購買</p>

<table border = 2>	
	<th>編號</th><th>商品</th><th>圖片</th><th>價格</th><tr>

	<?php
		include("product.php");
	   for($i = 0 ; $i < 6 ; $i = $i + 1)
	   {
		echo "<tr><th>" . ($i + 1) . "</th>" ;
		echo "<td><img src =" . $allprod_img [$i] . "></td>";
		echo "<th>" . $allprod [$i] . "</th>";
		echo "<td>" . $allprod_price [$i] . "</td> <tr>";
		
	   }
	?>

	<tr><td>商品</td>
	<td colspan = 3>
	<select name = "c_prod">
		<?php 
			for ($i = 0 ; $i < count($allprod) ; $i = $i+1)
			{
				echo "<option value=" . $i . ">" . $allprod[$i] . "</option>";
			}
		?>
	</select>
	</td>

	<tr><td>數量</td>
	<td colspan = 3>
	<input type = text name = "c_number" size = 30>
	</td>

	<tr><td>語言</td>
	<td colspan = 3><input type = checkbox name = "lan[]" value=1 checked>中文
	<input type = checkbox name = "lan[]" value=2>英文
	<input type = checkbox name = "lan[]" value=3>日文
	<input type = checkbox name = "lan[]" value=4>泰文
	</td><tr>


	<td colspan = 4>
	<input type = submit value = "送出">
	<input type = reset value = "取消">
	</td>

</table>

<a href = "website login.php">返回官網</a>

</form>
</body>
</html>