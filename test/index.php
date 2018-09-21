<?php

include('../class/testPage.class');
$config = array(
  'formUrl'     => 'https://twpg-test.siab.ru',
  'formReferer' => 'https://siab.ru',
  'formAmount'  => '',
  'formCurrency' => ''
);
$page = new testPage($config);
echo $page->showPage();
