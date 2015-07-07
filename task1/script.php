<?php

switch ($_GET['action']) {
  case 'square_root':
    print sqrt($_GET['number']) ;
    break;
  case 'degree':
    print $_GET['number'] * $_GET['number'];
    break;
}
?>
