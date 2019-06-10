<?php

include "list.php";
// list.php included

$status = "all";
$field = "due";

$filter = [];
foreach ($list as $originalKey => $item) {
  if ($status === "all" || $item['complete'] == $status) {
    if (isset($field) && isset($item[$field])) {
      $filter[$originalKey] = $item[$field];
    } else {
      $filter[$originalKey] = $item['priority'];
    }
  }
}
asort($filter);

// echo '<pre>';
// var_dump($status, boolval("all"), $status === "all");
// echo '</pre>';

$currentYear = date("Y");
$year = $currentYear - 1;
$fruit = ['a' => 'banana', 'b' => 'apple', 'c' => 'cranberry'];

while ($year <= $currentYear) {
  echo $year . "<br />\n";
  $year++;
}

$year -= 1;
do {
  echo $year . "\n";
} while (++$year <= $currentYear);

// returns key and values sorted by value
while (list($key, $val) = each($fruit)) {
  echo "$key => $val\n";
}

for ($year = date('Y') - 1; ++$year <= date('Y'); print $year . "/n");

for ($i = 0; $i <= 5; $i++) {
  echo $i . "\n";
}

echo "<table>";
echo "<tr>";
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due</th>';
echo '<th>Complete</th>';
echo '</tr>';

// foreach ($list as $item) {
//   echo '<tr>';
//   echo '<td>' . $item["title"] . '</td>';
//   echo '<td>' . $item["priority"] . '</td>';
//   echo '<td>' . $item["due"] . '</td>';
//   echo '<td>';
//   if ($item["complete"]) {
//     echo "Yes";
//   } else {
//     echo "No";
//   }
//   '</td>';
//   echo '</tr>';
// }

foreach ($filter as $id => $value) {
  echo '<tr>';
  echo '<td>' . $list[$id]["title"] . '</td>';
  echo '<td>' . $list[$id]["priority"] . '</td>';
  echo '<td>' . $list[$id]["due"] . '</td>';
  echo '<td>';
  if ($item["complete"]) {
    echo "Yes";
  } else {
    echo "No";
  }
  '</td>';
  echo '</tr>';
}
