<?php
namespace Minic2\Core;
use Minic2\Core\Http;

class Bootstrap {
    protected static $instance;
    private $router;
    public Http\Request $request;
    public Http\Response $response;
    public View $view;
    public function __construct () {
        Config::load('app');
        $this->request = new Http\Request();
        $this->response = new Http\Response();
        
        $this->router = new Router();
         
        $this->view = new View();

        self::$instance = $this;
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