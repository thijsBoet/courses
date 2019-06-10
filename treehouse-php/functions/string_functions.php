<?php

$phrase = "We do need no, education!";
$len = strlen($phrase) . "<br />";
echo $len;

$choppedStr = substr($phrase, 15, -1) . "<br />";
echo $choppedStr;

$pos = strpos($phrase, "do");
$pos2 = strpos($phrase, $choppedStr);
// strpos starts coutning from a 0
echo $pos . "<br />";
echo $pos2 . "<br />";
// returns false when not found
