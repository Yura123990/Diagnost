<?php
require('Page.php');
$page1 = new Page;
$page1->title = 'Контакти';
$page1->avtor = 'Адміністратор';
var_dump($page1);
$page1->vit($page1->avtor);
?>