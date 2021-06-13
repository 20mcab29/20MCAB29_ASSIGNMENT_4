<?php  
$msg = '';
 if($_POST)  
 {    
  $number = $_POST['number'];  
  
  $a = $number;  
  $sum  = 0;  
 
  while( $a != 0 )  
  {  
   $rem   = $a % 10; 
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $a   = $a / 10;
  }   
  if( $number == $sum )  
  {  
        $msg = 'Yes <b>'. $number . '</b> is an Armstrong Number';  
  }else  
  {  
         $msg =  '<b>' . $number . '</b>' . ' is not an Armstrong Number';  
  }  
 }  
?>     
<html>  
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body><center>
<table border=2>
<tr><td>
 <form method="post" class="w3-container"> 
  <h1><b><i><font color=yellow >Find the Armstrong Number</font></i></b></h1>
  <br>
   <input class="w3-input" type="number" name="number" placeholder="Enter the number">  
   <br>
   <input class="w3-button w3-yellow" type="submit" value="Submit">  
  </form>  
  <center><h2><?php echo $msg; ?></h2></center>
  </td></tr></table>
  </center>
</body>  
</html> 