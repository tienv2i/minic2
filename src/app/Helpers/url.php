<?php
use Minic2\Core\Config;
$cached = [];

function base_url ($path = '') {
    return $cached['base_url'] ?? rtrim(Config::get('app.base_url', '/public/index.php'),'\\/').'/'.$path;
}

function static_url($path='') {
    return Config::get('app.static_url', base_url('public/static'));
}

function base_path ($path = '') {
    return $cached['base_path'] ?? rtrim(Config::get('base_path', realpath(__DIR__.'/../..')),'\\/').'/'.$path;
}