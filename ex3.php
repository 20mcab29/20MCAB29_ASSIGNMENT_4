<?php   
$msg = '';
$reverse = '';
$num = '';
$sum = 0;
$m = 0;
$temp = '';
    if($_POST)  
    {  
        $num = $_POST['num']; 
        $temp = $num;
        $reverse = strrev($num);  
        if($num == $reverse){  
            $msg =  'The number <b>' . $num . '</b> is Palindrome';     
        }else{  
            $msg =  'The number <b>' . $num . '</b> is not a Palindrome';   
        }  
        while($num > 0)
        {
            $m = $num % 10;
            $sum  = $sum + $m;
            $num = $num / 10;  
        }
       
}     
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Palindrome</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body><center>
<table border=2>
<tr><td>
    <h1><b><i><font color=yellow >Palindrome Of Number</font></i></b></h1>
    <form method="post" class="w3-container">        
    <input class="w3-input" type="text" name="num" placeholder="Enter your number" /><br> 
        <button class="w3-button w3-yellow" type="submit">Check</button>  
    </form>  </center>

      <center><h2><?php echo $msg; ?></h2></center>
      <center><h2>Reverse of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $reverse . '</b>' ?></h2></center>
      <center><h2>Sum of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $sum . '</b>' ?></h2></center>
	  </td></tr></table>

</body>
</html>