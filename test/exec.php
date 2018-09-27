<?php

include('../class/eCommerce.class');
include('config/config.php');

$exec = new eCommerce($config);
$result = array();

if ($_POST['action']) {
  switch ($_POST['action']) {
    case 'GetOrderStatus':
      $result = $exec->exec_CreateOrder_GetOrderStatus();
      break;
    case 'Purchase':
      $result = $exec->exec_CreateOrder_Purchase();
      break;
    case 'QuasiCash':
      $result = $exec->exec_CreateOrder_QuasiCash();
      break;
    default:
      $temp['status'] = 'error';
      $temp['log'] = 'no info about action';
      $result = json_encode($temp, TRUE);
  }
}

echo $result;

?>