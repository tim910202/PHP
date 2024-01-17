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
<?php
	include("product.php");

		
	$c_prod = $_GET["c_prod"];
	$c_number = $_GET["c_number"];
		
	$price = $allprod_price[$c_prod];
		
	$total = $c_number*$price;
	
	echo "購買成功<br><hr>";
	
	echo "商品：". $allprod[$c_prod] . "<br>";
	
	echo "數量：" . $c_number  . "<br>";
	
	echo " 單價 = " . $price . "<br>";

	echo "總價 = " . $total . "<br>";

	if(isset($_GET["lan"]))
	{
		$lan=$_GET["lan"];
		echo "語言:";
		
		for($i = 0 ; $i < count($lan) ; $i = $i+1)
		{
			$c = $lan[$i];
			
			switch($c)
			{
				case 1:
					echo "中文";
					break;
				case 2:
					echo "英文";
					break;
				case 3:
					echo "日文";
					break;
				case 4:
					echo "泰文";
					break;
			}
			echo " ";
		}
	}
	
	echo "<br><br>謝謝光臨　感謝惠顧<br>";
	



?>
<a href = "website login.php">返回官網</a>