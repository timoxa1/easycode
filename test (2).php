<?php

function myfunc( $string){
	$x ='abcdef';
for ($i=strlen($x); $i >0 ; $i--) { 
    $string=$x[$i]. $string;
   echo  $string;
}
}
?>