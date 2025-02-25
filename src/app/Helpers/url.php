<?php
use Minic2\Core\Config;
$cached = [];

function base_url ($path = '') {
    echo Config::get('app.base_url', '');
    return $cached['base_url'] ?? rtrim(Config::get('app.base_url', ''),'\\/').'/'.$path;
}

function static_url($path='') {
    return Config::get('static_url', base_url('public/static'));
}

function base_path ($path = '') {
    return $cached['base_path'] ?? rtrim(Config::get('base_path', realpath(__DIR__.'/../..')),'\\/').'/'.$path;
}