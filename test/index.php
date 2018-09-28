<?php

include('../class/testPage.class');
include('config/config.testPage.php');

$page = new testPage($config);
echo $page->showPage();
