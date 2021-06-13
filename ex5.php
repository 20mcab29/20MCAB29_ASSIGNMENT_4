<!DOCTYPE html>
<html>
<head>
	<title>ARITHMETIC</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<?php
$msg = '';
if(isset($_POST['submit'])) {
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];

	switch($ch) {
		case '+':
			$r = $a + $b;
			$msg = 'Addition of two numbers = ' . $r ;
			break;

		case '-':
			$r = $a - $b;
			$msg = ' Subtraction of two numbers= '. $r ;
			break;

		case '*':
			$r = $a * $b;
			$msg = ' Multiplication of two numbers ' . $r ;
			break;

		case '/':
			$r = $a / $b;
			$msg = ' Divison of two numbers = ' . $r ;
			break;

		default:
			$msg = 'invalid option';
	}
}
?>
<body><center>
	<table border=2>
	<tr><td>
	<form method="post" class="w3-container">
		<h1><b><i><font color=yellow >
		ARITHMETIC OPERATIONS
		</font></i></b></h1>
				 <input class="w3-input" type="text" name="num1"
					value="" placeholder="Enter first value"/>
				 <input class="w3-input" type="text" name="num2" value=""
					placeholder="Enter sceond value"/>
				 
					<p>
  						<input class="w3-radio" type="radio" name="option" value="+" checked>
 						 <label>+</label>
 					</p>
 					<p>
						<input class="w3-radio" type="radio" name="option" value="-">
						<label>-</label>
					</p>
					<p>
						<input class="w3-radio" type="radio" name="option" value="*">
						<label>*</label>
					</p>
					<p>
						<input class="w3-radio" type="radio" name="option" value="/">
						<label>/</label>
					</p>
				
			

			
				 <input class="w3-button w3-yellow" type="submit" name="submit"
					value="Submit"/>
	</form>
	<br>
<center><h1><?php echo $msg; ?></h1></center>
	</td></tr>
		</table>
</center>
</body>
</html>
