<?php

$learn = array("Conditionals", "Arrays", "Loops");
// var_dump($learn);
// echo $learn[1];

// add item to end (dont forget [])
$learn[] = "Build something new.";
array_push($learn, "Functions", "Forms", "Objects");

// remove item from end of array and returns it
array_pop($learn);

// add item to front
array_unshift($learn, "HTML ", "CSS");

// remove first item and returns it
echo "You removed: " . array_shift($learn);

// remove specific key item(s), but doesm't update key sequence
unset($learn[0], $learn[4]);

// reassigning index values [0],[1],[2],[3]
$learn = array_values($learn);

//$learn[0] = "Email";

// display array as String
echo implode("\n", $learn);

$learn[0] = "Email";

var_dump($learn);

for ($i = 0; $i < count($learn); $i++) {
  echo $learn[$i] . "\n";
}
