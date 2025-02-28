<?php
namespace Minic2\App\Controllers;
use Minic2\Core;
use Minic2\Core\Config;
use Minic2\Core\Bootstrap;

class HomeController {
    function index (Bootstrap $app, $params = null) {
        $app->response->redirect(base_url('quizz'));
    }
}