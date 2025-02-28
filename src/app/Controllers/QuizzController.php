<?php
namespace Minic2\App\Controllers;
use Minic2\Core\Bootstrap;
use Minic2\Core\Config;

class QuizzController {
    function index (Bootstrap $app, $params = null) {
        $app->view->render('quizz/index', [
            "links" => [
                'quizz/daicuong' => 'Đại cương',
                'quizz/chitren' => 'Chi trên',
                'quizz/hohap' => 'Hô hấp',
                'quizz/timmach' => 'Tim mạch',
                'quizz/bung' => 'Bụng',
                'quizz/coxuongkhop' => 'Cơ xương khớp',
                'quizz/sinhsan' => 'Sinh sản',
                'quizz/tietnieu' => 'Tiết niệu',
                'tquizz/ieuhoa' => 'Tiêu hoá',
                'quizz/thankinh_noitiet_giacquan' => 'Thần kinh - Nội tiết - Giác quan',
                'quizz/thacsi_2024' => 'Thạc sĩ 2024 (chép lại)',
            ]
        ]);
    }
    function hohap (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/hohap.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu tim mạch"
        ]);
    }
    function timmach (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/timmach.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu tim mạch"
        ]);
    }
    function chitren (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/chitren.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu chi trên"
        ]);
    }
    function daicuong (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/daicuong.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu đại cương"
        ]);
    }
    function thacsi_2024 (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/thacsi_2024.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Đề thi thạc sĩ 2024 (chép lại)"
        ]);
    }
    function bung (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/bung.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Bụng"
        ]);
    }
    function coxuongkhop (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/coxuongkhop.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Cơ xương khớp"
        ]);
    }
    function sinhsan (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/sinhsan.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Sinh sản"
        ]);
    }
    function thankinh_noitiet_giacquan (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/thankinh_noitiet_giacquan.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Thần kinh - Nội tiết - Giác quan"
        ]);
    }
    function tietnieu (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/tietnieu.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Tiết niệu"
        ]);
    }
    function tieuhoa (Bootstrap $app, $params = null) {
        $content = file_get_contents(Config::get("app.views_dir")."/quizz/html/tieuhoa.html");
        $app->view->render('quizz/quizz', [
            "content" => $content,
            "page_title" => "Giải phẫu Tiêu hoá"
        ]);
    }


}
