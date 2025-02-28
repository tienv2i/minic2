<?php
use Minic2\Core\Config;
use Minic2\Core\View;

$cached = [];

function base_url ($path = '') {
    return $cached['base_url'] ?? rtrim(Config::get('app.base_url', '/public/index.php'),'\\/').'/'.$path;
}
function static_url($path="") {
    return Config::get('app.static_url', base_url('public/static'))."/$path";
}
 
View::registerFunction('base_url', 'base_url');
View::registerFunction('static_url', 'static_url');

