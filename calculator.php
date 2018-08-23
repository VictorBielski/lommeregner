<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lommeregner</title>
<link rel=stylesheet type="text/css" href="style1.php">
</head>

<body>
	<div class="lommeregner">
	<h1>Simple Calculator</h1>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type="number" name="val1" required placeholder="Skriv her.."/><br><br>
		<input type="number" name="val2" required placeholder="Skriv her.." /><br>
		<button type="submit" name="operator" value="add">+</button>
		<button type="submit" name="operator" value="sub">-</button>
		<button type="submit" name="operator" value="mul">*</button>
		<button type="submit" name="operator" value="divi">/</button>
	</form>

<?php
//	$v1 = $_GET['val1'];
//	$v2 = $_GET['val2'];
	$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('missing or illegal val1 parameter');
	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('missing or illegal val2 parameter');
	$op = $_GET['operator'];
	switch($op){
		case 'add':
			$res = $v1+$v2;
			$opchar = '+';
			break;
			
		case 'sub':
			$res = $v1-$v2;
			$opchar = '-';
			break;	
			
			case 'mul':
			$res = $v1*$v2;
			$opchar = '*';
			break;
			
			case 'divi':
			$res = $v1/$v2;
			$opchar = '/';
			break;
			
			
			
		default:
			$res = 'Unknown operator "'.$op.'"';
			$opchar = $op;
	}
	echo $v1.' '.$opchar.' '.$v2.' = '.$res;	  
?>
</div>	
	
</body>
</html>