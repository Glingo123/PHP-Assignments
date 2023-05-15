<?php  
$a = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<b>Our Fibonacci series is : ";    
echo $n1.' ,  '.$n2.'  , ';  
while ($a < 20 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.'  , ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $a = $a + 1;  
}
?>  