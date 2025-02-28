<?php
namespace Minic2\App\Controllers;
use Minic2\Core;
use Minic2\Core\Config;
use Minic2\Core\Bootstrap;
class HomeController {
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
}