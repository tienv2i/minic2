<?php
namespace Minic2\Core;
use Minic2\Core\Http;

class View {

    public function __construct() {

    }

    public function render($name, $params=[]) {
        $response = Bootstrap::getInstance()->response;


        $response->html(....)->send();
    }
}