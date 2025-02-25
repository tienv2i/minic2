<?php
namespace Minic2\App\Controllers;
use Minic2\Core;
use Minic2\Core\Config;

class QuizzController {
    function index (Core\Bootstrap $app, $params = null) {
        $app->view->render('quizz/index');
    }
    function timmach (Core\Bootstrap $app, $params = null) {
        $app->view->render('quizz/timmach');
    }
    function chitren (Core\Bootstrap $app, $params = null) {
        $app->view->render('quizz/chitren');
    }
}