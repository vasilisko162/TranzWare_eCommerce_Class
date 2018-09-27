<?php

include('../class/eCommerce.class');

$config = array(
  'url'          => 'https://twpg-test.siab.ru/exec',
  'merchantid'   => '9902200976',
  'area'         => 'development',
  'logShow'      => TRUE,
  'logCurl'      => 'full',
  'data'         => 'json',
  'curl_referer' => 'https://site.name',
  'curl_Ssl'     => TRUE,
  'dirCert'      => $_SERVER['DOCUMENT_ROOT'] . '/test/certs/'
);


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