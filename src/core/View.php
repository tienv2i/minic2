<?php

namespace Minic2\Core;

use Minic2\Core\Bootstrap;
use Minic2\Core\Config;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

class View
{
    protected array $data = [];
    protected Environment $twig;
    protected static array $twigFunctions = [];
    protected static array $twigGlobals = [];
    protected static bool $initialized = false;

    public function __construct(array $defaultData = [])
    {
        $this->data = $defaultData;
        
        $loader = new FilesystemLoader(Config::get("app.views_dir"), realpath(__DIR__ . '/../app/Views'));
    
        $this->twig = new Environment($loader, [
            'cache' => __DIR__ . '/../storage/cache/views',
            'auto_reload' => true
        ]);


        foreach (self::$twigFunctions as $name => $function) {
            $this->twig->addFunction(new TwigFunction($name, $function));
        }

        foreach (self::$twigGlobals as $name => $value) {
            $this->twig->addGlobal($name, $value instanceof \Closure ? $value() : $value);
        }
    }

    public function render(string $viewName, array $extraData = []): void
    {
       
        $data = array_merge($this->data, ['app' => Bootstrap::getInstance() ], $extraData);
        
        echo $this->twig->render($viewName, $data);
    }

    public static function registerGlobal(string $name, mixed $value): void
    {
        if ($value instanceof \Closure) {
            self::$twigGlobals[$name] = $value;
        } else {
            self::$twigGlobals[$name] = fn() => $value;
        }
    }

    public static function registerFunction(string $name, callable|string $function): void
    {
        self::$twigFunctions[$name] = $function;
    }




}
