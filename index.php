<!DOCTYPE html>
<html>
<head>
	<title>Calculator using PHP</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#FFFAF0;">
	<div class='container'>
		
		<div class="col-md-12">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b><center>CALCULATOR</center></b></h1>
		<form method="get">
			<center>
			<input type="text" class='form-control' name="num1" placeholder="Enter number 1"><br>
			<input type="text" class='form-control' name="num2" placeholder="Enter number 2"><br>
			<button class='btn btn-primary' type="submit" name="add">Add</button>
			<button class='btn btn-primary' type="submit" name="sub">Sub</button>
			<button class='btn btn-primary' type="submit" name="mul">Mul</button>
			<button class='btn btn-primary' type="submit" name="div">Div</button>	
			<button class='btn btn-primary' type="submit" name="mod">Mod</button>	
			<button class='btn btn-primary' type="submit" name="square-root">Sqrt()</button>	
			<button class='btn btn-primary' type="submit" name="sin">Sin()</button>	
			<button class='btn btn-primary' type="submit" name="cos">Cos()</button>	
			<button class='btn btn-primary' type="submit" name="tan">Tan()</button>	
		
			<button class='btn btn-primary' type="submit" name="log">Log()</button>
			<button class='btn btn-primary' type="submit" name="exp">Exp()</button>
			<button class='btn btn-primary' type="submit" name="pow">Pow()</button>	
		</center>
		</form>
		<br>
	

	
<div class='answer'>
	<center>
<?php

	if(isset($_REQUEST['add'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$add = $num1+$num2;
		echo "<b>Output is : ".$add."</b>";
	}
	else if(isset($_REQUEST['sub'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$sub = $num1-$num2;
		echo "<b>Output is : ".$sub."</b>";
	}
	else if(isset($_REQUEST['mul'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$mul = $num1*$num2;
		echo "<b>Output is : ".$mul."</b>";
	}
	else if(isset($_REQUEST['div'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$div = $num1/$num2;
		echo "<b>Output is : ".$div."</b>";
	}
	else if(isset($_REQUEST['mod'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$sub =  $num1%$num2; 
		echo "<b>Output of " .$num1. "%" .$num2. " : ".$sub."</b>";
	}
	else if(isset($_REQUEST['square-root'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sqrt($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['sin'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = sin($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['cos'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = cos($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	
	else if(isset($_REQUEST['tan'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = tan($num1);
		echo "<b>Output is : ".$out."</b>";
	}

	else if(isset($_REQUEST['log'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = log($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['exp'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = exp($num1);
		echo "<b>Output is : ".$out."</b>";
	}
	else if(isset($_REQUEST['pow'])){
		$num1 = (float)$_REQUEST['num1'];
		$num2 = (float)$_REQUEST['num2'];
		$out = pow($num1,$num2);
		echo "<b>Output of ".$num1." to the power " .$num2. " : ".$out."</b>";
	}
	
?>
</center>
</div>
</div>
</div>
</div>
</div>
</body>
</html>