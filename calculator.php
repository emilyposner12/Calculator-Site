<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" href = "styling.css">
	<title>Calculator</title>
</head>
<body>
	<h1> Your Basic Calculator </h1>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		<p>
		Number: <input type="text" name="num1" value=""/>
		</p>
		<p>
		Number: <input type="text" name="num2" value=""/>
		</p>
 
		<input type="submit" value="Add" name="add"/>
		<input type="submit" value="Subtract" name="subtract"/>
		<input type="submit" value="Multiply" name="multiply"/>
		<input type="submit" value="Divide" name="divide"/> 			
	</form>
<?php 
	$result = 0;
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	$type = "";
	if (isset($_GET["add"])) { 
		$result = $num1 + $num2;
		$type = "sum";
	} elseif(isset($_GET["subtract"])) {
		$result = $num1 - $num2;
		$type = "difference";
	} elseif(isset($_GET["multiply"])) {
		$result = $num1*$num2;
		$type = "product";
	} elseif(isset($_GET["divide"])) {
		if ($num2 == 0) {
			$result = "FAIL TO CALCULATE";
			$type = "quotient";
		}
		else {
			$result = $num1/$num2;
			$type = "quotient";	
		}
	}
	
    echo "<h1>";
    if (isset($_GET['add']) || (isset($_GET["subtract"])) || (isset($_GET["multiply"])) || (isset($_GET["divide"]))){
        echo "The ". $type. " is: " .$result;
    }
    else{
        echo "Enter 2 numbers and select operation";
    }
	echo "</h1>";  
?>
</body>
</html>