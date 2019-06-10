<?php

$iceCream = array(
  "Alena" => "Black Cherry",
  "Treasure" => "Chocolate",
  "Dave" => "Cookies and Cream",
  "Rialla" => "Strawberry"
);

// var_dump($iceCream);

$iceCream["Alena"] = "Pistachio";
// overides Alena value and doesnt add seconds flavor
echo $iceCream["Alena"];
// Keys must be unique
// Keys are Strings or Integers
// Strings with numbers are passed as an integers "1" === 1
// Floats are truncated and passed as an integers 1.5 === 1
// Booleans are converted to 1 for True and 0 for False

$keys = array(
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
);

// all keys covert to one only value 'd' remains, because of overwriting
var_dump($keys);
