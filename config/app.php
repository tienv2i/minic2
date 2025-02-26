<?php
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if (!defined('BASE_PATH')) define('BASE_PATH', realpath('../'));

return [
    "base_url" => 'https://huynhanhtien.com/minic2/public/index.php',
    "static_url" => "https://huynhanhtien.com/minic2/public/static",
    "app_name" => "Minic2 PHP framework",
    "views_dir" => BASE_PATH.DS."src".DS."app".DS."Views"
];
