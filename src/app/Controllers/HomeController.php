<?php
namespace Minic2\App\Controllers;
use Minic2\Core;
use Minic2\Core\Config;

class HomeController {
    function index (Core\Bootstrap $app, $params = null) {
        $app->view->render('home/index');
    }
}