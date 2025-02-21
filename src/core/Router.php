<?php
namespace Minic2\Core;

use Minic2\Core\Http\Request;
class Router {
    public function __construct () {
        
    }

    public function dispatch (Request $request = null) {
        if ($request === null) {
            $request = new Request();
        }
        
        $controllerName = $request->getController();
        $actionName = $request->getAction();

        // Validate controller name (only letters, numbers, underscores, dashes, and dots allowed)
        if (!preg_match('/^[a-zA-Z0-9_.-]+$/', $controllerName)) {
            http_response_code(404);
            echo "Invalid URL format.";
            return;
        }
        
        // Convert controller name to class format
        $controllerClass = "Minic2\\App\\Controllers\\".$request->getControllerClass();

        if (!class_exists($controllerClass)) {
            http_response_code(404);
            echo "Controller not found.";
            return;
        }
        
        $controller = new $controllerClass();
        
        if (!method_exists($controller, $actionName)) {
            http_response_code(404);
            echo "Action not found.";
            return;
        }
        call_user_func_array([$controller, $actionName], 
            ['app' => Bootstrap::getInstance(), ...$request->getParams()]
        );
    }
}