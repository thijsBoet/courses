<?php

$names = [
  'Mike' => 'Frog',
  'Chris' => 'Teacher',
  'Hampton' => 'Student'
];

// returns all the keys of an array
var_dump(array_keys($names));

foreach (array_keys($names) as $name) {
  echo "Hello $name <br />";
}

function print_info($value, $key)
{
  echo "$key is a $value.<br />";
}
// walks through array and uses function on every value
array_walk($names, 'print_info');
