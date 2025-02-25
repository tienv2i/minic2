<?php
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if (!defined('BASE_PATH')) define('BASE_PATH', realpath('../'));

return [
    "base_url" => 'index.php',
    "app_name" => "Minic2 PHP framework",
    "views_dir" => BASE_PATH.DS."src".DS."app".DS."Views"
];