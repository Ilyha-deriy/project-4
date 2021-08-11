<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once "App/Main/MyClass.php";
require_once "App/Secondary/MyClass.php";

$my1 = new \App\Main\MyClass();
$my1->hello();

$my2 = new \App\Secondary\MyClass();
$my2->hello();

use App\Secondary as Sec;

$my3 = new Sec\MyClass();
$my3->hello();


use App\Secondary;

$my4 = new Secondary\MyClass();
$my4->hello();

use App\Main\MyClass;

$my5 = new MyClass();
$my5->hello();
?>