<?php
namespace Minic2\App\Controllers;
use Minic2\Core\Config;

class HomeController {
    function index ($app, $params = null) {
        echo Config::get('app.app_name');
    }
}