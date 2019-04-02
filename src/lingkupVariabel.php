<?php

  function test() {
  	   global $a;
   	   global $b;
	   $b=15;
	   echo $a;  //7
	   echo $b;  //15
  }
	   test();
	   echo $a; //7
	   echo $b; //15
  
?>

<?php
	$a = 1;
	$b = 2;
 
function test() {
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
 
test();
echo $c; 
?> 