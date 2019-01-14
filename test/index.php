<?php
// Вывод ошибок, кроме E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

include('../class/testPage.class');
include('config/config.testPage.php');

$page = new testPage($config);
echo $page->showPage();
