<?php

$number = 44880;
$length = 10;

$keys = generate_strings($number, $length);
// $keys is an array of random strings (1000 elements).

function generate_strings($number, $length) { 


    mt_srand(10000000 * (double)microtime() * $length); // Generate a randome string 
     
    $salt    = "ABCDEFGHJKMNPQRSTUVWXY3456789"; // the characters you want to allow 
     
    $len    = strlen($salt); 
     
    $strings = array(); 
     
    for($i = 0; $i < $number; $i++) { 
     
        $string = null; 
         
        for($j = 0; $j < $length; $j++) { //if you want to change the length of each string, do it here. You could randomise the string length by replacing $length, with mt_rand(6, 10); This would create random string lengths from 6-10 characters in length. 
         
            $string .= $salt[mt_rand(0, $len - 1)]; 
         
        } 
     
        if(in_array($string, $strings)) { 
        	$number++; 
        } else { 
        	$strings[] = $string;
        }
        echo $string.'<br>';
    } 
     
    return $strings; 

}


?>