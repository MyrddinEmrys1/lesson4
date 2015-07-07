<?php

$cols = $_GET['number1'];
$rows = $_GET['number2'];

echo '<table border="1">';

for ($tr = 1; $tr <= $rows; $tr++){
  echo '<tr>';
  for ($td = 1; $td <= $cols; $td++){
      echo '<td>'. rand() .'</td>';
  }
  echo '</tr>';
}

echo '</table>';
?>
