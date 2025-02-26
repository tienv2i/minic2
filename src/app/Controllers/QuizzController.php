<?php
namespace Minic2\App\Controllers;
use Minic2\Core;
use Minic2\Core\Config;

class QuizzController {
    function index (Core\Bootstrap $app, $params = null) {
        $app->view->render('quizz/index');
    }
    function timmach (Core\Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/timmach.html");
        $app->view->render('layout', [
            "content" => $content,
            "page_title" => "Module tim mạch"
        ]);
    }
    function chitren (Core\Bootstrap $app, $params = null) {
        $app->view->render('quizz/chitren');
    }
}
