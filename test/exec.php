<?php
// Вывод ошибок, кроме E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

include('../class/eCommerce.class');
include('config/config.php');

$exec = new eCommerce($config);
$result = array();

if ($_POST['action']) {
  switch ($_POST['action']) {
    case 'GetOrderStatus':
      $result = $exec->exec_CreateOrder_GetOrderStatus($array = $_POST);
      break;
    case 'Purchase':
      $result = $exec->exec_CreateOrder_Purchase($array = $_POST);
      break;
    case 'QuasiCash':
      $result = $exec->exec_CreateOrder_QuasiCash($array = $_POST);
      break;
    default:
      $temp['status'] = 'error';
      $temp['log'] = 'no info about action';
      $result = json_encode($temp, TRUE);
  }
}

echo $result;

?>