<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1"/>
	<title>Time</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body><center>
<table border=2>
<tr><td>
	<h1><b><i><font color=yellow >Time</font></i></b></h1>
		<span style="font-size: 50px;"><b>
			<?php 
				date_default_timezone_set("Asia/Kolkata");
				echo date(" h: i : s A"); 
			?> 
		</b>
		</span></td></tr>
	</center></table>
</body>
</html>