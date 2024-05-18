<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ["a", "e", "i", "o", "u"];

foreach($strings as $string)
{
   
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array(strtolower($string[$i]), $vowels)) {
          $count++;
        }
      }

      $reverse = strrev($string);

    echo "Original String: ". $string.", Vowel Count: ".$count.", Reversed String: ".$reverse."<br>";
    
    
}