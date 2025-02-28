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
        
        $this->loadHelpers();

        $this->request = new Http\Request();
        
        $this->response = new Http\Response();

        $this->view = new View();  

        $this->router = new Router();

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
    private function loadHelpers() {
        $helpersPath = __DIR__ . '/../app/Helpers/';
        
        if (is_dir($helpersPath)) {
            foreach (glob($helpersPath . '*.php') as $file) {
                require_once $file;
            }
        }
    }
}