<?php

namespace Minic2\Core;

class Config
{
    protected static array $config = [];
    
    public static function load(string $name): void
    {
        $path = dirname(__DIR__, 2) . "/config/{$name}.php";
        
        if (file_exists($path)) {
            self::$config[$name] = require $path;
        } else {
            throw new \Exception("Config file '{$name}.php' not found.");
        }
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        [$file, $item] = explode('.', $key, 2) + [null, null];
        
        if (!isset(self::$config[$file])) {
            try {
                self::load($file);
            } catch (\Exception $e) {
                return $default;
            }
        }
        
        return $item ? (self::$config[$file][$item] ?? $default) : (self::$config[$file] ?? $default);
    }
}
