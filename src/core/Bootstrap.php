<?php
namespace Minic2\Core;
use Minic2\Core\Http\Request;

class Bootstrap {
    protected static $instance;
    private $router, $request;
    public function __construct () {
        $this->request = new Request();
        $this->router = new Router();
    }
    public static function getInstance () {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function runApp () {
        $this->router->dispatch();
    }
}