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
            "page_title" => "Giải phẫu tim mạch"
        ]);
    }
    function chitren (Core\Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/chitren.html");
        $app->view->render('layout', [
            "content" => $content,
            "page_title" => "Giải phẫu chi trên"
        ]);
    }
    function daicuong (Core\Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/daicuong.html");
        $app->view->render('layout', [
            "content" => $content,
            "page_title" => "Giải phẫu đại cương"
        ]);
    }
}
