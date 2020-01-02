<!DOCTYPE html>
<html>
<head>
	<title>php学习</title>
</head>
<body>
	<h1>一、基本语法</h1>

	<h3>1、两种文本输出</h3>
	<h4>1）、print只允许输出一个字符串，返回值为1</h4>
	<?php
		print "<p style='color:green'>hello</p>"
	?>
	<h4>2）、echo可以输出一个或多个字符串，没有返回值</h4>
	<?php
		echo "<span style='color:#ffcc00'>world</span>", "and", "not bad"
	?>

	<h3>2、变量($变量名)</h3>
	<p>5+6 =
		<?php 
			$x = 5;
			$y = 6;
			$z = $x + $y;
			echo $z;
		?>
	</p>
	
	<h3>3、EOF(会解析html格式，保留引号)</h3>

	<h3>4、数据类型</h3>
	<h4>1）、var_dump() 函数返回数组的数据类型和值</h4>
	<h4>2）、浮点数和2.4e3的意义</h4>
	$x = 2.4e3 = 
	<?php
		$x = 2.4e3;
		echo $x , "<br/>";
	?>
	var_dump($x) = <?php var_dump($x); ?>
	<h4>3）、数组</h4>
	$cars=array("Volvo","BMW","Toyota");
</body>
</html>