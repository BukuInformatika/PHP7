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




<?php
function test() {
    $a = 5; // Variable local
    echo "<p>Variable a didalam function adalah: $a</p>";
}
test();
 
// Jika kita memanggil variable local maka tidak akan ada nilainya
echo "<p>Variable a diluar function adalah: $a</p>";
?> 
 
// Output program
// Variable a didalam function adalah: 5
// Variable a diluar function adalah:



<?php
function test() {
    static $a = 8;
    echo $a;
    $a++;
}

test();
test();
test();
?> 

// Output
// 8
// 9
// 10