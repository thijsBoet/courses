<?php

$a = 15;
$b = 10;

if ($a === $b) {
  echo "values are equal.";
} elseif ($a < $b) {
  echo '$a is less than $b.';
} elseif ($a > $b) {
  echo '$a is greater than $b.' . "\n";
} else {
  echo "values are NOT equal.\n";
}

$score = 59.5;

if ($score >= 60) {
  echo "Level completed.";
} elseif ($score <= 30) {
  echo "You should practice more, before trying again.";
} else {
  echo "Try again.";
}

if ($a != $b) {
  echo "Not equal ";
}

$c = 0;

if (!$c) {
  echo "False \n";
}

$num = 100;
if ($num >= 10) {
  if ($num <= 1000) {
    echo "$num is within range \n";
  } else {
    echo "$num is greater than 1000 \n";
  }
} else {
  echo "$num is NOT within range \n";
}

