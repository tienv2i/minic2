<?php

namespace Minic2\Core;

use Minic2\Core\Bootstrap;

class View
{
    protected array $data = [];

    public function __construct(array $defaultData = [])
    {
        $this->data = $defaultData;
    }

    public function set(string $key, mixed $value): self
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function render(string $viewName, array $extraData = []): void
    {
        $viewFile = __DIR__ . "/../app/Views/{$viewName}.php";

        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View file '{$viewName}.php' not found.");
        }

        $data = array_merge($this->data, $extraData);
        $app = Bootstrap::getInstance();
        extract($data);

        include $viewFile;
    }
}
