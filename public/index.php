<?php
error_reporting( E_ALL );
include_once "../vendor/autoload.php";
use Minic2\Core\Bootstrap;

$bootstraper = new Bootstrap();


$bootstraper->runApp();