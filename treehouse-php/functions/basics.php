<?php

// Default argument => used when no argument is passed
function hello($arr = ["Darth Vader"])
{
  if (is_array($arr)) {
    foreach ($arr as $name) {
      echo "Hello, " . $name . " how's it going! <br />";
    }
  } else {
    echo "Hello, friends!";
  }
}
// Default argument
hello();

// Default argument can even be null for not required
function get_info($name, $title = Null)
{
  echo "$name has arrived, they are here with us as a $title.";
}
get_info("Matthijs");

$names = ["Yoda", "Chewwie", "Han Solo", "Luke Skywalker"];
hello($names);

$current_user = "Mike";
function isMike()
{
  // Must either import global vars or pass through as function argument(s)
  global $current_user;
  if ($current_user === "Mike") {
    echo "Current user is Mike! <br />";
  } else {
    echo "Current user is NOT Mike! <br />";
  }
}
isMike();

function sum($a, $b)
{
  $arr = [$a, $b, $a + $b];
  return $arr;
}
$value = sum(5, 5);
// Print Array
print_r($value);
echo $value[2];

function answer()
{
  echo 42;
}
// $func === answer
$func = 'answer';
$func();
// anonymous function => must use use() to pass arguments
$greet = function () use ($current_user) {
  echo "greet $current_user <br />";
};
$greet();