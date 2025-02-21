<?php

namespace Minic2\Core\Http;

class Response
{
    protected int $statusCode = 200;
    protected array $headers = [];
    protected mixed $content = '';

    public function setStatusCode(int $code): self
    {
        $this->statusCode = $code;
        return $this;
    }

    public function setHeader(string $key, string $value): self
    {
        $this->headers[$key] = $value;
        return $this;
    }

    public function setContent(mixed $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function send(): void
    {
        http_response_code($this->statusCode);

        foreach ($this->headers as $key => $value) {
            header("{$key}: {$value}");
        }

        if (is_string($this->content) || is_numeric($this->content)) {
            echo $this->content;
        } elseif (is_array($this->content) || is_object($this->content)) {
            echo json_encode($this->content);
        }
    }
}
